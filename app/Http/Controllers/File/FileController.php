<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\facades\storage;


class FileController extends Controller
{
    public function index()
    {
        return view('files.upload');
    }


    public function upload( Request $request)
    {
       //dd($request);

       $data = new File();
       $file=$request->file;
       $filename=time().'.'.$file->getClientOriginalExtension();
         
       
       $request->file->move('assets',$filename);
       $data->file=$filename;
       $data->discription=$request->discreption;
       $data->type=$request->type;
       $result=$data->save();
       if ($result) {
        return redirect()->back()->with('success', 'file successfully uploaded.');
       }
      else {
        return redirect()->back()->with('fail', 'somthing went wrong please try later.');

      }
    }

    public function show()
    {
      $data = File::where('type','2')->get();
      //dd($data);
        return view('files.showdocuments',compact('data'));
    }
    
    public function download(Request $request ,$file)
    {
     
        return response()->download(public_path('assets/'.$file));
    }
}
