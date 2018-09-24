<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    public function scopeSortDateArticles($query){
        $query->latest('date')
            ->where ('active',1);
    }
    //Change format of date
    public function getDateAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->toDateString();
    }
    
}
