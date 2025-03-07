<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Member;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index(){
        // return Member::all();
        // return Member::find(1)->getGroup;
        return Member::with('group')->get();
    }

    public function index2(){

        // return Member::with('group')->get();
        // return Group::get();
        return Group::with('member')->get();
    }

    public function member(Member $member){
        return $member;
    }
}
