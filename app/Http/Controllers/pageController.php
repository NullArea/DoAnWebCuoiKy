<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\slide;
use App\xe;

class pageController extends Controller
{
    public function home()
    {
        $slide = slide::all();
        $new = DB::table('xe')->where('soluong','>','8')->take(3)->get();
        return view('pages.home',compact('slide','new'));
    }

    public function products()
    {
        $allproduct = xe::paginate(6);
        return view('pages.products',compact('allproduct'));
    }

    public function detail(Request $re)
    {
        $product = xe::where('stt',$re->stt)->first();
        return view('pages.detail',compact('product'));
    }

    public function allproducts()
    {
        $allproduct = xe::all();
        $num = xe::count();
        $total = DB::table('xe')->sum('soluong');
        return view('pages.allproducts',compact('allproduct','num','total'));
    }
}
