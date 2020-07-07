<?php namespace App\Http\Middleware;

use Closure;
use App;

use function GuzzleHttp\default_ca_bundle;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Models\Article;
use App\Models\Category;
use App\Models\Text;
use App\Models\Lang;
use League\Flysystem\Config;
//use DB;
use Debugbar;
//use Config;
use Input;
use Ixudra\Curl\Facades\Curl;
//use Curl;

class FrontendInit {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
    $response = Curl::to('https://vorser87.amocrm.ru/oauth2/access_token')
//      ->withHeader('Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEsInNJZCI6MSwiaWF0IjoxNTM4MjI4ODk1fQ.Rmeg9--plid64AFfhyQzaXqkLFceq-treSecXYUm8Uk')
//      ->withHeader('MySecondHeader: 456')
      ->withData( array(
        'client_id' => 'dcecfee2-94d9-454a-b5c7-bcbd63da13cf',
        "client_secret" => "EdvCxwLPtpiKfUgAzFfWPsgxrquUGkS2SKKqjzC0lA0q1ThotoDr1bfvtUwtmcJZ",
        "grant_type" => "refresh_token",
        "refresh_token" => "def502004a316207d1b417f2921c4831b637762cc540bc2beaf2eb0c314ec9cdcfd6bfa054a0970d0a2859da83f8cea408502c7d5ae3f52551e878e8011586a69c5cd59c01e0d6b8e25d49fb90635ab7ef179abba078da65ea172ca10b49cd892ba942c80de7ffe9f34c95933a475f686ab62f0f0ce28c30d7036414e2878f117a26e46c48e0d939aba10aefd611451c73c38f55b68d4b5c82a87befcafae26928cf8fdb1d8e59c0624414d5b21f84f818cc054ac95bc6071065b445900ecd2a904510d90d4dadb952ad664f4c7199e6eb16d5d1f5514419fff8dca5327d16d4813e311cee8fe3cd73f0ab51365a06f159df3347589c65e736d4322a2286f7960b70c207d200fc461fa19a368e69f3d5c7dbba5e10f03ed3dec2701eb8e81cd14128fa905b81af442425f621a7f0c59f29e84da7c5cccad19dc0b8324171fdbb6b124938063a832fc0b203c65bb177347b2b3f453cb66b2f0a7e2bd69608940a49d36b50d3bbd0191b5298a606890dcee4ad5ca168381fe8f81381c5ccd7bbc0212239c8f556e965a94c717bb41fad416df75680148f79d9c04af559b91940b33a314ccddaf4a1220422835cbfa9c7c9c7acb53a",
        "redirect_uri" => "http://vedmedycya.com.ua/redirect"
      ) )
      ->asJson()
      ->post();
//dd($response->access_token);
    $object = (object) [
      'name' => 'Сделка для примера 6',
    ];
    $response2 = Curl::to('https://vorser87.amocrm.ru/api/v4/leads')
      ->withHeader('Authorization: Bearer ' . $response->access_token)
//      ->withHeader('MySecondHeader: 456')
      ->withData( array(
        $object
      ) )
      ->asJson()
      ->post();
    dd($response2);
//    dd($response->access_token);

    // For ringostat script
         if(isset($request->lastpage)){
             $pieces = explode("/", $request->lastpage);
             $id = (int) $pieces[count($pieces)-1];
             if($id == 288){
                 $article = Article::where('id', '288')->first();
                 $id_schema = $article->getAttributeTranslate('id_schema');

                 return response()->json([ "schema" => $id_schema ]);
                }
             else{
                 return response()->json([ "schema" => getSetting('default_schema') ]);

             }
         }

        if(is_null($request->lang)){
		    App::setLocale(config('app.locale'));
		}else{
		// Locale setting
		    App::setLocale($request->lang);
		}
		//dd(route('article_index', [$request->lang]));

