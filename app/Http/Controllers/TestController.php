<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Delivery{

    public function index(Request $request)
    {
$delivery1= new Delivery(1,[20,20,20],50);
$delivery2= new Delivery(10,[10,10,10],50);
$delivery3= new Delivery(1,[1,1,1],100);


var_dump($delivery1->calculation());
var_dump($delivery2->calculation());
var_dump($delivery3->calculation());

    }

}

