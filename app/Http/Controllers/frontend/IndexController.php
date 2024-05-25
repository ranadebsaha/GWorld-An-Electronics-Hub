<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Gadget;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        $gadget=Gadget::all();
        $data=compact('gadget');
        return view('frontend\index')->with($data);
    }

    public function company($gadget){
        $company=Company::where('gadget','LIKE',"%$gadget%")->get();
        $data=compact('company','gadget');
        return view('frontend/company')->with($data);
    }
    public function gadget($company,$gadget){
        $company_id=Company::where('name','=',$company)->pluck('company_id');
        $gadget_id=Gadget::where('name','=',$gadget)->pluck('gadget_id');
        $product=Product::where('company_id','=',$company_id)->where('gadget_id','=',$gadget_id)->get();
        $data=compact('product','company','gadget');
        return view('frontend/list')->with($data);
    }
    public function product($company,$gadget,$name){
        $product=Product::where('name','=',$name)->get();
        $data=compact('product');
        return view('frontend/product')->with($data);
    }

    // public function mobile(){
    //     return view('frontend\mobile');
    // }

    // public function laptop(){
    //     return view('frontend\laptop');
    // }

    public function help(){
        return view('frontend\help');
    }

    public function about(){
        return view('frontend\about');
    }
}
