<?php

namespace App\Http\Controllers;
use App\Models\Coment;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComentController extends Controller
{
    public function index()
    {
          $coment=Coment::all();
          return view('c_pok', [
            'coment' =>$coment
        ]);
    }
    public function show($id)
    { 
        $coment=Coment::find($id); 
      
        return view('c_show', [ 'coment' =>$coment ]);
    }

       public function create(Request $request)
       
    {
       if($request->has('content'))
       {
          $coment=Coment::create($request->all());
          return redirect('/coment');  
       }
      return view('c_create', [ ]);
    }

    public function update(Request $request , $id)
   {
      if($request->has('content'))
       {
          $coment=Coment::find($request->id);
          $coment->content=($request->content);
          $coment->save();
          return redirect('/coment');  
       }
      
       $coment=Coment::find($id);
       return view('c_update', [ 'coment'=>$coment]);
    }


       public function delete($id)

    {  
        
        
       $coment=Coment::find($id);
       

       return view('c_delete', [ 'coment' =>$coment]);
    } 
}
