<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function HomeAbout(){
        $homeabout=HomeAbout::latest()->get();
        return view('admin.home.index',compact('homeabout'));
    }
    public function AddAbout(){
        return view('admin.home.create');
    }
    public function StoreAbout(Request $request){
        HomeAbout::insert([
            'title' => $request->title,
            'long_dist' => $request->long_dist,
            'created_at' => Carbon::now()

        ]);
        return Redirect()->route('home.about')->with('success','Acerca de Nosotros Insertado con exito');
    }
    public function EditAbout($id){
        //obteniendo los datos especificado lo que se obtiene con el modelo ID
        $homeabout = HomeAbout::find($id);
       

          return view('admin.home.edit',compact('homeabout'));
    } 
    public function UpdateAbout(Request $request, $id){
       $update = HomeAbout::find($id)->update([
            'title' => $request->title,
            'long_dist' => $request->long_dist,


        ]);
        return Redirect()->route('home.about')->with('success','Acerca de Nosotros Insertado se actualizo con exito');

    }
}
