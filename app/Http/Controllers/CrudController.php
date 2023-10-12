<?php

namespace App\Http\Controllers;

use App\Models\Addpage;
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

    public function page_data_display(Request $request){
        $data = Addpage::paginate(2) ;
        return view('pagesummary', compact('data'));
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
            $add->status = $request->has('status')? 1 : 0;
            $add->save();
        }
        return redirect('page-summary');
    }


}
