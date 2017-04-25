<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\League;
use View;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.includes.menu',function($view){
//        $publichedCategories = Category::where('publicationStatus',1)->get();
//        $publichedLeagues = Team::where('publicationStatus',1)->get();
        $publichedLeagues = DB::table('leagues')
                ->where('id','>',1)
                ->where('publicationStatus',1)
                ->orderBy('id','desc')
                ->get();
        $view->with('publichedLeagues',$publichedLeagues);
        });
        View::composer('frontEnd.includes.menu',function($view){
        $publichedLeagues = DB::table('leagues')
                ->where('id','>',1)
                ->where('publicationStatus',1)
                ->orderBy('id','desc')
                ->get();
        $view->with('publichedLeagues',$publichedLeagues);
        $nationalTeams = DB::table('teams')
                ->where('publicationStatus',1)
                ->where('teamType',1)
                ->orderBy('id','desc')
                ->get();
        $view->with('nationalTeams',$nationalTeams);
        });
        View::composer('*',function($view){
            $video = DB::table('videos')
                    ->where('id',1)
                    ->first();
            $view->with('video',$video);

        });
        View::composer('*',function($view){
        $newss = DB::table('news')
                ->take(4)
                ->where('publicationStatus',1)
                ->get();
        $view->with('newss',$newss);
        });
        View::composer('admin.dashboard.dashboard',function($view){
            $newscount = DB::table('news')
                    ->where('publicationStatus',1)
                    ->count();
            $view->with('newscount',$newscount);
            $domesticTeamCount = DB::table('teams')
                    ->where('teamType',0)
                    ->where('publicationStatus',1)
                    ->count();
            $view->with('domesticTeamCount',$domesticTeamCount);
            $internationalTeamCount = DB::table('teams')
                    ->where('teamType',1)
                    ->where('publicationStatus',1)
                    ->count();
            $view->with('internationalTeamCount',$internationalTeamCount);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
