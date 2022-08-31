<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HaloModel;


class PostController extends Controller
{
    public function tambahData(Request $request){
         

        $datauser = [
            "name"=> $request->name,
            "kelas"=> $request->kelas,
            "nis"=>$request->nis,
            "date"=> $request->date,
            
     
        ];
        HaloModel::create($datauser);
        return redirect("/dataTable");
    }


    public function hapusdata(HaloModel $id){
        HaloModel::destroy($id -> id);
            return redirect ('/tableData');
     }

     public function index(){
        $datauser=HaloModel::all();
        return view('pages.data',['datauser'=>$datauser]);
    }


      public function returnForm(){
        return view("pages.form", [
            "datauser"=>HaloModel::all()
        ]);
    }

    public function returnTable(){
        $datauser=HaloModel::all();
        return view('pages.data',['datauser'=>$datauser]);
    }


    public function ubah(HaloModel $id){
        return view('pages.dataUbah', ["datauser"=>$id]);
     }
  

      function ubahdata(Request $request, HaloModel $id){
        $userdata=([
            "name"=> $request->name,
            "kelas"=> $request->kelas,
            "nis"=>$request->nis,
            "date"=> $request->date,
        ]);

        HaloModel::where('id', $id->id)->update($userdata);
        return redirect("/data");
    }

    

   
    


}
