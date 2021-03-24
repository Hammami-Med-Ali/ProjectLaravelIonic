<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function create(Request $REQUEST)
    {
        $produits = new Produit();
        $produits->id = $REQUEST->input('id');
        $produits->nomprod = $REQUEST->input('nomprod');
        $produits->description = $REQUEST->input('description');
        $produits->prix = $REQUEST->input('prix');

        $produits->save();
        return response()->json($produits);
        //return redirect('/dashbord');

    }
    public function show()
    {
         $produits = Produit::all();
        
        return response()->json($produits);    
    }
    public function showbyid($id) 
    {
        $produits = Produit::find($id);
        return response()->json($produits); 

    }
    public function update(REQUEST $REQUEST,$id) 
    {
        $produits = Produit::find($id);
        //dd($REQUEST);
        $produits->id = $REQUEST->input('id');
        $produits->nomprod = $REQUEST->input('nomprod');
        $produits->description = $REQUEST->input('description');
        $produits->prix = $REQUEST->input('prix');
        $produits->save();
        return response()->json($produits);
        //return view('/edit',compact('students','id'));
       // return redirect('/api/student');
    }
    public function delete(REQUEST $REQUEST,$id) 
    {
        $produits = Produit::find($id);
        $produits->delete();
        return response()->json($produits); 

    }
    public function index(){
        $produits = Produit::all();
        return response()->json($produits);
        // return view('/index',compact('students'));
    }
    public function edit($id) 
    {
        $produits = Student::find($id);
        return response()->json($produits);
        /* return view('/edit',compact('students'));   */  }
}
