<?php

namespace App\Http\Controllers;

use App\employee;
use App\expenditurelist;
use App\incomelist;
use App\logindata;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function viewlist(){
        //variable C and D defined for count
        $c=0;
        $d=0;
        $value = incomelist::all()->toArray();
        $value1 = expenditurelist::all()->toArray();
        return view("inandex",compact('c','d','value','value1'));
    }


    public function viewincome(){
        //variable C and D defined for count
        $c=0;
        $d=0;
        $value = incomelist::all()->toArray();
        $value1 = expenditurelist::all()->toArray();
        return view("inandex",compact('c','d','value','value1'));
    }

    public function attedence(){
    return view("attedence");
}

    public function addemploye(){
        return view("addemployee");
    }

    public function submitinfo(Request $request){
        $em=new employee();
        $login= new logindata();
        $em->employee_id=$request->input('id');
        $em->employee_name=$request->input('name');
        $em->joining_date=$request->input('date1');
        $em->address=$request->input('address');
        $em->email=$request->input('email');
        $em->user_roles=$request->input('roles');
        $login->email=$request->input('email');
        $login->password=$request->input('password');
        $login->userroles=$request->input('roles');
        $em->save();
        $login->save();
        return redirect('/addemployee');

    }

    public function insertlist(Request $request){
        $incomelist=new incomelist();
        $incomelist->name=$request->input('incomelist');
        $incomelist->save();
        return redirect('/addlist');

    }

    public function insertexlist(Request $request){
        $expenditurelist=new expenditurelist();
        $expenditurelist->name=$request->input('expenditure');
        $expenditurelist->save();
        return redirect('/addlist');

    }

    public  function deleteexlist($id){
        $exdel=expenditurelist::find($id);
        $exdel->delete();
        return redirect('/addlist');


    }

    public  function deleteinlist($id){
        $exdel=incomelist::find($id);
        $exdel->delete();
        return redirect('/addlist');


    }



}
