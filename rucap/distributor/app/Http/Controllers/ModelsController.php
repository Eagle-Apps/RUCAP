<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ModelsController extends BaseController
{
    //

    public function createModels(Request $request){
        $post= Models::create($request->all());
        return response()->json($post);
    
    }
    
    public function updateModels(Request $request, $id){
        $post = Models::find($id);
        $post->model_name= $request->input('model_name');
        $post->charity= $request->input('charity');
        $post->project= $request->input('project');
        $post->prospector= $request->input('prospector');
        $post->royalty= $request->input('royalty');

        $post->partner= $request->input('partner');
        $post->investor= $request->input('investor');

        $post->save();
        return response()->json($post);
    
    }
    public function deleteModels($id){
        $post= Models::find($id);
        $post->delete();
        return response()->json("deleted sucessfuly");
    
    }
    public function index(Request $request){
        $post= Models::all();
        return response()->json($post);
    
    }
    
}
