<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ViewController extends Controller
{
    public function login_form(){
        return view('home');
    }

    public function page_summary(){
        return view('pagesummary');
    }
    
    public function add_page(){
        return view('addpage');
    }

    public function category_summary(){
        return view('categorysummary');
    }

    public function add_category(){
        return view('addcategory');
    }

    public function product_summary(){
        return view('productsummary');
    }

    public function add_product(){
        return view('addproduct');
    }
    
    public function change_password(){
        return view('changepassword');
    }
}
