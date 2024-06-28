<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class PaginationTestController extends Controller
{
    public function ShowDefaultDesign(){
        $data=Test::paginate(4);

        return view('paginationdefaultdesign',compact('data'));
    }

    public function designPaginationtemplate(){
        $data=Test::paginate(4);

        return view('pagination',compact('data'));
    }
}
