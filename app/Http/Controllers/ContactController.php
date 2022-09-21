<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
        return view ('admin.contact.index',compact('contacts'));
    }
    public function AdminAddContact(){
        return view ('admin.contact.create');

    }
    public function  AdminStoreContact(Request $request){
        Contact::insert([
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now()

        ]);
        return Redirect()->route('admin.contact')->with('success','Contacto Insertado con exito');

    }
    public function Contact(){
        $contacts = DB::table('contacts')->first();
        return view('pages.contact',compact('contacts'));
    }
    public function ContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()

        ]);
        return Redirect()->route('contacto')->with('success',
        'tu mensaje se ha enviado correctamente a nuestra plataforma de mensaje');


    }
   public function  AdminMessage(){
/* $messages =  ContactForm::all(); */
/* $messages = ContactForm::where('id',$contacto->id); */
/* $messages = Contact::OrderBy('id','DESC')->paginate(8); */
/* $messages = Contact::where('name',$contact->name)->latest('id'); */
/* $messages = ContactForm::where('message'); */
/* $messages = DB::table('contact_forms')
                ->first(); */
                $messages = ContactForm::latest()->paginate(5);   
    return view('admin.contact.message',compact('messages'));

   }

}
