<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
       public function __construct(UserService $userService)
       {
        $this->userService = $userService;
       }

      public function index()
    {
        $users= $this->userService->getAllUsers();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|unique:users,email|max:255',
            'password' => 'required|string|min:5',
            'role_id' => 'required|exists:roles,id',
            'phone' => 'required|max:20',
        ]);

        $users= $this->userService->createUser($data);
         return response()->json($users);           
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);
        return response()->json($user);
    }

    public function update(Request $request, User $user)
    {
        $id= $request->input('id');
       
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,' . $id,
            'password' => 'required|string|min:5',
            'role_id' => 'required|integer|min:1|exists:roles,id',
            'phone' => 'required|max:20',
        ]);
       
        $user = $this->userService->updateUser($id, $data);
        return response()->json($user);     
    }

    public function destroy( $id)
    {
       $users= $this->userService->deleteUser($id);
       return response()->json($users);
    }

    public function count()
    {
        $count=  $this->userService->getCountUsers();
        return response()->json($count);
    }

     public function   userByPassword(Request $request)
     {
            $mail = $request->input('mail');
            $password = $request->input('password');
            $user = $this->userService->getUserByPassword($mail, $password);
            return response()->json($user);
     }

     public function userRole($id)
     {
         $user= $this->userService->getUserWithRole($id);
         return response()->json($user);
     }

     public function userRoleAll($userRole)
     {
         $users= $this->userService->getAllUserWithRole($userRole);
         return response()->json($users);
     }
       
}

