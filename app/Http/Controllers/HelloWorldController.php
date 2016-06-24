<?php

namespace App\Http\Controllers;

use App\Http\Requests;

/**
 * Class HelloWorldController
 * @package App\Http\Controllers
 */
class HelloWorldController extends Controller
{
    /**
     *
     */
    public function helloWorld()
    {
        return "Hello world";
    }
}
