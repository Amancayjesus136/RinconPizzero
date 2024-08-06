<?php

namespace App\Http\Controllers\Users\EmployeeManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){
        return view('user.employee');
    }
}
