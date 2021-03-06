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
        if ($fields === FALSE) {
            return $this->$field; 
        }
         
        // if(!$translate_value){
        //     $translate_value = '';    
        // }
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
        $langs = Lang::all();
        if(!$current_lang){
            $current_lang = App::getLocale();
        }
        //dd($current_lang);
        $articleArray =  $this->toArray();
       //dd($articleArray['attributes']);
        $attributes = json_decode($articleArray['attributes'], true);
        
        if(isset($attributes[$key]) AND $attributes[$key]) {
            
            //dd($attributes);
            // $pieces = explode("@|;", $attributes[$key]);
            // //dd($pieces);
            // if (count($pieces) == 1)
            $fields = json_decode($attributes[$key], true);
            
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
        foreach($fields as $key => $item){
            if($key == $current_lang){
                $translate_value =  $fields[$key];
            }
        }
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