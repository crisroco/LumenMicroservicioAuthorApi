<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;

class AuthorController extends Controller
{

    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return author list
     * @return Illuminate\Http\Response
     */
    public function index(){
        $authors = Author::all();

        return $this->successResponse($authors);
    }

    /**
     * Return an instance of Author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Return an specific Author
     * @return Illuminate\Http\Response
     */
    public function show($author){

    }

    /**
     * Update the information of an existing Author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author){

    }

    /**
     * Destroy an existing Author
     * @return Illuminate\Http\Response
     */
    public function destroy($author){

    }
}
