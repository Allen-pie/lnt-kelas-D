<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function addItemView(){
        return view('add-item');
    }

    // string list = int id
    public function updateItemView(int $id){
        $item = Items::find($id);
        return view('update-item', compact('item'));
    }

    // request adalah sebuah objek (punya properties & method)
    public function addItem(Request $request){
       Items::create([
        // nama kolom tabel => value dari request
        'name' => $request->name,
        'description' => $request->description,
        'stock' => $request->stock
       ]);
       
       return redirect()->route('list.item');
    }

    public function updateItem(Request $request, int $id){
        $item = Items::findOrFail($id);
        
        $item->update([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock
        ]);

        return redirect()->route('list.item');
    }

    public function deleteItem(int $id){
        // dump and die
        $item = Items::findOrFail($id);
        $item->delete();
        return back();
    }

    public function getItems(){
        $items = Items::all();
        // dd($items[0]->name);
        return view('all-item', compact('items'));
    }
}
