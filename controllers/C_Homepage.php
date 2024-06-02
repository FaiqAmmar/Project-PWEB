<?php
include_once("function/main.php");
include_once 'config/static.php';

class C_Homepage {
  static function index(){
    view('master-layout/public', ['url' => 'V_Homepage']);
  }
}