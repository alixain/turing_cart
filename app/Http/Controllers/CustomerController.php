<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RegisterCustomer;

use App\User;

use Hash;

class CustomerController extends Controller
{
    //

    public function index()
    {

    }


    public function store(RegisterCustomer $request)
    {

    	try{

    		$register = new User;
    		$register->name = $request->name;
    		$register->email = $request->email;
    		$register->password = Hash::make($request->password);
    		$register->address_1 = $request->address;
    		$register->address_2 = $request->address_2;
    		$register->city = $request->city;
    		$register->region = $request->region;
    		$register->postal_code = $request->postal_code;
    		$register->country = $request->country;
    		$register->shipping_region_id = $request->shipping_region_id;
    		$register->day_phone = $request->day_phone;
    		$register->eve_phone = $request->eve_phone;
    		$register->mob_phone = $request->mob_phone;
    		$register->save();


    	}catch(Exception $e)
    	{

    	}

    }


    public function update(Request $request, $id)
    {}
}
