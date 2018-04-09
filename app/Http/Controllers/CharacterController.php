<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\characterModel;
use App\Models\classModel;

class CharacterController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function index()
    {
        $characters = characterModel::with('classes')->get();
        $classes = classModel::get();
        return view('character.index', ['characters'=>$characters,'classes'=>$classes]);
    }

     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        return view('character.create', ['classes' => classModel::get()]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {

    }
}
