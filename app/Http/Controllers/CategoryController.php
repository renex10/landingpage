<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function AllCat(){
        $categories =  Category::latest()->paginate(5);
        $trachCat = Category::onlyTrashed()->latest()->paginate(3);
       /*  return $categories; */
        return view('admin.category.index',compact('categories','trachCat'));
    }

    public function AddCat(Request $request){
       $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
           
        ],
        [
            'category_name.required' => 'porfavor ingresa el nombre de la categoria',
            'category_name.max' => 'adaptado para recibir un maximo de 255 caracteres',
          
        ]);
       
       Category::insert([
            'category_name' => $request->category_name,
            'user_id'=> Auth::user()->id,
            'created_at'=>Carbon::now()
        ]); 

       
  
        /* return $request->all(); */

       /*  $category = new Category;
       $category->category_name = $request->category_name;
       $category->user_id = Auth::user()->id;
       $category->save(); */
      // return $category;


      /*###############3ra manera de insertar datos ########################### */
    /*   $data = array();
      $data['category_name'] = $request->category_name;
      $data['user_id'] =  Auth::user()->id;
      Db::table('categories')->insert($data); */


      return redirect()->back()->with('success','categoria insertada con exito!!!');

    }



    public function  Edit($id){
         $categories = Category::find($id);
         return view('admin.category/edit',compact('categories'));
    }

    public function Update(Request $request, $id ){
       $update = Category::find($id)->Update([
           'category_name' => $request->category_name,
           'user_id' =>Auth::user()->id       
        ]);
        return redirect()->route('all.category')->with('success','categoria actualizada');
      // $id->category_name= $request->category_name;
       
       //return redirect ()->route('all.category');

    }

    public function SoftDelete($id)
    {
         $delete = Category::find($id)->delete();
         return Redirect()->back()->with('success','categoria eliminada exitosamente');
    }

    public function Restore($id){
        $delete =  Category::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','categoria se ha restaurado exitosamente');
    }

    public function delete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success','categoria se ha eliminado permanentemente');
    }
}
