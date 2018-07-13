<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
//use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend;
//use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Order;
use App\Models\Text;
use App;
use Illuminate\Support\Facades\Response;
//use Illuminate\Contracts\View\View;
use Mail;
use Illuminate\Support\Facades\Validator;
use Debugbar;
class ArticleController extends Controller {	

	/**
	 * Display a listing of the resource with subdomain.
	 *
	 * @return Response
	 */
	public function index($subdomain, $lang, $type=null)
	{	
		//dd($type);
		//if($link){
			switch($subdomain){
				case 'bukovel':
				//$link = 'vedmegyi-dvir';
				$parent_hotel = Article::where('type', 'vedmegyi-dvir')->first();
				break;
				case 'yaremche':
				//$link = 'velyka-vedmedycya';
				$parent_hotel = Article::where('type', 'velyka-vedmedycya')->first();
				break;
			}
		//}
		
		//dd($parent_hotel);
		
			// $hotels_articles = Category::where('link', $type)->first()->articles->where('subdomain', $subdomain);
			// //dd($hotels_articles);
			// //$article_group =  Article::where('category_id',$hotels_articles['parent_id'])->where('active', 1)->get();
			// //dd($article_group);
			// $test = Article::where('type', 'mark')->first();
			// $tests = $hotels_articles->map(function ($hotel_article) {
			// 	//dd($hotel_article);
			// 	return $hotel_article->article_children()->where('category_id', 8)->get();
			// });
			//dd($tests->all());
			// foreach($tests as $test){
			// 	dd($test->first()->title);
			// }
			// $articles = $test->article_children()->where('category_id', 2);
			// dd($articles);
		
		//dd(request()->subdomain);
		
		//dump($news);
		//dd($video->category()->first()->active);
		return view((!$type) ? 'frontend.hotels' : 'frontend.' . $type)->with(compact('parent_hotel'));

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function indexMain(Request $request,$lang, $type = 'main')
	{	
		//$request->attributes->add(['myAttribute' => 'myValue']);
		//dd($type);		
		// $main_slides = $this->showMainPage('slides');
		// $main_marketings = $this->showMainPage('marketings');
		// $main_advantages = $this->showMainPage('advantages');
		$main_reviews = $this->showMainPage('reviews');
		//dd($main_reviews);
		return view('frontend.' .  $type)
			->with(compact('main_reviews'));
			
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request, $subdomain, $lang, $type, $link, $id)
	{
		//if ($request ->isMethod('post')){
			/*get [] from request*/
			//$value = session('key');
		//dd($value);
		//}
		$parent_hotel = Article::with('article_children')->where('type', $link)->first();
		$article = Article::where('id', $id)->first();
		//dd($article);
		return view('frontend.rooms')->with(compact('article', 'parent_hotel'));
	}

	public function showMainPage($type){
		/*Select slide that check as show_main_page*/
		$category_item = Category::with('articles')->select('id')->where('link', $type)->first();
			Debugbar::info($category_item);
		$main_item = $category_item->articles()->where('attributes->show_main_page', 1)->activeAndSortArticles()->get();
			Debugbar::info($main_item);
		return $main_item;
		
		 
		
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
		//dd('reserved');
		if ($request ->isMethod('post')){
			/*get [] from request*/
			$all = $request->json()->all();
//dd($all);
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
			//Send item on admin email address
			Mail::send('emails.reserved', $all, function($message){
				$email = getSetting('config.email');
				$message->to($email, 'Велика Ведмедиця')
						->subject('Бронювання з сайту Велика Ведмедиця');
			});
			return response()->json([
				'success' => 'true'
			]);
		}
	}
	public function callback(Request $request, $lang)
	{
		//dd('callback');
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

			//Send item on admin email address
			Mail::send('emails.callback', $all, function($message){
				$email = getSetting('config.email');
				$message->to($email, 'Велика Ведмедиця')->subject('Зворотній зв\'язок з сайту Велика Ведмедиця');
			});
			return response()->json([
				'success' => 'true'
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
