<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Requests;
use App\Lab;
use App\Lab_Component;
use DB;
use Auth; 

class LabController extends Controller
{
    public function create()
    {
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            return view('labas.create');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function history()
    {
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            $values = DB::select("select item_name,item_count from requests where id=14");
            return view('labas.history')->with('values',$values);
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function store(Request $request)
    {
        if(auth()->check() && auth()->user()->is_lab_ass()) {
            $this->validate($request,[
                'item_name' => 'required',
                'item_count'  => 'required',
            ]);
            $requests =  new Requests;
            $requests->item_name = $request['item_name'];
            $requests->item_count = $request['item_count'];
            $requests->id = Auth::user()->id;
            $requests->request_type = 0;
            $requests->status_id = 1;
            $requests->save();
            return redirect('/lab_as');
        }
        else{
            return redirect()->route('wel');
        }
    }

    public function labcomp()
    {
        
    }

}
