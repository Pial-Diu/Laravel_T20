<div class="navbar-default sidebar" role="navigation">
<style>
                    .buttonkuk {
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
                    .button2kuk {
                    background-color: #008CBA;
                    color: white;
                    border: 2px solid #008CBA;
                }

                .button2kuk:hover {
                    
                    background-color: white; 
                    color: #008CBA; 
}
                    
                </style>
                        <a style="margin-left: 10px;"  href="{{url('/')}}"  target="_blank"><button class="buttonkuk button2kuk"><i class="fa fa-refresh fa-spin fa-1x"></i><strong > Go To Mother Site </strong></button></a>
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/news/add')}}">Add News</a>
                                </li>
                                <li>
                                    <a href="{{url('/news/manage')}}">Manage News</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        @if((Auth::user()->id)<=2)
                        <li>
                            <a href="{{url('/video/edit/1')}}"><i class="fa fa-youtube-play fa-fw"></i> Pinned Video</a>
                        </li>
                        
                        <li>
                            <a href="{{url('/about-us/edit/1')}}"><i class="fa fa-edit fa-fw"></i> About Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Panel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/panel/add')}}">Add Panel Member</a>
                                </li>
                                <li>
                                    <a href="{{url('/panel/manage')}}">Manage Panel Members</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        @endif
                        <li>
                            <a href="#"><i class="fa fa-globe fa-fw"></i> League<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/league/add')}}">Add League</a>
                                </li>
                                <li>
                                    <a href="{{url('/league/manage')}}">Manage League</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{url('/team/add')}}"><i class="fa fa-plus-square fa-fw"></i> Add Team</a>
                        </li>
                       <li>
                            <a href="#"><i class="fa fa-flag fa-fw"></i> Manage Teams<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
<!--                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
-->                             <li>
                                    <a href="{{url('/team/manage/international')}}">International</a>
                                </li>
                                <li>
                                    <a href="#">Domestic<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        @foreach($publichedLeagues as $publichedLeague)
                                        <li>
                                            <a href="{{url('/team/manage/domestic/'.$publichedLeague->id)}}">{{$publichedLeague->leagueName}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                     <!--/.nav-third-level--> 
                                </li>
                            </ul>
                             <!--/.nav-second-level--> 
                        </li><!--
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                             /.nav-second-level 
                        </li>-->
                                                       
                        <!-- <button style="height: 50px;width:100%;background-color: #337AB7;text-align: center;font-size: 20px;color: white;font-family: serif;">
                           <a style="text-decoration: none">Go to Main site</a>
                        </button> -->
                    </ul>
                </div>
                
                <!-- /.sidebar-collapse -->
            </div>