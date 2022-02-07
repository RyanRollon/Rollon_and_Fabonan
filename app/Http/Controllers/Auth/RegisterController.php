<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class RegisterController extends Controller
{
    public function index(){
        return view('index'); 
    }

    public function store(Request $request){
        $this->validate($request, [
            'surname' => 'required|max:225',
            'firstname' => 'required|max:225',
            'middlename' => 'required|max:225',
            'birthdate' => 'required|max:225',
            'age' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'postal' => 'required|max:225',
            'phone_number' => 'required|max:225',
            'mobile_number' => 'required|max:225',
            'email' => 'required|max:225',
            'emergency_name' => 'required|max:225',
            'emergency_number' => 'required|max:225',
            'emergency_relationship' => 'required|max:225',
            
        ]);
 
        account::create([
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'street' => $request->street,
            'city' => $request->city,
            'postal' => $request->postal,
            'phone_number' => $request->phone_number,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'emergency_name' => $request->emergency_name,
            'emergency_number' => $request->emergency_number,
            'emergency_relationship' => $request->emergency_relationship,     
        ]);

   
        dd($request);
        return redirect()->route('index');

        
     }


}
