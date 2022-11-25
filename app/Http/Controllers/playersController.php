<?php

namespace App\Http\Controllers;

use App\Models\myplayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class playersController extends Controller
{
    //
    function saveData(Request $req)
    {

        $data = new myplayer;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->role = $req->role;
        $data->image = $req->file('image')->getClientOriginalName();
        // move uploaded file
        $req->image->move(public_path('images'),$data->image);

        $data->save();
        return redirect("/player");
    }

    function viewData()
    {

        // get data from data
        // return myuser::all();

        $data = myplayer::paginate(5);
        // echo $data; 

        return view("players.view", ["datas" => $data]);
    }

    function viewAllData()
    {
        $all = myplayer::all();
        // echo $all;
        return view("all", ["alldata" => $all]);
    }

    function deleteData($id)
    {
        $data = myplayer::find($id);
        $data->delete();
        return redirect("/player");
    }

    function editData($id)
    {
        // echo $id;
        $data = myplayer::find($id);
        // echo $data;
        return view("players.edit", ["datas" => $data]);
    }

    function update(Request $req)
    {
        $data = myplayer::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->role = $req->role;
        //  $data->image = $req->image;
        
        if($req->file('image')){
            $data->image = $req->file('image')->getClientOriginalName();
            // move uploaded file
            $req->image->move(public_path('images'),$data->image);
    
        }
        

        $data->save();
        // return redirect("/player");
        // return redirect('/player/{id}/edit')->with('flash_message', 'player Addedd!');
    }

    function detail($id)
    {
        $data = myplayer::find($id);
        // echo $data;

        return view("players.detail", ["datas" => $data]);
    }


}
