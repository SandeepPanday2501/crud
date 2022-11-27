<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{

    public function display()
    {
        return view('dashboard', ['list' => employee::all()]);
    }

    function addstu(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'department' => 'required',
            'post' => 'required'
        ]);

        employee::create([
            'name' => $req->name,
            'address' => $req->address,
            'contact' => $req->contact,
            'department' => $req->department,
            'post' => $req->post

        ]);


        return redirect()->route('add');
    }
    function add()
    {
        return view('add');
    }

    function editv()
    {
        return view('edit');
    }

    public function delete($id)
    {
        $data = employee::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function editstu($id)
    {
        $data = employee::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $req)
    {

        $itemObj = employee::find($req->id);
        $itemObj->name = $req->name;
        $itemObj->address = $req->address;
        $itemObj->contact = $req->contact;
        $itemObj->department = $req->department;
        $itemObj->post = $req->post;
        $itemObj->save();
        return redirect()->route('dashboard');
    }

}