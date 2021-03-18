<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AkunController extends Controller
{
    public function index()
    {
        $role = DB::select("SELECT 
                    *
                FROM
                    roles
                WHERE
                    id NOT IN (1 , 2)");

        $r = DB::select("SELECT 
                a.id, a.name, email, c.description, a.created_at
            FROM
                users a
                    LEFT JOIN
                role_user b ON a.id = b.user_id
                    LEFT JOIN
                roles c ON b.role_id = c.id");

        return view('admin.akun.index',compact('role','r'));
    }

    public function create()
    {

    }
}
