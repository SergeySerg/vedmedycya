<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
//use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use App\Models\Setting;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Order;
use App\Models\Text;
use App;
use DB;
use Illuminate\Support\Facades\Response;
//use Illuminate\Contracts\View\View;
use Ixudra\Curl\Facades\Curl;
use Mail;
use Illuminate\Support\Facades\Validator;
use Debugbar;
use Illuminate\Pagination\Paginator;
use Cookie;
use URL;
class ArticleController extends Controller {

	/**
	 * Display a listing of the resource with subdomain.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$parent_hotel = Article::where('attributes->url->' . App::getLocale(), $request->name )->first();

		return view('frontend.hotels')->with(compact('parent_hotel'));
	}
	public function renderUrl(Request $request)
	{
		$parent_hotel = Article::where('attributes->url->' . App::getLocale(), $request->name )->first();
        $type = Category::where('url->' . App::getLocale(), ($request->url) ? $request->url : $request->category)->first();
		return view('frontend.' . $type->link)->with(compact('parent_hotel'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function indexMain(Request $request, $lang = null, $type = 'main')
	{
		$main_reviews = $this->showMainPage('reviews');
		$main_advantages = $this->showMainPage('advantages');
		return view('frontend.' .  $type)
			->with(compact('main_reviews', 'main_advantages'));

	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		$parent_hotel = Article::with('article_children')->where('attributes->url->' . App::getLocale(), $request->name )->first();
		$article = Article::where('id', $request->id)->first();
		$article_price = $article->getPrice($article->id, $article->article_parent->id);
		$surchange = $article_price['surchange'];
		$base_price = $article_price['base_price'];
		$solo_settle = $article_price['solo_settle'];
		$surchange_children = $article_price['surchange_children'];
		return view('frontend.rooms')
			->with(compact
					(
						'article',
						'parent_hotel',
						'surchange',
						'solo_settle',
						'surchange_children',
						'base_price'
					)
			);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showSeo(Request $request)
	{
		$seo_article = Article::where('attributes->url->' . App::getLocale(), $request->url )->first();
		return view('frontend.seo')->with(compact('seo_article'));
	}
	public function show404(Request $request)
	{
		return view('frontend.404');
	}

	public function showMainPage($type){
		/*Select slide that check as show_main_page*/
		$category_item = Category::with('articles')->select('id')->where('link', $type)->first();
			Debugbar::info($category_item);
		$main_item = $category_item->articles()->where('attributes->show_main_page', 1)->activeAndSortArticles()->get();
			Debugbar::info($main_item);
		return $main_item;



	}
	public function pumpkin(Request $request)
	{
		return view('pumpkin_party');
	}

	public function googleHtml(Request $request)
	{
		return view('google_html');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function contact(Request $request, $lang)
	{
		//dd('contact');
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'name' => 'required|max:50',
				'email' => 'required|email',
				'text' => 'required|max:600'
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}

			//Send item on admin email address
			Mail::send('emails.contact', $all, function($message){
				$email = getSetting('config.email');
				$message->to($email, 'Globaltobacco')->subject('Сообщение с сайта "Globaltobacco"');
			});
			return response()->json([
				'success' => 'true'
			]);
		}
	}
	public function reserved(Request $request, $lang)
	{
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->json()->all();
			//dd($request->cookie('_gid'));
			/*make rules for validation*/
			$rules = [
				'name' => 'required|max:30',
				'email' => 'email',
				'phone' => 'required|max:15'
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}
      $refresh_token_setting = Setting::where('name', '=','refresh_token')->first();
      $response = Curl::to('https://nestorvmandry.amocrm.ru/oauth2/access_token')
        ->withData( array(
          'client_id' => '2bba3de7-6564-4f10-8ea0-1645e5367f4b',
          "client_secret" => "ucnc7zkSjuTweNYPC2CqQxrrEQEBlyAC6NJnhKjtriTMtTSjk1ff3TEGvUZU0DuU",
          "grant_type" => "refresh_token",
          "refresh_token" => $refresh_token_setting->description,
          "redirect_uri" => "https://vedmedycya.com.ua/redirect"
        ) )
        ->asJson()
        ->post();
      //dd($response);
      $refresh_token_setting->description = $response->refresh_token;
      $refresh_token_setting->save();
      $finishData = [];
      $ids = [];
      $dateOnArr = [];
      $countArr = [];
      $dateOffArr = [];
      $custom_fields_values = [];
      $ids[0] = (object)['id' => 703527];
      $tags = (object)['tags' => $ids];
      $dateOnArr[0] = (object)["value" => $all['dateStart']];
      $dateOffArr[0] = (object)["value" => $all['dateFinish']];
      $countArr[0] = (object)["value" => $all['adults']];
      $cottageArr[0] = (object)["value" => trim(str_replace("\n", "", $all['hotelName']))];
      $roomData[0] = (object)["value" => trim(str_replace("\n", "", $all['roomName']))];
      $refererData[0] = (object)["value" => $_SERVER['HTTP_REFERER']];
      $cookiesData[0] = (object)["value" => Cookie::get()];

      array_push ( $custom_fields_values,
        (object)['field_id' => 709859, 'values' => $dateOnArr],
        (object)['field_id' => 701977, 'values' => $countArr],
        (object)['field_id' => 709861, 'values' => $dateOffArr],
        (object)['field_id' => 701979, 'values' => $cottageArr],
        (object)['field_id' => 709853, 'values' => $roomData],
        (object)['field_id' => 701601, 'values' => $refererData]
//        (object)['field_id' => 701601, 'values' => $cookiesData]
        );
      if(isset($all['utmSource']) && $all['utmSource'] == 'fb'){        $utmSource[0] = (object)["value" => $all['utmSource']];
        $utmMedium[0] = (object)["value" => $all['utmMedium']];
        $utmCampaign[0] = (object)["value" => $all['utmCampaign']];
        $utmContent[0] = (object)["value" => $all['utmContent']];

        array_push ( $custom_fields_values,
          (object)['field_id' => 701607, 'values' => $utmSource],
          (object)['field_id' => 701609, 'values' => $utmMedium],
          (object)['field_id' => 701611, 'values' => $utmCampaign],
          (object)['field_id' => 701613, 'values' => $utmContent],
          (object)['field_id' => 703637, 'values' => $utmSource]

        );

      }else if($all['gclid']){
        $trafSrc[0] = (object)["value" => 'google'];
        $trafType[0] = (object)["value" => 'cpc'];
        $googleId[0] = (object)["value" => $all['_gid']];
        $trafContent[0] = (object)["value" => 'auto'];

        array_push ( $custom_fields_values,
          (object)['field_id' => 701607, 'values' => $trafSrc],
          (object)['field_id' => 701639, 'values' => $trafType],
          (object)['field_id' => 703647, 'values' => $googleId],
          (object)['field_id' => 703645, 'values' => $trafContent]
        );

      }
      $object = (object) [
        'name' => "Заявка з " . $_SERVER['SERVER_NAME']  . PHP_EOL .  $all['phone'],
        'price' => intval($all['sumPrice']),
        'responsible_user_id' => 2604826,
        "pipeline_id" => 2316298,
        '_embedded' => $tags,
        'custom_fields_values'=> $custom_fields_values
      ];
      //dd($object);
      $response2 = Curl::to('https://nestorvmandry.amocrm.ru/api/v4/leads')
        ->withHeader('Authorization: Bearer ' . $response->access_token)
        ->withData( array($object))
        ->asJson()
        ->post();
      //dd($response2);
      //Send item on admin email address
			Mail::send('emails.reserved', $all, function($message){
				$email = getSetting('config.email');
				$message->to($email, 'Велика Ведмедиця')
						->subject('Бронювання з сайту Велика Ведмедиця');
			});
			return response()->json([
				'success' => 'true',
        'redirect' =>  URL::route('thankyou_page', ['lang' => $lang])
			]);
		}
	}
	public function callback(Request $request, $lang)
	{
		//dd($request->all());
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'callback_name' => 'required|max:50',
				'callback_phone' => 'required|max:15'
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}
      $refresh_token_setting = Setting::where('name', '=','refresh_token')->first();
      $response = Curl::to('https://nestorvmandry.amocrm.ru/oauth2/access_token')
        ->withData( array(
          'client_id' => '2bba3de7-6564-4f10-8ea0-1645e5367f4b',
          "client_secret" => "ucnc7zkSjuTweNYPC2CqQxrrEQEBlyAC6NJnhKjtriTMtTSjk1ff3TEGvUZU0DuU",
          "grant_type" => "refresh_token",
          "refresh_token" => $refresh_token_setting->description,
          "redirect_uri" => "https://vedmedycya.com.ua/redirect"
        ) )
        ->asJson()
        ->post();
      //dd($response);
      $refresh_token_setting->description = $response->refresh_token;
      $refresh_token_setting->save();
      $finishData = [];
      $ids = [];
      $dateOnArr = [];
      $countArr = [];
      $dateOffArr = [];
      $custom_fields_values = [];
      $ids[0] = (object)['id' => 703527];
      $tags = (object)['tags' => $ids];
