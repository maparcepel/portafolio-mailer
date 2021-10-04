<?php

switch($_SERVER['HTTP_ORIGIN']){
  
  case 'https://marcelmolina.net':
    $domain = "https://marcelmolina.net";
    break;

  case 'http://marcelmolina.net':
    $domain = "http://marcelmolina.net";
    break;

  case 'https://marcelmolina.tk':
    $domain = "https://marcelmolina.tk";
    break;

  default:
    $domain = "http://marcelmolina.tk";
    break;
}


header("Access-Control-Allow-Origin: $domain");
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");