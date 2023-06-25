<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Uuid;

class CategorieController extends Controller
{
  

    public function index()
    {
        $categories = Categorie::all();
        return response()->json(['categories' => $categories], 200);
    }

    

    public function store(Request $request)
    {
       
        $categorie = new Categorie([
            'name' => $request->get('name'),
            'state' => 1,
        ]);

        $categorie->save();

        return \response()->json(['state'=>0,'data'=>$categorie],200);
    }
    

   
}