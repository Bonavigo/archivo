<?php

$routes = [
  '/' => 'HomeController@index',
  '/igrejas' => 'HomeController@igrejas',
  '/igreja/{nome}' => 'HomeController@igreja',
  '/ferrovias' => 'HomeController@ferrovias',
  '/ferrovias/spr' => 'HomeController@ferrovias',
  '/ferrovia/spr/{nome}' => 'HomeController@ferrovia'
];