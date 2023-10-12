<?php

namespace App\Http\Controllers;

use App\Models\Addpage;
use App\Models\Login;
use App\Models\Addcategory;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function add_page_data(Request $request){
        $add = new Addpage;
        if($request->isMethod('post'))
        {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            $add->status = $request->has('status')? 1 : 0;
            $add->save();
        }
        return redirect('add-page');
    }

    public function delete_data($id){
        $ob = Addpage::find($id);
        $ob->delete();
        return redirect('page-summary');
    }

    public function edit_display( $id){
        $findrow = Addpage::where('id',$id)->get();
        return view('addpage', compact('findrow'));
    }

    public function edit_data(Request $request ,$id=''){
        $add = Addpage::find($id);
        if($request->isMethod('post'))
        {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            $add->status = $request->has('status') ? 1 : 0;
            $add->save();
        }
        return redirect('page-summary');
    }

    public function search(Request $request){
        if($request->isMethod('post'))
        {
            $name = $request->get('sname');
            $data = Addpage::where('name', 'LIKE',  '%'. $name .'%')->paginate(2);
        }
        return view('pagesummary', compact('data'));

    }



    // *********** add category function start here ***********************

    public function add_category_data(Request $request){
        $add = new Addcategory;
        if($request->isMethod('post'))
        {
            $add->categoryname = $request->get('catname');
            $add->save();
        }
        return redirect('add-category');
    }

    public function category_delete_data($id){
        $ob = Addcategory::find($id);
        $ob->delete();
        return redirect('category-summary');
    }

    public function category_edit_display($id){
        $findrow = Addcategory::where('id',$id)->get();
        return view('addcategory', compact('findrow'));
    }

    public function category_edit_data(Request $request ,$id=''){
        $add = Addcategory::find($id);
        if($request->isMethod('post'))
        {
            $add->categoryname = $request->get('catname');
            $add->save();
        }
        return redirect('category-summary');
    }

    public function search_category(Request $request){
        if($request->isMethod('post'))
        {
            $name = $request->get('sname');
            $data = Addcategory::where('categoryname', 'LIKE',  '%'. $name .'%')->paginate(2);
        }
        return view('categorysummary', compact('data'));

    }


    // change password here  
    public function change_password(Request $request){
        // $data = new Login;
        if($request->isMethod('post'))
        {
            $oldpw = $request->get('oldpass');
            $newpw = $request->get('newpass');
            $cnewp = $request->get('cnewpass');
            // $data = Login::where('password',$oldpw)->first();
            // $data->password = $newpw;
            // $data->save();
            // echo $data;
            if($newpw == $cnewp){
                $data = Login::where('password',$oldpw)->first();
                if(isset($data))
                {
                    $data->password = $newpw;
                    $data->save();
                    return redirect('/password')->with("success","Password Updated Successfully");
                }
                else
                {
                    return redirect('/password')->with("error","Old Password not match");
                }
                
            }
            else
            {
                return redirect('/password')->with( "error","New password and Confirm new password does not match");
            }    
                
        }
    }

}
