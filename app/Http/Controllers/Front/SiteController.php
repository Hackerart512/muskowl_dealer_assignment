<?php

namespace App\Http\Controllers\Front;

use Datatables;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use InvalidArgumentException;
use Validator;
use Carbon\Carbon;
 
use App\Models\Contact;

class SiteController extends Controller
{
 
    public function index()
    {
         return view('front.index');
    }

    public function contactSubmit(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name'        => 'required|string|max:255',
            'location'    => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required',
            'requirement' => 'nullable|string',
        ]);

        
        Contact::create([
            'name'        => $request->name,
            'location'    => $request->location,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'requirement' => $request->requirement,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Form submitted successfully!'
        ], 200);
    }
}
