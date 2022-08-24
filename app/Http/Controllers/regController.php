<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegController extends Controller
{
    public function addData(Request $request){
         
        $namaLengkap = $request->namaAwal . " " . $request->namaAkhir;

        $data = [
            "name"=>$namaLengkap,
            "email"=> $request->email,
            "password"=>($request->password)
     
        ];
        User::create($data);
        return redirect("/regAll");
    }

    // public function index(){
    //     return view("pages.register.regTampil", [
    //         "data"=>User::all()
    //     ]);
    // }

    public function hapusdata(User $id){
        User::destroy($id -> id);
            return redirect ('/regData');
     }
     
     public function indexRegist(){
        $data=User::all();
        return view('pages.register.regData',['data'=>$data]);
    }
    
    public function returnData(){
        $data=User::all();
        return view('pages.register.regData',['data'=>$data]);
    }
    // ini fungsi buat return ke table aja


}
