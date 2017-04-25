<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\League;
use App\Team;
use DB;

class TeamController extends Controller
{
    public function createTeam()
    {
        $leagues = League::where('publicationStatus',1)->get();
        return view('admin.team.createTeam',['leagues'=>$leagues]);
    }
    public function storeTeam(Request $request)
    {
        $this->validate($request,[
            'teamType' => 'required',
            'teamLeague' => 'required',
            'teamName' => 'required',
            'teamDescription' => 'required',
            'teamStat' => 'required',
            'teamImage' => 'required',
        ]);
        $teamImage = $request->file('teamImage');
        $imageName = $teamImage->getClientOriginalName();
        $uploadPath = 'public/teamImage/';
        $teamImage->move($uploadPath, $imageName);
        $imageUrl = $uploadPath.$imageName;
        $this->saveTeam($request,$imageUrl);
        return redirect('/team/add')->with('message','Team Info Saved Successfully !!');
    }
    protected function saveTeam($request,$imageUrl)
    {
        $team = new Team();
        $team->teamType = $request->teamType;
        $team->teamLeague = $request->teamLeague;
        $team->teamName = $request->teamName;
        $team->teamDescription = $request->teamDescription;
        $team->teamStat = $request->teamStat;
        $team->teamImage = $imageUrl;
        $team->publicationStatus = $request->publicationStatus;
        $team->save();
    }
    public function manageInternationalTeam()
    {
        $teams = DB::table('teams')
                ->where('teamType',1)
                ->orderBy('id','desc')
                ->get();
        return view('admin.team.manageInternationalTeam',['teams'=>$teams]);
    }
    public function viewInternationalTeam($id)
    {
        $team = DB::table('teams')
                ->where('teams.id',$id)
                ->where('teams.teamType',1)
                ->first();
        return view('admin.team.viewInternationalTeam',['team'=>$team]);
    }
    public function editInternationalTeam($id)
    {
        $teamById = Team::where('id',$id)->first();
        return view('admin.team.editInternationalTeam',['teamById'=>$teamById]);
    }
    public function updateTeam(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $team = Team::find($request->id);
        $team->teamType = $request->teamType;
        $team->teamLeague = $request->teamLeague;
        $team->teamName = $request->teamName;
        $team->teamDescription = $request->teamDescription;
        $team->teamStat = $request->teamStat;
        $team->teamImage = $imageUrl;
        $team->publicationStatus = $request->publicationStatus;
        $team->save();
        return redirect('/team/manage/international')->with('message','Team Updated Successfully !!');
    }
    private function imageExistStatus($request)
    {
        $teamById = Team::where('id',$request->id)->first();
        $teamImage = $request->file('teamImage');
        if($teamImage)
        {
            $oldImageUrl = $teamById->teamImage;
            unlink($oldImageUrl);
            $imageName = $teamImage->getClientOriginalName();
            $uploadPath = 'public/teamImage/';
            $teamImage->move($uploadPath, $imageName);
            $imageUrl = $uploadPath.$imageName;
        }
        else
        {
            $imageUrl = $teamById->teamImage;
        }
        return $imageUrl;
    }
    public function deleteTeam($id)
    {
        $teamById = Team::find($id);
        $teamImage = $teamById->teamImage;
        unlink($teamImage);
        $teamById->delete();
        return redirect('/team/manage/international')->with('message2','Team Deleted Successfully !!');
    }
    public function manageDomesticTeam($id)
    {
        $league = DB::table('leagues')
                ->where('id',$id)
                ->first();
                
        $teams = DB::table('teams')
                ->where('teamType',0)
                ->where('teamLeague',$league->leagueName)
                ->orderBy('id','desc')
                ->get();
        return view('admin.team.manageDomesticTeam',['teams'=>$teams,'league'=>$league]);
    }
    public function viewDomesticTeam($id)
    {
        $team = DB::table('teams')
                ->where('teams.id',$id)
                ->first();
        return view('admin.team.viewDomesticTeam',['team'=>$team]);
    }
    public function editDomesticTeam($id)
    {
        $teamById = Team::where('id',$id)->first();
        return view('admin.team.editDomesticTeam',['teamById'=>$teamById]);
    }
    public function updateDomesticTeam(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $team = Team::find($request->id);
        $team->teamType = $request->teamType;
        $team->teamLeague = $request->teamLeague;
        $team->teamName = $request->teamName;
        $team->teamDescription = $request->teamDescription;
        $team->teamStat = $request->teamStat;
        $team->teamImage = $imageUrl;
        $team->publicationStatus = $request->publicationStatus;
        $team->save();
        $league = DB::table('leagues')
                ->where('leagues.leagueName',$team->teamLeague)
                ->first();
        return redirect('/team/manage/domestic/'.$league->id)->with('message','Team Updated Successfully !!');
    }
    public function deleteDomesticTeam($id)
    {
        $teamById = Team::find($id);
        $league = DB::table('leagues')
                ->where('leagues.leagueName',$teamById->teamLeague)
                ->first();
        $teamImage = $teamById->teamImage;
        unlink($teamImage);
        $teamById->delete();
        
        return redirect('/team/manage/domestic/'.$league->id)->with('message2','Team Deleted Successfully !!');
    }
}
