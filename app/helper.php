<?php

// echo "Hello";

if(!function_exists('p')){
    function p($data){
        echo"<pre>";
        print_r($data);
        echo"<pre>";
    }
}

if(!function_exists('formatted_date')){
    function formatted_date($date, $format)
    {
        $formatteddate = date($format,strtotime($date));
        return $formatteddate;
    }
}
