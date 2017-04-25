<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\League;
use DB;

class LeagueController extends Controller
{
    public function createLeague()
    {
        return view('admin.league.createLeague');
    }
    public function storeLeague(Request $request)
    {
        $this->validate($request,[
            'leagueName' => 'required',   
            'leagueOrigin' => 'required',
            'leagueDescription' => 'required',
        ]);
       
        $this->saveLeague($request);
        return redirect('/league/add')->with('message','League Info Saved Successfully !!');
    }
    protected function saveLeague($request)
    {
        $league = new League();
        $league->leagueName = $request->leagueName;
        $league->leagueOrigin = $request->leagueOrigin;
        $league->leagueDescription = $request->leagueDescription;
        $league->publicationStatus = $request->publicationStatus;
        $league->save();
    }
    public function manageLeague()
    {
        $leagues = DB::table('leagues')
                ->orderBy('id','desc')
                ->get();
        return view('admin.league.manageLeague',['leagues'=>$leagues]);
    }
    public function editLeague($id)
    {
        $leagueById = League::where('id',$id)->first();
        return view('admin.league.editLeague',['leagueById'=>$leagueById]);
    }
    public function updateLeague(Request $request)
    {
        $league = League::find($request->id);
        $league->leagueName = $request->leagueName;
        $league->leagueOrigin = $request->leagueOrigin;
        $league->leagueDescription = $request->leagueDescription;
        $league->publicationStatus = $request->publicationStatus;
        $league->save();
        return redirect('/league/manage')->with('message','League Updated Successfully !!');
    }
    public function deleteLeague($id)
    {
        $leagueById = League::find($id);
        $leagueById->delete();
        return redirect('/league/manage')->with('message2','League Deleted Successfully !!');
    }
}
