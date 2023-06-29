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
    protected function show($id){
        $categorie = \App\Models\Categorie::select('id','name','state')->find($id);
        return $categorie;
    }

    //function para editar
    protected function update(Request $request){
        
       
        $categorie=\App\Models\Categorie::find($request->id);
        $categorie->name = strtoupper(trim($request->name));
        $categorie->state=$request->state;
        $categorie->save();
        return \response()->json(['state'=>0,'data'=>$categorie],200);
      

    }

    //function para borrar registro
    protected function destroy(Request $request){
        
        $categorie=\App\Models\Categorie::where('id',$request->id)->delete();
       
        return \response()->json(['state'=>0,'id'=>$request->id],200);

    }

   
}