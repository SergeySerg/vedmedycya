<?php namespace App\Http\Middleware;

use Closure;
use App;

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
		//dd('тут');
		// Get current lang object from db
		//$currentLang = Lang::where('lang', $request->lang)
		//	->first();
			//dd($request->all());
			//dd($request->domain);

		if(is_null($request->lang)){
		// 	$default_lang = Config::get('app.locale');
		App::setLocale(config('app.locale'));
		}else{
		// Locale setting
		App::setLocale($request->lang);
		}

		$subdomain = $request->subdomain;
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
				->sortByDesc('priority');
			//Debugbar::info($category_item);				

			//$dd($category_item);	
							
				//dd($category_item);
			//Children articles in request subdomain	
			if($subdomain){				
				//dd($category->id);
				$subdomain_children_articles = Article::with('article_children')->where('subdomain', $subdomain)->activeAndSortArticles()->get()
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
							array_push($child_articles, $article);
						}
					}
					$child_articles = collect($child_articles)->sortByDesc('priority');
					
					//dd($child_articles);
					view()->share('children_' . $category->link, $child_articles);	

				}	
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
				// if($category->link == 'reviews'){
				// 	//dd(DB::table('articles')->where('attributes->show_main_page', 1)->get());
				// 	dd($category_item->where('attributes->show_main_page', '1'));
					
				// }	
			view()->share($category->link, $category_item);
		}
		//session(['key' => 12]);
		//dd($request->session()->get('test'));	
		//$value = session('test');
		//dd($value);
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
		view()->share('subdomain', $subdomain);
		return $next($request);
	}

}
