<?php

namespace App\Http\Controllers;

use App\Models\myteam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class teamsController extends Controller
{
    //

    function saveData(Request $req)
    {

        $data = new myteam;
        $data->team_name = $req->name;
        $data->team_city = $req->city;
        $data->team_owner = $req->owner;
        
               $data->save();
        return redirect("/team");
    }

    function viewData()
    {

        // get data from data
        // return myuser::all();

        $data = myteam::all();

        return view("teams.view", ["datas" => $data]);

    }

    function viewAllData(){
        $all= myteam::all();
        return view("all", ["alldata" => $all]);
    }

    function deleteData($id)
    {
        $data = myteam::find($id);
        $data->delete();
        return redirect("/team");
    }

    function editData($id)
    {
        $data = myteam::find($id);
        return view("teams.edit", ["datas" => $data]);
    }

    function update(Request $req)
    {
        $data = myteam::find($req->id);
        $data->team_name = $req->name;
        $data->team_city = $req->city;
        $data->team_owner = $req->owner;
        

        $data->save();
        return redirect("/team");

    }

function detail($id){
    $data = myteam::find($id);

    return view("teams.detail", ["datas" => $data]);
}

}
