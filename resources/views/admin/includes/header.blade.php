<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                @if(Auth::user()->id>2)
                    <a class="navbar-brand" href="{{url('/dashboard')}}">Cricket Live Admin Panel</a>
                @else
                    <a class="navbar-brand" href="{{url('/dashboard')}}">Cricket Live Super Admin Panel</a>
                @endif
            </div>
            <!-- /.navbarheader -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name}} <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        <!--<p>{{ Auth::user()->name}}</p>-->
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{url('/admin/profile/'.Auth::user()->id)}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        
                        <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            <form id='logout-form' action="{{url('/logout')}}" method="POST" style="display: none;">{{csrf_field()}}</form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            </nav>