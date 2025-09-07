<?php
namespace App;

use App\Models\Staff;

class StaffService
{
    public function getAll()
    {
        return Staff::orderBy('name')->get();
    }

    public function findById($id)
    {
        return Staff::find($id);
    }

    public function store(array $data)
    {
        return Staff::create($data);
    }

    public function update($id, array $data)
    {
        $staff = Staff::find($id);
        if (! $staff) return false;
        return $staff->update($data);
    }

    public function delete($id)
    {
        $staff = Staff::find($id);
        if (! $staff) return false;
        $staff->delete();
        return true;
    }
}
