@extends('admin.master')

@section('title')
    Admin Dashboard
@endsection

@section('mainContent')
<div id="page-wrapper">
            <div class="row">
             
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$newscount}}</div>
                                    <div>Published News!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/news/manage')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$domesticTeamCount}}</div>
                                    <div>Domestic Teams!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$internationalTeamCount}}</div>
                                    <div>International Teams!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/team/manage/international')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><hr>
             <h4 class="text-center text-success">{{Session::get('message')}}</h4>
            <style>
            .buttonkuks{
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    -webkit-transition-duration: 0.4s; /* Safari */
                    transition-duration: 0.4s;
                    cursor: pointer;
                }
                .button1kuk {
                    background-color: white; 
                    color: green; 
                    border: 2px solid #4CAF50;
                }

                .button1kuk:hover {
                    
                    background-color: #4CAF50;
                    color: white;       
                }
                .button3kuk {
                    background-color: white; 
                    color: #F0AD4E; 
                    border: 2px solid #F0AD4E;
                }

                .button3kuk:hover {
                    
                    background-color: #F0AD4E;
                    color: white;       
}
                    
                </style>
                @if(Auth::user()->id<3)
                        <a  href="{{url('/admin/register')}}"><button class="buttonkuks button1kuk"><i class="fa fa-user-plus fa-1x"></i><strong > Create New Admin </strong></button></a>
                        <a  href="{{url('/admin/manage')}}" ><button class="buttonkuks button3kuk"><i class="fa fa-cogs fa-1x"></i><strong > Manage Admins </strong></button></a>
                        <hr>
                @endif
 @endsection