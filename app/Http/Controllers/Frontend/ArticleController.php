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
				$link = 'velyka-vedmedycya';
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
	public function indexMain($lang, $type = 'main')
	{	
		//dd($type);		
		// $main_slides = $this->showMainPage('slides');
		// $main_marketings = $this->showMainPage('marketings');
		// $main_advantages = $this->showMainPage('advantages');
		//dd($main_marketings);
		return view('frontend.' .  $type);
		//->with(compact('main_slides', 'main_marketings', 'main_advantages'));
			
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($subdomain, $lang, $type, $link, $id)
	{
		$parent_hotel = Article::with('article_children')->where('type', $link)->first();
		$article = Article::where('id', $id)->first();
		//dd($article);
		return view('frontend.rooms')->with(compact('article', 'parent_hotel'));
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
	public function showMainPage($type){
		/*Select slide that check as show_main_page*/
		$category_item = Category::with('articles')->select('id')->where('link', $type)->first();
			Debugbar::info($category_item);
		$main_item = $category_item->articles()->where('attributes->show_main_page', 1)->activeAndSortArticles()->get();
			Debugbar::info($main_item);
		return $main_item;
		
		 
		
	}

}
