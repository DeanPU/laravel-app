<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roleModel;

class RoleController extends Controller
{
    public function index(){
        $role = roleModel::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil!',
            'data' => $role
        ], 200);
    }
}
