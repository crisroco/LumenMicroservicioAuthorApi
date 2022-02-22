<?php

namespace App\Http\Controllers;

use App\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $rules =  [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);

    }

    /**
     * Return an specific Author
     * @return Illuminate\Http\Response
     */
    public function show($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Return an specific Author2
     * @return Illuminate\Http\Response
     */
    public function show2($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Return an specific Author3
     * @return Illuminate\Http\Response
     */
    public function show3($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }


    /**
     * Return an specific Author4
     * @return Illuminate\Http\Response
     */
    public function show4($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Return an specific Author5
     * @return Illuminate\Http\Response
     */
    public function show5($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Return an specific Author6
     * @return Illuminate\Http\Response
     */
    public function show6($author){
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);
        $author = Author::findOrFail($author);

        return $this->successResponse($author);
    }
    
    /**
     * Return an specific Author7
     * @return Illuminate\Http\Response
     */
    public function show7($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Update the information of an existing Author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author){
        $rules =  [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        // se verifica si el autor existe antes de hacer el update
        $author = Author::findOrFail($author);

        $author->fill($request->all());

        //verifica si cambio algo en los datos del autor
        if ($author->isClean()) {
            return $this->errorResponse('Al menos un valor debe ser cambiado', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);


    }

     /**
     * Update the information of an existing Author2
     * @return Illuminate\Http\Response
     */
    public function update2(Request $request, $author){
        $rules =  [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        // se verifica si el autor existe antes de hacer el update
        $author = Author::findOrFail($author);

        $author->fill($request->all());

        //verifica si cambio algo en los datos del autor
        if ($author->isClean()) {
            return $this->errorResponse('Al menos un valor debe ser cambiado', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);


    }

    /**
     * Destroy an existing Author
     * @return Illuminate\Http\Response
     */
    public function destroy($author){

        // se verifica si el autor existe antes de hacer el delete
        $author = Author::findOrFail($author);

        $author->delete();

        return $this->successResponse($author);

    }
}
