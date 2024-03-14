<?php
namespace App\Services;
use App\Models\Role;
class RoleService
{
    public function  getAllRoles()
    {
        return Role::all();
    }

    public function showUsersByRole($name)
    {
        $role=  Role::where('name', $name)->first();
        return $role->users;

    }

    public function getRoleById($id)
    {
        return Role::find($id);
    }

     public function getRoleByName($name)
     {
         return Role::where('name', $name)->first();
    
         
     }

    public function createRole(array $data)
    {
        return Role::create($data);
    }

    public function updateRole($id, array $data)
    {
        $role= Role::find($id);
        
        return $role->update($data);
    }

    public function deleteRole( $id)
    {
        $role= Role::find($id);
        return $role->delete();
    }
}