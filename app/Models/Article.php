<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Debugbar;
use Cookie;

class Article extends Translate {
    
    protected $fillable=[
        'category_id',
        'article_id',
        'title',
        'type',
        'subdomain',
        'short_description',
        'description',
        'attributes',
        'img',
        'imgs',
        'priority',
        'meta_description',
        'meta_keywords',
        'meta_title',
        'files',
        'public',
        'active',
        'date',
        'date_start',
        'date_finish',
        'article_id_2'
    ];
    //protected $dateFormat = 'Y-m-d H:i:s';
    //protected $dates = ['created_at', 'updated_at', 'deleted_at', 'date', 'date_start', 'date_finish'];

    public function getAttributeTranslate($key, $current_lang = null){
        
        return parent::getAttributeTranslate($key, $current_lang = null);
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function article_parent(){
        return $this->belongsTo('App\Models\Article', 'article_id');
    }

    public function article_children(){        
        return $this->hasMany('App\Models\Article', 'article_id');
    }
    public function article_parent_price(){
        return $this->belongsTo('App\Models\Article', 'article_id_2');
    }

    public function article_children_price(){        
        return $this->belongsTo('App\Models\Article', 'article_id_2
        ');
    }
    /*public function getAttributes($key, $lang){
        if(isset($this->attributes)){
            $attributes = json_decode($this->attributes, true);
            if(is_array($attributes)){

            }
        }
    }*/

    public function getImages(){
        if (isset($this->imgs)){
            $imgs = json_decode($this->imgs, true);
            if(is_array($imgs)){
                foreach($imgs as $key => $img){
                    if(!is_array($img)){
                        $imgs[$key] = [
                            'min' => $img,
                            'full' => $img
                        ];
                    }
                }
            }
            //dd($imgs);
            return $imgs ?: [];
        }
        else{
            return [];
        }
    }    
    public function scopeactiveAndSortArticles($query){
        $query->where ('active',1)
              ->orderBy('priority','desc');
    }
    public function scopeactiveAndSortForDateArticles($query){
        $query->where ('active',1)
            ->orderBy('date_start');
    }
    public function scopeSortDateArticles($query){
        $query->latest('date')
            ->where ('active',1);
    }
    //Change format of date
    public function getDateAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->toDateString();
    }
    // get Price
    public function getPrice($id, $parent_hotel_id){
        Debugbar::info('id====>' . $id);
        Debugbar::info('parent_hotel_id====>' . $parent_hotel_id);
        $article = $this;
        $date_start = Cookie::get('dateStart');
        $date_finish = Cookie::get('dateFinish');
        Debugbar::info($date_start);
        Debugbar::info($date_finish);
        $base_article_price = $this->getArticleBasePrice($id, $parent_hotel_id);
        if(!isset($date_start) || !isset($date_finish)){
            //dd($this->getAttributeTranslate('base_price'));
            return $base_article_price;
            //return $val = $price->getAttributeTranslate('base_price');
        }else{
            $date_start = date("Y-m-d 00:00:00", strtotime($date_start));
            $date_finish = date("Y-m-d 00:00:00", strtotime($date_finish));
            //dd($newDate);
            $seasons = $article::with('article_children')
                ->where(function ($query) use ($date_start, $parent_hotel_id) {
                    $query->where('article_id', $parent_hotel_id);

                    $query->where('date_start', '<=', $date_start);
                    $query->where('date_finish', '>=', $date_start);
                })
                ->orWhere(function ($query) use ($date_finish, $parent_hotel_id) {
                    $query->where('article_id', $parent_hotel_id);

                    $query->where('date_start', '<=', $date_finish);
                    $query->where('date_finish', '>=', $date_finish);
                })
                ->orWhere(function ($query) use ($date_start, $date_finish, $parent_hotel_id) {
                    $query->where('article_id', $parent_hotel_id);

                    $query->where('date_start', '>=', $date_start);
                    $query->where('date_finish', '<=', $date_finish);
                })
                ->activeAndSortForDateArticles()
                ->get();
                
            /* if dont search seasons */
            if($seasons->count() == 0) return $base_article_price;

            /* if search 1 seasons */
            if($seasons->count() == 1){
                $article_price = $this->getArticlePrice($id, $seasons);
                if (!isset($article_price)) return $base_article_price;
                //Debugbar::info($article_price);
                return $article_price;

            }
            //Debugbar::info($seasons);
            $count_seassons = $seasons->count();
            $days = $this->getCountDays($date_finish, $date_start);
            
            $arr = [];
            $first_season = $seasons->shift();
            $first_season_article_price = $first_season->article_children()				
                ->where('article_id_2', $id)
                ->activeAndSortArticles()
                ->first();
            //dd($first_season_article_price);
            $days_in_season_1 = $this->getCountDays($first_season->date_finish, $date_start);

            $arr[$days_in_season_1] = ($first_season_article_price) ? $first_season_article_price->getAttributeTranslate('base_price') : $base_article_price->getAttributeTranslate('base_price');
            
            $last_season = $seasons->pop();
            $last_season_article_price = $last_season->article_children()				
                ->where('article_id_2', $id)
                ->activeAndSortArticles()
                ->first();
                //dd($last_season_article_price);
            $days_in_season_last = $this->getCountDays($date_finish, $last_season->date_start);

            $days_in_seasons_middle = $seasons
                ->map(function ($item, $key) use ($id, $parent_hotel_id, $base_article_price){
                $days_in_season = $this->getCountDays($item->date_finish, $item->date_start);
                //dd($days_in_season);
                $season_article_price = $item->article_children()				
                    ->where('article_id_2', $id)
                    ->activeAndSortArticles()
                    ->first();
                //if(!$season_article_price){
                    return [$days_in_season => ($season_article_price) ? $season_article_price->getAttributeTranslate('base_price') : $base_article_price->getAttributeTranslate('base_price')];
                    //return $ar["$days_in_season"] = ($season_article_price) ? $season_article_price->getAttributeTranslate('base_price') : $base_article_price->getAttributeTranslate('base_price');
                    
                     //}
                //dd($season_article_price);
                //$arr[$days_in_season] = $season_article_price->getAttributeTranslate('base_price');
            });
            $arr[$days_in_season_last] = ($last_season_article_price) ? $last_season_article_price->getAttributeTranslate('base_price') : $base_article_price->getAttributeTranslate('base_price');
            Debugbar::info($days_in_seasons_middle);
            Debugbar::info($arr);
            $arr2= $days_in_seasons_middle->toArray();
            
  
            //$days_in_season_ . $count_seassons-1 = $this->getCountDays($date_finish, $seasons->last()->date_start);
            Debugbar::info('Кількість днів==' . $days);
            Debugbar::info('Перший сезон==' . $days_in_season_1);
            Debugbar::info('Крайній сезон==' . $days_in_season_last);
            Debugbar::info('Кількість сезонів==' . $count_seassons);
            //Debugbar::info($days_in_seasons_middle);
            Debugbar::info($arr2);


                // ->map(function ($child_article) use ($id) {
				// 	return $child_article
				// 			->article_children()				
				// 			->where('article_id_2', $id)
				// 			->activeAndSortArticles()
				// 			->first();
                // });
                //->all();
                //Debugbar::info($seasons);
            //Debugbar::info($seasons);

        }
    }
    private function getArticleBasePrice($id, $parent_hotel_id){
        $article_price = $this::with('article_children')
                ->where('article_id', $parent_hotel_id)
                ->where('attributes->base_season', 1)
                ->get()
                ->map(function ($child_article) use ($id) {
					return $child_article
							->article_children()				
							->where('article_id_2', $id)
							->activeAndSortArticles()
							->first();
                })
                ->first();
                //Debugbar::info($article_price);    
                return $article_price;

    }
    private function getArticlePrice($id, $seasons){
        $article_price = $seasons
                ->map(function ($child_article) use ($id) {
					return $child_article
							->article_children()				
							->where('article_id_2', $id)
							->activeAndSortArticles()
							->first();
                })
                ->first();
                //Debugbar::info($article_price);    
                return $article_price;

    }
    private function getCountDays($date_finish, $date_start){
        $date2 = strtotime($date_finish);
        $date1 = strtotime($date_start);
        $days = ($date2-$date1)/(60*60*24);
        return $days;

    }
    
}
