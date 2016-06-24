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
     * @return string
     */
    public function helloWorld()
    {
        return "Hello world";
    }

    /**
     * @return string
     */
    public function holaMundo()
    {
        return "Hola mundo";
    }
}
