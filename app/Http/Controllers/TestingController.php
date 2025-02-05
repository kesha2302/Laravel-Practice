<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
        // return Member::all();
        // return Member::find(1)->getGroup;
        return Member::with('getGroup')->get();
    }
}
