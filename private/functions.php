<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string=""){
	return urlencode($string);
}

function du($string=""){
    return urldecode($string);
}

function raw_u($string=""){
	return rawurlencode($string);
}

function h($string=""){
    return htmlspecialchars($string);
}

function error_404(){
	header($_SERVER["SERVICE_PROTOCOL"]." 404 Not Found ");
	exit();
}

function error_500(){
	header($_SERVER["SERVICE_PROTOCOL"]." Internal Server Error ");
	exit();
}

function redirect_to($location=""){
	header("Location: ".$location);
	exit;
}

function is_post_request(){
   return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
   return $_SERVER['REQUEST_METHOD'] == 'GET';
}


function is_any_null($arrayTest){
    
    if( empty($arrayTest)){
        return TRUE;
    }
    
    for($i = 0 ; $i < count($arrayTest, COUNT_NORMAL) ; $i++){
        if($arrayTest[$i] == NULL || $arrayTest[$i] == ''){
            return TRUE;
        }
    }
    return FALSE;
}


function display_errors($errors=array()) {
  $output = '';
  if(!empty($errors)) {
    $output .= "<div class=\"errors\" style=\"color:red\">";
    $output .= "s'il vous plait, essayer de resoudre ces problemes:";
    $output .= "<ul>";
    foreach($errors as $error) {
      $output .= "<li>" . h($error) . "</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}



?>