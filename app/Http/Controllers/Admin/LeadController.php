<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Datatables;

class LeadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.leads.index');
    }

    public function datatables()
    {
        $datas = Contact::orderBy('id', 'desc')->get(); 
     
       
        return Datatables::of($datas)

            ->addColumn('name', function (Contact $data) {
                $name = '<p class="mb-0"><b>Name: </b>'.$data->name.'</p>'; 
                $email = '<p class="mb-0"><b>Email: </b>'.$data->email.'</p>'; 
                $location = '<p class="mb-0"><b>Location: </b>'.$data->location.'</p>'; 
                return $name.  $email . $location;
            })

             ->addColumn('status', function(Contact $data)  {
                   
                    
                    switch ($data->status) {
                        case 'Pending':
                            $class = 'bg-danger';
                            break;
                        case 'Processing':
                            $class = 'bg-earning';  
                            break;
                        case 'Approved':
                            $class = 'bg-success';  
                            break;
                       
                        default:
                            $class = 'drop-default'; 
                            break;
                    }
                  
                
                    $selectedOptions = [
                        0 => $data->status == 'Pending' ? 'selected' : '',
                        1 => $data->status == 'Processing' ? 'selected' : '',
                        2 => $data->status == 'Approved' ? 'selected' : '',                  
                    ];
                    
                    // Create the dropdown with all status options
                    return '<div class="action-list">
                                <select class="process select status-chaneg drop-link ' . $class . '" >
                                        <option data-id = "'. $data->id .'" data-val="Pending" value="' . route('admin.leads.status', ['id1' => $data->id, 'id2' => 'Pending']) . '" ' . $selectedOptions[0] . '>Pending</option>
                                        <option data-id = "'. $data->id .'" data-val="Processing" value="' . route('admin.leads.status', ['id1' => $data->id, 'id2' => 'Processing']) . '" ' . $selectedOptions[1] . '>Processing</option>
                                        <option data-id = "'. $data->id .'" data-val="Approved" value="' . route('admin.leads.status', ['id1' => $data->id, 'id2' => 'Approved']) . '" ' . $selectedOptions[1] . '>Approved</option>
                                </select>
                                
                            </div>';
               })
              
            ->addColumn('phone', function (Contact $data) {
                return $data->phone;
            })

             ->addColumn('requirement', function (Contact $data) {
                return $data->requirement;
            })
 
            ->addColumn('action', function (Contact $data) {
                return '<div class="action-list"><a href=""> <i class="fas fa-edit"></i>Details</a></div>';
            })

            ->rawColumns(['name','status', 'action'])
            ->toJson();
    }

     public function status($id1, $id2,Request $request)
    {
        //--- Logic Section
        $data = Contact::findOrFail($id1);
        $data->status = $id2;
        $data->save();
    }
}
