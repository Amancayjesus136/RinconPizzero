<?php

namespace App\Http\Controllers\Settings\PositionManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(){
        return view('settings.position');
    }
}
