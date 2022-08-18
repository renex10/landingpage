<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Carbon;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands= Brand::latest()->paginate(5);
        return view('admin.brand.index',compact('brands'));
    }

    public function StoreBrand(Request $request){


        
        $validatedData = $request->validate([
          'brand_name' => 'required|unique:brands|min:4',
            'brand_image' => 'required|mimes:jpeg,jpg,png',
            
        ],
        [
            'brand_name.required' => 'porfavor ingresa el nombre de la marca',
            'brand_image.min' => 'marca de mas de 4 caracteres',
          
        ]);
 
        
        

         $brand_image = $request->file('brand_image');     //insertando imagen
         
         $name_gen = hexdec(uniqid());//nombres de las imagenes que son unicas

         $img_ext = strtolower($brand_image->getClientOriginalExtension());//obteniendo lasextenciones

         $img_name = $name_gen.'.'.$img_ext;//combinando imagen con extension

         $up_location = 'image/brand/'; //localizacion

         $last_img = $up_location.$img_name; //guardando la imagen

         $brand_image->move($up_location,$img_name);//moviendo la imagen

         Brand::insert([
             'brand_name'=>$request->brand_name,
             'brand_image'=>$last_img,
             'created_at'=>Carbon::now()
         ]);

         return redirect()->back()->with('sucess','marca insertada exitosamente en la base de datos');
    }


    /**========================================================================================= */
                    #EDITAR
    /**========================================================================================= */

    public function Edit($id){
        $brands = Brand::find($id);
        return view('admin.brand.edit', compact('brands'));

    }

    
    /**========================================================================================= */
                    #Actualizar
    /**========================================================================================= */

    public function Update(Request $request,$id){
            }
}
