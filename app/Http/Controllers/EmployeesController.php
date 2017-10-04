<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use \Illuminate\Support\Facades\DB;


class EmployeesController extends Controller
{
    //
    public function index() {
       return view('form.form');
    }
    public function register(Request $request) {
       # echo  $request['calificacion'];
            $nombre=$request->input('nombre');
            $domicilio=$request->input('domicilio');
            $cumple=$request->input('bday');
            $email=$request->input('email');
           
            $id_employee= DB::table('employees')->insertGetId(['name'=>$nombre,'birthday'=>$cumple,'email'=>$email]);
            foreach ($domicilio as $dom) {
                    DB::table('address')->insert(['id_employee'=>$id_employee,'address'=>$dom]);
                    
                   
            }   
            
            
             
             return redirect()->action(
                'EmployeesController@listed', ['id' => 1]
            );
      
    }
    public function listed() {
          
        $datos = DB::table('employees')
            ->join('address', 'employees.id', '=', 'address.id_employee')
           
            ->select('employees.id', 'employees.name', 'employees.email','employees.birthday')
            
            ->get();
    
        
    return view('form.listed',['datos'=>$datos]);
    }
    public function detail($id) {
        $employee = DB::table('employees')->where('id', $id)->first();
        
        $address = DB::table('address')->where('id_employee', $id)->get();
        return view('form.detail',["address"=>$address,"employee"=>$employee]);
    }

}
