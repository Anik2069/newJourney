<?php

namespace App\Http\Controllers;

use App\expenditurehistory;
use App\incomehistory;
use Illuminate\Http\Request;

class ExpenditurehistoryController extends Controller
{
    //
    public function insertexlist(Request $request){
        $incomelist=new expenditurehistory();
        $incomelist->date=$request->input('date2');
        $incomelist->ex_name=$request->input('option1');
        $incomelist->amount=$request->input('examount');
        $incomelist->save();
        return redirect('/addincome');

    }
}
