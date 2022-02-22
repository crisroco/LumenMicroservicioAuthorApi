<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return 'Hola Mundo'
    }

    /**
     * Return author list
     * @return Illuminate\Http\Response
     */
    public function index(){
        $authors = Author::all();
        $test = ['lalal','lelele','lilili'];
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }
        foreach ($test as $key => $value) {
            if ($value == 'lilili') {
                $authors = 'nice';
            }
        }

        return $this->successResponse($authors);
    }
}