//      $dateOnArr[0] = (object)["value" => $all['dateStart']];
//      $dateOffArr[0] = (object)["value" => $all['dateFinish']];
//      $countArr[0] = (object)["value" => $all['adults']];
//      $cottageArr[0] = (object)["value" => trim(str_replace("\n", "", $all['hotelName']))];
//      $roomData[0] = (object)["value" => trim(str_replace("\n", "", $all['roomName']))];
      $refererData[0] = (object)["value" => $_SERVER['HTTP_REFERER']];
      $cookiesData[0] = (object)["value" => Cookie::get()];

      array_push ( $custom_fields_values,
//        (object)['field_id' => 709859, 'values' => $dateOnArr],
//        (object)['field_id' => 701977, 'values' => $countArr],
//        (object)['field_id' => 709861, 'values' => $dateOffArr],
//        (object)['field_id' => 701979, 'values' => $cottageArr],
//        (object)['field_id' => 709853, 'values' => $roomData],
        (object)['field_id' => 701601, 'values' => $refererData]
//        (object)['field_id' => 701601, 'values' => $cookiesData]
      );
      if(isset($all['utmSource']) && $all['utmSource'] == 'fb'){
        $utmSource[0] = (object)["value" => $all['utmSource']];
        $utmMedium[0] = (object)["value" => $all['utmMedium']];
        $utmCampaign[0] = (object)["value" => $all['utmCampaign']];
        $utmContent[0] = (object)["value" => $all['utmContent']];

        array_push ( $custom_fields_values,
          (object)['field_id' => 701607, 'values' => $utmSource],
          (object)['field_id' => 701609, 'values' => $utmMedium],
          (object)['field_id' => 701611, 'values' => $utmCampaign],
          (object)['field_id' => 701613, 'values' => $utmContent],
          (object)['field_id' => 703637, 'values' => $utmSource]

        );

      }else if($all['gclid']){
        $trafSrc[0] = (object)["value" => 'google'];
        $trafType[0] = (object)["value" => 'cpc'];
        $googleId[0] = (object)["value" => $all['_gid']];
        $trafContent[0] = (object)["value" => 'auto'];

        array_push ( $custom_fields_values,
          (object)['field_id' => 701607, 'values' => $trafSrc],
          (object)['field_id' => 701639, 'values' => $trafType],
          (object)['field_id' => 703647, 'values' => $googleId],
          (object)['field_id' => 703645, 'values' => $trafContent]
        );

      }
      $object = (object) [
        'name' => "Зворотній звязок з " . $_SERVER['SERVER_NAME']  . PHP_EOL .  $all['callback_phone']   . PHP_EOL .  $all['callback_name'],
        //'price' => intval($all['sumPrice']),
        'responsible_user_id' => 2604826,
        "pipeline_id" => 2316298,
        '_embedded' => $tags,
        'custom_fields_values'=> $custom_fields_values
      ];
      //dd($object);
      $response2 = Curl::to('https://nestorvmandry.amocrm.ru/api/v4/leads')
        ->withHeader('Authorization: Bearer ' . $response->access_token)
        ->withData( array($object))
        ->asJson()
        ->post();

			//Send item on admin email address
			Mail::send('emails.callback', $all, function($message) use ($all){
				$email = getSetting('config.email');
				$message->to($email, 'Велика Ведмедиця')->subject('Зворотній зв\'язок "' . $all['type'] . '"');
			});
			return response()->json([
				'success' => 'true',
        'redirect' =>  URL::route('thankyou_page', ['lang' => $lang])
			]);
		}
	}
	public function add_review(Request $request, $lang)
	{
		//dd('add_review');
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'name' => 'required|max:50',
				//'callback_phone' => 'required|max:15'
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}
			//dd($all);
			//$all = $this->prepareArticleData($all);

			$category = Category::where('link', 'reviews')->first();

			$article_id = $all['article_id'];
			$all['date_create_review'] = date('Y-m-d');
			unset($all['article_id']);

			$data = [
				'category_id' => $category->id,
				'article_id' => $article_id,
				'title' =>  json_encode([config('app.locale') => $all['name']]),
				'attributes' => json_encode($all)

			];
			//dd($data);
			/*Fitch for secure*/
			// $attributes = [];
			// $fields = json_decode($category->fields);
			// $attributes_fields = $fields->attributes;
			// foreach($all as $key => $value){
			// 	foreach($attributes_fields as $k => $attr){
			// 		if($key == $k){
			// 			$attributes += [$k => $value];
			// 		}
			// 	}
			// }
			//dd(json_encode($attributes));

			$review = Article::create($data);
			$data_to_mail = [
				'review_id' => $review->id
			];

			//dd($article->id);
			//dd($all);

			//Send item on admin email address
			Mail::send('emails.add_reviews', $data_to_mail, function($message){
				$email = getSetting('config.email');
				$message->to($email, 'Велика Ведмедиця')->subject('Новий відгук');
			});
			return response()->json([
				'success' => 'true'
			]);
		}
	}
	public function get_prices(Request $request)
	{
		//dd('get_prices');
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->all();

			/*make rules for validation*/
			$rules = [
				'room_id' => 'required|max:4',
				'parent_id' => 'required|max:4'
			];

			/*validation [] according to rules*/
			$validator = Validator::make($all, $rules);

			/*send error message after validation*/
			if ($validator->fails()) {
				return response()->json(array(
					'success' => false,
					'message' => $validator->messages()->first()
				));
			}
			$article = Article::where('id', $all['room_id'])->first();
			$article_price = $article->getPrice($all['room_id'], $all['parent_id']);
			//dd($article_price);
			return response()->json([
				'success' => 'true',
				'data' => $article_price
			]);
		}
	}
		/* Сreate array for multilanguage (example- (ua|ru|en)) */
		private function prepareArticleData($all){
			$langs = Lang::activelangs()->get();
			$all = $this->initValuesWithArray($all);
			//Change format DATE
			if (isset($all['date']))
				$all['date'] = date('Y-m-d H:i:s',strtotime($all['date']));

			// Removing gaps at the beginning and end of each field
			// foreach($all as $key => $value){
			// 	$all[$key] = trim($value);
			// }

			// Сreate array example (ua|ru|en)
			foreach($langs as $lang){

				//$all['test']+= [ $lang['lang'] => $all["title_{$lang['lang']}"] ];
				$all['title'] +=  [ $lang['lang'] => $all["title_{$lang['lang']}"] ];
				$all['short_description'] +=  [ $lang['lang'] => (isset($all["short_description_{$lang['lang']}"]) ? $all["short_description_{$lang['lang']}"] : '') ];
				$all['description'] +=  [ $lang['lang'] => (isset($all["description_{$lang['lang']}"]) ? $all["description_{$lang['lang']}"] : '') ];
				$all['meta_title'] +=  [ $lang['lang'] => (isset($all["meta_title_{$lang['lang']}"]) ? $all["meta_title_{$lang['lang']}"] : '') ];
				$all['meta_description'] +=  [ $lang['lang'] => (isset($all["meta_description_{$lang['lang']}"]) ? $all["meta_description_{$lang['lang']}"] : '') ];
				$all['meta_keywords'] +=  [ $lang['lang'] => (isset($all["meta_keywords_{$lang['lang']}"]) ? $all["meta_keywords_{$lang['lang']}"] : '') ];


				/*Block for multilang with Delimiter*/
				// $all['title'] .= $all["title_{$lang['lang']}"] .'@|;';
				// $all['short_description'] .= (isset($all["short_description_{$lang['lang']}"]) ? $all["short_description_{$lang['lang']}"] : '') .'@|;';
				// $all['description'] .= (isset($all["description_{$lang['lang']}"]) ? $all["description_{$lang['lang']}"] : '') .'@|;';
				// $all['meta_title'] .= (isset($all["meta_title_{$lang['lang']}"]) ? $all["meta_title_{$lang['lang']}"] : '') .'@|;';
				// $all['meta_description'] .= (isset($all["meta_description_{$lang['lang']}"]) ? $all["meta_description_{$lang['lang']}"] : '') .'@|;';
				// $all['meta_keywords'] .= (isset($all["meta_keywords_{$lang['lang']}"]) ? $all["meta_keywords_{$lang['lang']}"] : '') .'@|;';

				//Delete var title_ua,title_ru,title_en
				unset($all["title_{$lang['lang']}"]);
				unset($all["short_description_{$lang['lang']}"]);
				unset($all["description_{$lang['lang']}"]);
				unset($all["meta_title_{$lang['lang']}"]);
				unset($all["meta_description_{$lang['lang']}"]);
				unset($all["meta_keywords_{$lang['lang']}"]);
			}
			$all = $this->transformToJson($all);
			return $all;
		}

		/* Сreate array for multilanguage (example- (ua|ru|en)) */
		private function prepareAttributesData($all){
			//dd($all);
			$langs = Lang::activelangs()->get();
			$first_lang = $langs->first()['lang'];
			foreach($all as $key => $value){
				//dd($value);

				if(stristr($key, '_' . $first_lang) !== FALSE){

					$key_without_lang = str_replace("_{$first_lang}", '', $key);
					//dd($key_without_lang);
					/*Block for multilang with Delimiter*/
					// $all[$key_without_lang] = '';
					// foreach($langs as $lang){
					// 	$all[$key_without_lang] .= $all[$key_without_lang . "_{$lang['lang']}"] .'@|;';
					// 	unset($all[$key_without_lang . "_{$lang['lang']}"]);
					// }
					/*/Block for multilang with Delimiter*/
					$all[$key_without_lang] = [];

					foreach($langs as $lang){
						$all[$key_without_lang] +=  [ $lang['lang'] => $all[$key_without_lang . "_{$lang['lang']}"]];
						//dd($key);
						unset($all[$key_without_lang . "_{$lang['lang']}"]);
					}
					$all[$key_without_lang] = json_encode($all[$key_without_lang]);;
				}


					//dd($all[$key]['title']);
				// if(is_array($all[$key] AND isset($all[$key]['title']) AND $all[$key]['title'])){
				// 	dd($all[$key]['status']);
				// 	$all[$key] = json_encode($all[$key]['title']);
				// 	//dd($all);
				// }



			}
			//dd($all);
			//dd($all);
			return $all;
		}
		private function initValuesWithDelimiter($all){
			$all['title'] = '';
			$all['short_description'] = '';
			$all['description'] = '';
			$all['meta_title'] = '';
			$all['meta_description'] = '';
			$all['meta_keywords'] ='';

			//Removing gaps at the beginning and end of each field
			foreach($all as $key => $value){
				$all[$key] = trim($value);
			}
			return $all;
		}
		private function initValuesWithArray($all){
			$all['title'] = [];
			$all['short_description'] = [];
			$all['description'] = [];
			$all['meta_title'] = [];
			$all['meta_description'] = [];
			$all['meta_keywords'] = [];
			return $all;
		}
		private function transformToJson($all){
			$all['title'] = json_encode($all['title']);
			$all['short_description'] = json_encode($all['short_description']);
			$all['description'] = json_encode($all['description']);
			$all['meta_title'] = json_encode($all['meta_title']);
			$all['meta_description'] = json_encode($all['meta_description']);
			$all['meta_keywords'] = json_encode($all['meta_keywords']);
			return $all;
		}


}
