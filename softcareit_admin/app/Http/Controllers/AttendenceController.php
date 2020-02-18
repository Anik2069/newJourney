<?php

namespace App\Http\Controllers;

use App\attendence;
use App\employee;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    //
    public function getdata()
    {
        $date = $_GET['date'];
        $em = employee::all();
        $wordlist = attendence::where('date', '=', $date)->get();
        $wordCount = $wordlist->count();
        if ($wordCount <= 0) {
            $data = '    <div class="row">
                      <div class="col-lg-12 grid-margin stretch-card">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title">Attendence Table</h4>
                                  <p class="card-description">
                                      Add class <code>.table</code>
                                  </p>
                                  <div class="table-responsive">
                                  
                                  
                                    
                                      <table class="table">
                                          <thead>
                                          <tr>
                                              <th>Count</th>
                                              <th>Employee ID</th>
                                              <th>Employee Name</th>
                                                <th>Employee Status</th>
                                          </tr>
                                          </thead>';
                                        $c = 1;
                                        $arrray[][] = 0;
                                        foreach ($em as $val) {
                                            $data .= '<tr>
                            <td>' . $c . '</td>
                            <td>' . $val['employee_id'] . '</td>
                            <td>' . $val['employee_name'] . '</td>
                            <td><input type="checkbox" name="checker[]" id="checker" value=" " onclick="myFunction()" ></td>
                            <td><input type="hidden" name="emplyee_id[]" value="' . $val['employee_id'] . '" ></td>
                            <td><input type="hidden" name="employee_name[]" value="' . $val['employee_name'] . '"></td>
                            <td><input type="text" value="' . $date . '"  style="display:none"></td>
                            
                            
                            </td>
                            </tr>
                            ';



                                            $c++;
                $arrray[][] = [$c, $val['employee_id'], $val['employee_name']];
            }


            $data .= '
        
                                          <tbody>

                                          </tbody>
                                      </table>
                                              <input type="submit" value="Submit" class="btn btn-success">

                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

        ';
        }

        echo $data;

    }

    public function addattendence(Request $request)
    {

        $checker = $request->input('checker');
        $id = $request->input('emplyee_id');
        $name = $request->input('employee_name');

        $count = sizeof($name);

        for ($i=0; $i< $count;$i++){
            $status = "a";
            if (isset($request->checker[$i])){
                $status = "p";
            }
            echo $status;
        }

        dd($checker, $name, $id);


    }
}
