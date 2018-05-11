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
		// Get current lang object from db
		$currentLang = Lang::where('lang', $request->lang)
			->first();

		//share type
		$type = $request->type;
		if(is_null($request->type)){
			$type = 'main';
		}
		if (!$currentLang){
			abort('404');
		}
		$langs = Lang::activelangs()->orderBy('priority','desc')->get()/**/;
		// Locale setting
		App::setLocale($request->lang);
		$texts = new Text();
		//get all Category
		$categories = Category::all();
		$categories_data = [];
		//dd($categories);
		foreach($categories as $category){
			//create arr for categories with type
			$categories_data[$category->link] = $category;
			$category_item = $category
				->articles()
				->activearticles()
				->get();
			// validate count for change method (get() or first()) if one item in array
//			if(count($category_item) == 1){
//				$category_item = $category_item->first();
//				//dd($category_item);
//			}
			//dd($category_item);
			//share Article
			view()->share($category->link, $category_item);
		}
		//dd($categories_data);



		// Share to views global template variables
		view()->share('langs', $langs);
		view()->share('type', $type);
		view()->share('texts', $texts->init());
		view()->share('categories_data', $categories_data);
		view()->share('version', config('app.version'));

		return $next($request);
	}

}
