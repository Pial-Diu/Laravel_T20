<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Panel;
use DB;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.homeContent');
    }
    public function aboutUs()
    {
        $about  = About::where('id',1)->first();
        $panels = Panel::where('publicationStatus',1)->get();
        return view('frontEnd.aboutUs.aboutUs',['about'=>$about,'panels'=>$panels]);
    }
    public function singleNews($title)
    {
        $title = str_replace('_', ' ', $title);
        $news = DB::table('news')
            ->where('newsTitle',$title)
            ->first();
        return view('frontEnd.single.singleNews',['news'=>$news]);
    }
    public function singleCountry($title)
    {
        $title = str_replace('_', ' ', $title);
        $team = DB::table('teams')
            ->where('teamName',$title)
            ->first();
        return view('frontEnd.single.singleCountry',['team'=>$team]);
    }
}
