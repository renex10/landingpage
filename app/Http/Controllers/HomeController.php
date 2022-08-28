<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Image;
use Auth;

use App\Models\Slider;


use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function HomeSlider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }
    public function AddSlider(){
        return view('admin.slider.create');
    }
    public function StoreSlider(Request $request){
        $slider_image = $request->file('image');     //insertando imagen
         
       $name_gen = hexdec(uniqid()); ///nombres de las imagenes que son unicas


        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(300,200)->save('image/slider/'.$name_gen);
        $last_img = 'image/slider/'.$name_gen;

         Slider::insert([
             'title'=>$request->title,
             'description'=>$request->description,
             'image'=>$last_img,
             'created_at'=>Carbon::now()
         ]);

         return redirect()->route('home.slider')->with('sucess','Slider Insertada con exito');

    }

    public function  Edit($id){
        $sliders = Slider::find($id);
        return view('admin.slider.edit',compact('sliders'));
   }

   public function Update(Request $request){
    
    $validatedData = $request->validate([
        'brand_name' => 'required|min:4',
         
          
      ],
      [
          'brand_name.required' => 'porfavor ingresa el nombre de la marca',
          'brand_image.min' => 'marca de mas de 4 caracteres',
        
      ]);
     

      
      $old_image= $request->old_image;//imagen antigua ya existente

       $brand_image = $request->file('brand_image');     //insertando imagen

       if($brand_image){//si hay imagen se actualizara

        $name_gen = hexdec(uniqid());//nombres de las imagenes que son unicas

        $img_ext = strtolower($brand_image->getClientOriginalExtension());//obteniendo lasextenciones

        $img_name = $name_gen.'.'.$img_ext;//combinando imagen con extension

        $up_location = 'image/brand/'; //localizacion

        $last_img = $up_location.$img_name; //guardando la imagen

        $brand_image->move($up_location,$img_name);//moviendo la imagen

        unlink($old_image);//elimina imagen ya existente

        Brand::find($id)->Update([//actualizando nueva imagen
            'brand_name'=>$request->brand_name,
            'brand_image'=>$last_img,
            'created_at'=>Carbon::now()
        ]);

        return redirect()->back()->with('sucess','marca actualizada  en la base de datos');

       }else{

        Brand::find($id)->Update([//actualizando nueva imagen
            'brand_name'=>$request->brand_name,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('sucess','marca actualizada  en la base de datos');

       }
       

   }

}
