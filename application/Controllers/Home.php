<?php
namespace App\Controllers;

use helper\Helper;
use system\Controller;

class Home extends Controller{

    public function index() {
    	$this->render('index');
    }

}