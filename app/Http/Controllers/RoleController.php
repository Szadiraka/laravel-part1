<?php

namespace App\Http\Controllers;
use App\Services\RoleService;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleService;
       public function __construct(RoleService $roleService)
       {
        $this->roleService = $roleService;
       }

      public function index()
    {
        $roles= $this->roleService->getAllRoles();
        return response()->json($roles);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);
        $roles= $this->roleService->createRole($data);
         return response()->json($roles);           
    }

    public function show($id)
    {
        $role = $this->roleService->getRoleById($id);
        return response()->json($role);
    }

    public function update(Request $request, Role $role)
    {
        $id= $request->input('id');
        $data = $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);
        $role = $this->roleService->updateRole($id, $data);
        return response()->json($role);     
    }

  

    public function showbyName($name){
        $role = $this->roleService->getRoleByName($name);
        if(!$role){
            return response()->json(['message' => 'Role not found'], 404);
        }
         return response()->json($role);
    }

    public function showUsers($name)
    {
        $users = $this->roleService->showUsersByRole($name);
        if (!$users) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        
        return response()->json($users);
    }

    public function destroy($id)
    {
       $roles= $this->roleService->deleteRole($id);
       return responce()->json($roles);
    }
       
}
