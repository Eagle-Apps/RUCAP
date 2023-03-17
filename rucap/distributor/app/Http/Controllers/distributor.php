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
        $post->productid= $request->input('productid');
        $post->clientid= $request->input('clientid');
        $post->content= $request->input('content');
        $post->amount= $request->input('amount');
        $post->save();
        return response()->json($post);
    
    }
    public function distribute($balance, $charity, $project, $prospector, $royalty, $partner, $investor){

        $post= Models::find($id);
        $post->delete();
        return 1;
    
    }
    public function index(Request $request, $model, $balance){
    //    $model= Models::select()->where('model_name', $model)->get();
       $charity=Models::select('charity')->where('model_name', $model)->get();
       $project=Models::select('project')->where('model_name', $model)->get();
       $prospector=Models::select('prospector')->where('model_name', $model)->get();
       $royalty=Models::select('royalty')->where('model_name', $model)->get();
       $partner=Models::select('partner')->where('model_name', $model)->get();
       $investor=Models::select('investor')->where('model_name', $model)->get();


       $distribute= distribute($balance, $charity, $project, $prospector, $royalty, $partner, $investor);
       if($distribute == 1){return response()->json("succesfully distributed");}else{
        return response()->json("Not distributed");
} 
        
    
    }
    
}
