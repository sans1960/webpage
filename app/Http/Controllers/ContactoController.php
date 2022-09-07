<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Support\Facades\Redirect;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
 
       
    }
    public function index(){
        $contactos = Contacto::paginate(6);
        return view('admin.contactos',compact('contactos'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            
            'mensaje' => 'required|max:255'
         ]);
         $nombre = $request->nombre;
         Contacto::create($request->all());
        //  return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
        return view('frontend.respuesta',compact('nombre'));
    }
    public function destroy(Contacto $contacto){
        $contacto->delete();
        return redirect()->route('contactos.index');
      
       

    }
}
