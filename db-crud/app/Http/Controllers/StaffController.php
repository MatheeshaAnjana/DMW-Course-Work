<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('staff.list', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'role' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
        ]);

        Staff::create($data);
        return redirect('/staff')->with('success', 'Staff member added successfully!');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email,'.$staff->id,
            'role' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
        ]);

        $staff->update($data);
        return redirect('/staff')->with('success', 'Staff member updated successfully!');
    }

    public function destroy($id)
    {
        Staff::findOrFail($id)->delete();
        return redirect('/staff')->with('success', 'Staff member deleted successfully!');
    }
}
