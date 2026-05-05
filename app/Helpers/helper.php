<?php
namespace App\Helpers;

class helper{


       public static function arraykeys_to_value($array, $key)
       {
        
         if (array_key_exists($key,$array)){
            return $array[$key];
        }else{
            return 'No Value' ;
        } 
       
    
       } 
      
       public static function percentage_calculation($number1,$number2)
       {
        
         if ($number2>0  ){
          $data =($number1/$number2)*100;
           return round(($number1/$number2)*100,2);
        }else{
            return 0  ;
        } 
       
    
       } 

       public function setActive(array $route){
    if(is_array($route)){
        foreach($route as $r){
            if(request()->routeIs($r)){
                return 'active';
            }
        }
    }
}


    
    
}














