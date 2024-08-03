<?php

namespace App\Http\Controllers\Settings\NationalityManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    public function index(){
        return view('settings.nationality');
    }
}
