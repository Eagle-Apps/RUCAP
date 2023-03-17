<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class BeneficiariesController extends BaseController
{
    //

    public function createBeneficiaries(Request $request){
        $post= Beneficiaries::create($request->all());
        return response()->json($post);
    
    }
    
    public function updateBeneficiaries(Request $request, $id){
        $post = Beneficiaries::find($id);
        $post->name= $request->input('name');
        $post->type= $request->input('type');
        $post->save();
        return response()->json($post);
    
    }
    public function deleteBeneficiaries($id){
        $post= Beneficiaries::find($id);
        $post->delete();
        return response()->json("deleted sucessfuly");
    
    }
    public function index(Request $request){
        $post= Beneficiaries::all();
        return response()->json($post);
    
    }
    
}
