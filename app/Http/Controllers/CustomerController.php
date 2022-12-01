<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\CustomerStoreRequest;
use App\Http\Requests\Customer\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function index()
    {
        $customers=Customer::with('user')->where('user_id',Auth::id())->get();
        return view('pages.customers.list_customers',compact('customers'));
    }


    public function create()
    {
        return view('pages.customers.add_customer');
    }


    public function store(CustomerStoreRequest $request)
    {
        $request->validated();
        $request['user_id']=Auth::id();
        Customer::create($request->all());
        return view('pages.customers.add_customer');
    }


    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('pages.customers.edit_customer',compact('customer'));
    }


    public function update(CustomerUpdateRequest $request, $id)
    {
        $request->validated();
        $customer=Customer::find($id);
        $request['user_id']=Auth::id();
        $customer->update($request->all());
        return redirect()->route('customers.index');
    }


}