		if(route('article_index', [$request->lang]) === $request->url()){
			$subdomain = true;
		}else{
			$subdomain = false;
		}
		//$subdomain = $request->subdomain;
		$name = $request->name;
		//dd($name);
		$base_article = Article::where('attributes->url->' . App::getLocale(), $name )->first();
		//dd($base_article);
		//share type
		$type = $request->type;
		if(is_null($request->type)){
			$type = 'main';
		}		
		// if ( !$subdomain || !$currentLang || !$type ||$request->type){
		// 	abort('404');
		// }
		$langs = Lang::activelangs()->get()/**/;
		
		
		$texts = new Text();
		//get all Category
		$categories = Category::with('articles')->activeCategories()->get();
			//Debugbar::info($categories);
		$categories_data = [];
		$child_article = [];		
		//dd($categories);
		foreach($categories as $category){
			//dd($category);			
			//create arr for categories with type
			$categories_data[$category->link] = $category;
			$category_item = $category
				->articles
				->where('active', 1)
				->sortBy('priority');
			//Debugbar::info($category_item);				

			//$dd($category_item);	
							
				//dd($category_item);
			//Children articles in request subdomain	
			if($name){				
				//dd($category->id);
				$subdomain_children_articles = Article::with('article_children')->where('article_id', $base_article->article_id)->activeAndSortArticles()->get()
				//dd($subdomain_children_articles);
				->map(function ($subdomain_child_article) use ($category) {
					//dd($category);
					//dd($subdomain_child_article);
					return $subdomain_child_article
							->article_children()				
							->where('category_id', $category->id)
							->activeAndSortArticles()
							->get();
							//->toArray();						
							//dd($subdomain_child_article);
				})
				->reject(function($subdomain_child_article){
					return count($subdomain_child_article) == 0;
				});
				
				//dd($subdomain_children_articles);
				if(count($subdomain_children_articles) != 0){
					$child_articles = [];
					foreach($subdomain_children_articles as $articles){						
						//dd($articles);
						foreach($articles as $key => $article){
							if($category->link == 'rooms'){
								//dd($base_article);
								$base_hotel = $article->where('article_id', $base_article->article_id)->where('attributes->is_base_hotel', 1)->first();
								//dd($base_hotel);
								//Debugbar::info($base_hotel);
								view()->share('base_hotel', $base_hotel);
							}
							array_push($child_articles, $article);
						}
					}
					$child_articles = collect($child_articles)->sortBy('priority');
					if($category->link == 'reviews'){
						view()->share('children_' . $category->link . '_raty', $this->counterReviews($child_articles));
						//Debugbar::info();
						$child_articles = collect($child_articles)->sortBy('priority')->paginate( 10 );
						//dd($child_articles);
					}
					//dd($child_articles);
					view()->share('children_' . $category->link, $child_articles);	

				}
				//share Article		
				// if($category->link == 'hotels'){
				// 	dd($category_item);
				// 	//dd(DB::table('articles')->where('attributes->show_main_page', 1)->get());
				// 	dd($category_item->where('attributes->show_main_page', '1'));
					
				// }	
				//dd($collection);
				
				
			//view()->share('children_' . $category->link, $child_articles);	
			}
			// validate count for change method (get() or first()) if one item in array
//			if(count($category_item) == 1){
//				$category_item = $category_item->first();
//				//dd($category_item);
//			}
			//dd($category_item);
			//share Article		
				// if($category->link == 'servicespaid'){
				// 	dd($category_item);
				// 	//dd(DB::table('articles')->where('attributes->show_main_page', 1)->get());
				// 	dd($category_item->where('attributes->show_main_page', '1'));
					
				// }	
			if($category->link == 'reviews'){
				view()->share($category->link . '_raty', $this->counterReviews($category_item));
				//Debugbar::info($this->counterReviews($category_item));
				$category_item = collect($category_item)->sortBy('priority')->paginate( 10 );
				//dd($child_articles);
			}
			view()->share($category->link, $category_item);
		}
		$category_for_url = Category::where('url->' . App::getLocale(), $request->url)->first();
		$category_for_subtype = Category::where('url->' . App::getLocale(), $request->subtype)->first();

		//dd($category_for_subtype);
		//dd($children_reviews);
		//dd($category_item);
		//Debugbar::info($category_item);
		//dd($categories_data);



		// Share to views global template variables
		view()->share('default_lang', config('app.locale'));
		view()->share('langs', $langs);
		view()->share('type', $type);
		view()->share('texts', $texts->init());
		view()->share('categories_data', $categories_data);
		view()->share('version', config('app.version'));
		view()->share('subdomain', $name);
		view()->share('subtype', $request->subtype);
		view()->share('url', $request->url);
		view()->share('id', $request->id);
		view()->share('category_for_url', $category_for_url);
		view()->share('category_for_subtype', $category_for_subtype);
		
		return $next($request);
	}
	public function counterReviews($reviews){
		$settings_reviews = Category::where('link', 'revsettings')->first()->articles->first();
		$all_property_for_reviews = json_decode($settings_reviews->attributes, true);
		//dd($all_property_for_reviews);
		foreach ($all_property_for_reviews as $key => $item) {
			//dd($item);
			if($item != 1) {				
				unset($all_property_for_reviews[$key]);
			}
		}
		$rates = [];
		foreach($reviews as $review){				
			$all_attributes = json_decode($review->attributes, true);
			foreach($all_property_for_reviews as $key => $item){
				foreach($all_attributes as $k => $v){
					if(strpos($key, $k) !== false && $v){										
						array_push($rates, $v);						 
					}					
				}				
			}
		}
		//Debugbar::info(collect($rates)->avg());
		return $raty = round(collect($rates)->avg(), 0, PHP_ROUND_HALF_UP); 
		//Debugbar::info($raty);			
	}

}
