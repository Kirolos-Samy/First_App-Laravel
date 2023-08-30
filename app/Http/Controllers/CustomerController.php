<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    //
    public function index(){

        $customers = Customer::get();
        return view('Customers.customers',compact('customers'));

    }

    public function show($id){
        $customer = Customer::find($id);
        return view('Customers/details',compact('customer'));
    }

    public function update($id){
        $customer = Customer::find($id);
        return view('Customers/update',compact('customer'));
    }

    public function edit($id, Request $request){
        $customer = Customer::find($id);

        if ($request->hasFile('image')) {
            // New image uploaded
            $imagePath = public_path('images') . '/' . $customer->image;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            // No new image uploaded, use the existing image name
            $imageName = $customer->image;
        }

        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'image' => $imageName,
        ]);

        return redirect()->route('customer.index');

    }

    public function destroy($id){
        $customer = Customer::find($id);
        // Delete image from public/images
        if ($customer->image) {
            $imagePath = public_path('images') . '/' . $customer->image;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        if ($customer) {
            if ($customer->order()->count() > 0) {
                return redirect()->route('customer.index')->with('error', 'Cannot delete customer has a pending order');
            }

            $customer->delete();
        }

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
    }

    // public function create(){
    //     return view('Customers/create');
    // }

    public function store(Request $request){


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'image' => $imageName,
        ]);

        return redirect()->route('customer.index');
    }




}
