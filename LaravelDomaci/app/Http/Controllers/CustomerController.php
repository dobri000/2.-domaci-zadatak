<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerCollection;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return new CustomerCollection($customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=>'required|string|max:100',
            'lastname'=>'required|string|max:100',
            'birth'=>'required',
            'email'=>'required|email',
            'address'=>'required|string|max:100'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $customer = new Customer();
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->birth = $request->birth;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        return response()->json(['Kupac je napravljen',
        new CustomerResource($customer)]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make($request->all(), [
            'firstname'=>'required|string|max:100',
            'lastname'=>'required|string|max:100',
            'birth'=>'required',
            'email'=>'required|email',
            'address'=>'required|string|max:100'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->birth = $request->birth;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();

        return response()->json(['Kupac je azuriran',
        new CustomerResource($customer)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        return response()->json(['Kupac je obrisan',
        new CustomerResource($customer)]);
    }
}
