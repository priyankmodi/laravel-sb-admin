<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ URL::to('/') }}">LARAVEL Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu message-dropdown">
            <li class="message-preview">
                <a href="javascript:;">
                    <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading"><strong>John Smith</strong>
                            </h5>
                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="message-preview">
                <a href="javascript:;">
                    <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading"><strong>John Smith</strong>
                            </h5>
                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="message-preview">
                <a href="javascript:;">
                    <div class="media">
                        <span class="pull-left">
                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                        </span>
                        <div class="media-body">
                            <h5 class="media-heading"><strong>John Smith</strong>
                            </h5>
                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                        </div>
                    </div>
                </a>
            </li>
            <li class="message-footer">
                <a href="javascript:;">Read All New Messages</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
        <ul class="dropdown-menu alert-dropdown">
            <li>
                <a href="javascript:;">Alert Name <span class="label label-default">Alert Badge</span></a>
            </li>
            <li>
                <a href="javascript:;">Alert Name <span class="label label-primary">Alert Badge</span></a>
            </li>
            <li>
                <a href="javascript:;">Alert Name <span class="label label-success">Alert Badge</span></a>
            </li>
            <li>
                <a href="javascript:;">Alert Name <span class="label label-info">Alert Badge</span></a>
            </li>
            <li>
                <a href="javascript:;">Alert Name <span class="label label-warning">Alert Badge</span></a>
            </li>
            <li>
                <a href="javascript:;">Alert Name <span class="label label-danger">Alert Badge</span></a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:;">View All</a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:;"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
            </li>
            <li>
                <a href="javascript:;"><i class="fa fa-fw fa-gear"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{ URL::to('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
    </li>
</ul>