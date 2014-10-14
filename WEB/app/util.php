<?php

define('URL', base_url());
function base_url($path=''){
    $safe_request = $_SERVER['REQUEST_URI'];
    $bar_pos = strrpos($safe_request, '/');
    if($bar_pos != strlen($safe_request)){
        $point_pos = strpos($safe_request, '.', $bar_pos);
        if($point_pos){
            $safe_request = substr($safe_request, 0, $bar_pos+1);
        }else{
            $safe_request .= '/';
        }
    }
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $safe_request . $path;
}