<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

$route = $_SERVER['REQUEST_URI'];
if($route=="/"){
    readfile( 'waiting.html');
}
else{
  echo $route;
}


//////
