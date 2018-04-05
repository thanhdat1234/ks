<?php
/**
 * Created by PhpStorm.
 * User: ntdat
 * Date: 4/2/18
 * Time: 1:00 PM
 */
if(!function_exists('pre')){
   function pre($val){
       echo "<pre>";
       print_r($val);
       echo "</pre>";
   }
}