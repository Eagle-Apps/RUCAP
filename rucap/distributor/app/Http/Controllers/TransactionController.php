<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Laravel\Lumen\Routing\Controller as BaseController;

class TransactionController extends BaseController
{
    //
public function createTransactions(Request $request){
    $post= Transaction::create($request->all());
    return response()->json($post);

}

public function updateTransactions(Request $request, $id){
    $post = Transaction::find($id);
    $post->productid= $request->input('productid');
    $post->clientid= $request->input('clientid');
    $post->content= $request->input('content');
    $post->amount= $request->input('amount');
    $post->save();
    return response()->json($post);

    
}
public function deleteTransactions($id){
    $post= Transaction::find($id);
    $post->delete();
    return response()->json("deleted sucessfuly");

}
public function index(Request $request){
    $post= Transaction::all();
    return response()->json($post);

}
}
