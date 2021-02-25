<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('super_admin')) {
            return view('admin.dashboard');
        } 
        if (request()->user()->hasRole('admin_jelajah')) {
            return view('admin.wisata.jelajah');
        }
        if (request()->user()->hasRole('admin_kuliner')) {
            return view('admin.wisata.kuliner');
        }
        if (request()->user()->hasRole('admin_hiburan')) {
            return view('admin.wisata.hiburan');
        }
        if (request()->user()->hasRole('admin_belanja')) {
            return view('admin.wisata.belanja');
        }
        else {
            return redirect('/');
        } 
    }

}
