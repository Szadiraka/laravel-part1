<?php
namespace App\Services;
use App\Models\User;
use App\Models\Role;
class UserService
{
    public function  getAllUsers()
    {
        $users = User::all();
        // $roles =$uses->role; 
        return response()->json($users);
    }

    public function getCountUsers()
    {
        return User::count();
    }

    public function getUserById($id)
    {
        return User::find($id);
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function updateUser( $id, array $data)
    {
        $user = User::find($id);
        return  $user->update($data);
    }

    public function deleteUser( $id)
    {
        $user = User::find($id);
        return $user->delete();
        
    }

    public function  getUserByPassword($mail, $password)
     {         
         $user = User::where('email', $mail)->where('password', $password)->first();
         if($user == null)
         {
            return response()->json(['error' => 'User not found'], 404);
         }

        $role =$user->role;  
        return response()->json($user) ;  
        // return response()->json(['user' => $user, 'role' => $role], 200);        
        
     }

     public function getUserWithRole($id)
     {
         $user = User::find($id);
         if ($user == null)
         return response()->json(['error' => 'User not found'], 404);
         else $role= $user->role;
         return response()->json( $user);
     }

     public function getAllUserWithRole($userRole)
     {
        $users= User::with('role')->get();
        $filteredUsers = [];

        foreach ($users as $user) {
            if ($user->role->name === $userRole) {
                $filteredUsers[] = $user;
            }
        }
    
        return $filteredUsers;   
         
   }
}