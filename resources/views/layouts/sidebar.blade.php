<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="{{ Request::is('/') ? ' active' : null }}">
            <a href="{{ URL::to('/') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="{{ Request::is('charts') ? ' active' : null }}">
            <a href="{{ URL::to('/charts') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li class="{{ Request::is('tables') ? ' active' : null }}">
            <a href="{{ URL::to('/tables') }}"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li class="{{ Request::is('forms') ? ' active' : null }}">
            <a href="{{ URL::to('/forms') }}"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li class="{{ Request::is('bootstrap-elements') ? ' active' : null }}">
            <a href="{{ URL::to('/bootstrap-elements') }}"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li class="{{ Request::is('bootstrap-grid') ? ' active' : null }}">
            <a href="{{ URL::to('/bootstrap-grid') }}"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>
        <li class="">
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="javascript:;">Dropdown Item</a>
                </li>
                <li>
                    <a href="javascript:;">Dropdown Item</a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('blank-page') ? ' active' : null }}">
            <a href="{{ URL::to('/blank-page') }}"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
    </ul>
</div>