<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
    
        $admin = Admin::where('email', $data['email'])->first();
    
        if ($admin && Hash::check($data["password"], $admin["password"])) {
            // Authentication passed...
            return Response()->json(["admin"=>$admin]);
        }
        
        return Response()->json(["admin"=>"error"]);
    }
}