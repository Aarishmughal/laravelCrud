<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){

    }
    public function add(){
        return view("add");
    }

    public function addProcess(Request $request, Item $item){
        $request->validate([
            'name'=>'required',
            'quantity'=>'required|integer',
            'price'=>'required|numeric'
        ]);
        $item->create($request->all());
        return redirect()->route('index')->with('success', "Item Added Successfully");
    }
}
