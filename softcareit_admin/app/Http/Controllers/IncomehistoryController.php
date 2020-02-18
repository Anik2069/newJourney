<?php

namespace App\Http\Controllers;

use App\expenditurehistory;
use App\expenditurelist;
use App\incomehistory;
use App\incomelist;
use Illuminate\Http\Request;

class IncomehistoryController extends Controller
{
    //
    public function viewlist(){
        //variable C and D defined for count
        $c=0;
        $d=0;
        $value = incomelist::all()->toArray();
        $value1 = expenditurelist::all()->toArray();
        $value2 = incomehistory::all()->toArray();
        $value3 = expenditurehistory::all()->toArray();
        return view("addinandex",compact('c','d','value','value1','value2','value3'));
    }

    public function report(){
        //variable C and D defined for count

$total=0;
        $total1=0;


        $value2 = incomehistory::all()->toArray();
        $value3 = expenditurehistory::all()->toArray();
        return view("report",compact('value2','value3','total','total1'));
    }

    public function insertlist(Request $request){
        $incomelist=new incomehistory();
        $incomelist->date=$request->input('date1');
        $incomelist->in_name=$request->input('option');
        $incomelist->amount=$request->input('inamount');
        $incomelist->save();
        return redirect('/addincome');

    }
    public function search(Request $request){
        $total=0;
        $total1=0;
        $date1=$request->input('date1');
        $date2=$request->input('date2');
        $value2 = incomehistory::where([
            ['date', '>=',$date1 ],
            ['date', '<=',$date2 ]

        ])->get();
        $value3 = expenditurehistory::where([
            ['date', '>=',$date1 ],
            ['date', '<=',$date2 ]
        ])->get();

        return view("report",compact('value2','value3','total','total1'));




    }
}
