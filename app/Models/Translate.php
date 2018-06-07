<?php
namespace App\Models;
use App;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lang;

class Translate extends Model {

    public function getTranslate($field, $current_lang = null){
        if(!$current_lang){
            $current_lang = App::getLocale();
        }  
        
        //dd($this->$field);  
        $fields = json_decode($this->$field, true);
       //dd($fields);
        if (is_string($fields)){ 
            $field = str_replace("'","",$fields);           
            return $field; 
        }
        if ($fields === FALSE) {            
            return $this->$field; 
        }
         
        // if(!$translate_value){
        //     $translate_value = '';    
        // }
        //dd('тут');
        return $this->getTranslateValue($fields, $current_lang);
           
        /*Use for multilang with DECIMILAR*/
        // $langs = Lang::all();
        // $pieces = explode("@|;", $this->$field);
        // if(count($pieces) == 1)           
        //     return $this->$field;       
        // if(!$current_lang){
        //     $current_lang = App::getLocale();
        // }
        // $field = $this->getLangsParts($langs, $pieces, $current_lang);
        // return $field;
        /*/Use for multilang with DECIMILAR*/
    }

    public function getAttributeTranslate($key, $current_lang = null){
        //dd('sdw');
        //$langs = Lang::all();
        if(!$current_lang){
            $current_lang = App::getLocale();
        }
       
        $articleArray =  $this->toArray();
        //dd($articleArray);
       //dd($articleArray['attributes']);
        $attributes = json_decode($articleArray['attributes'], true);
        //dd($attributes);
        if(isset($attributes[$key]) AND $attributes[$key]) {
            
            //dd($attributes);
            //dd($attributes[$key]['title']);
            // $pieces = explode("@|;", $attributes[$key]);
            // //dd($pieces);
            // if (count($pieces) == 1)
            $fields = json_decode($attributes[$key], true);
            //dd($fields);
            if ($fields === null) {
                //dd();
                return $attributes[$key]; 
            }
                 //return $attributes[$key];
            // if (!$current_lang) {
            //     $current_lang = App::getLocale();
            // }     
            
            return $this->getTranslateValue($fields, $current_lang);
            //$field = $this->getLangsParts($langs, $pieces, $current_lang);
            //dd($field);
            //return $field;
        }
        return false;
    }
    public function getTranslateValue($fields, $current_lang){
        $translate_value = '';
        //dd($fields);
        // if($fields['title']){
        //     $fields = fields['title'];  
        //     dd($fields);  
        // }
       //dd($fields); 
        foreach($fields as $key => $item){

            if($key == $current_lang){

                $translate_value =  $fields[$key];
            }
        }
       // dd($translate_value);
        return $translate_value;
    }

    public function getLangsParts($data, $parts, $var_lang, $part = null){
        foreach($data as $key => $item){
            if($var_lang == $item['lang'] && isset($parts[$key]) && $parts[$key]){
                $part = $parts[$key];
                //dd($part);
            }
        }
        return $part;
    }
}