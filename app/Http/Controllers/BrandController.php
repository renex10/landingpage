<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;

use Image;
use Auth;



class BrandController extends Controller
{

    protected $paginationTheme = 'bootstrap';
    public function __construct()
    {
        $this->middleware('auth');
    }
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
         
       $name_gen = hexdec(uniqid()); ///nombres de las imagenes que son unicas

        /*  $img_ext = strtolower($brand_image->getClientOriginalExtension()); *///obteniendo lasextenciones

       /*   $img_name = $name_gen.'.'.$img_ext; *///combinando imagen con extension

       /*   $up_location = 'image/brand/'; */ //localizacion

        /*  $last_img = $up_location.$img_name; */ //guardando la imagen

        /*  $brand_image->move($up_location,$img_name) */;//moviendo la imagen

        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);
        $last_img = 'image/brand/'.$name_gen;

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


             /**========================================================================================= */
                    #Eliminar
    /**========================================================================================= */

    public function Delete($id){
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);//eliminan las fotos que estan guardadas en el public desde la raiz
        
        Brand::find($id)->delete();//elimina la direccion desde la base de datos
        return redirect()->back()->with('sucess','marca eliminada  en la base de datos');

    }


    ////this is for Multi Image all method
 public function Multipic(){
     //cargar la pagina
     $images = Multipic::all();

     return view('admin.multipic.index',compact('images'));

 }

 public function StoreImg(Request $request){



    $image = $request->file('image');     //insertando imagen
    if($image === null){ 
        return redirect()->back()->with('sucess','inserte imagenes');
    }
    foreach($image as $multi_img){
    $name_gen = hexdec(uniqid()); ///nombres de las imagenes que son unicas

    $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
     Image::make($multi_img)->resize(300,200)->save('image/multi/'.$name_gen);
     $last_img = 'image/multi/'.$name_gen;

      Multipic::insert([
    
          'image'=>$last_img,
          'created_at'=>Carbon::now()
      ]);
    
    
    }//end for each

      return redirect()->back()->with('sucess','marca insertada exitosamente en la base de datos');

   



}

public function Logout(){
    Auth::logout();
    return Redirect()->route('login')->with('success','saliendo de la plataforma');
}
}
