<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Company;
use App\Models\Member;
use App\Models\Device;

class Companies extends Controller
{
    function signUp(Request $req)
    {
        $data = $req -> all();
        $data['is_admin'] = 0;
        Member::create($data);
        return("Signup successful");
    }
}
