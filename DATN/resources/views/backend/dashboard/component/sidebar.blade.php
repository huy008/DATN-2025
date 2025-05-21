
@php
   $segment = request()->segment(1);
@endphp
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="backend/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ strstr(Auth::guard('admin')->user()->email, '@', true) }}</strong>
                         </span> <span class="text-muted text-xs block">{{ Auth::guard('admin')->user()->email }}<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{ route('auth.logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
                <li class="{{ (in_array($segment, ["Quản lý báo cáo"])) ? 'active' : '' }}">
                <a href="{{route('dashboard.index')}}"><i class="fa fa-file"></i> <span class="nav-label">Quản lý báo cáo</span></a>
            </li>
            <li class="{{ (in_array($segment, ["Thống kê hàng tồn kho"])) ? 'active' : '' }}">
                <a href="{{route('dashboard.inventory')}}"><i class="fa fa-file"></i> <span class="nav-label">Thống kê hàng tồn kho</span></a>
            </li>
            @foreach(__('sidebar.module') as $key => $val)
            <li class="{{ (in_array($segment, $val['name'])) ? 'active' : '' }}">
                <a href=""><i class="{{ $val['icon'] }}"></i> <span class="nav-label">{{ $val['title'] }}</span> <span class="fa arrow"></span></a>
                @if(isset($val['subModule']))
                <ul class="nav nav-second-level">
                    @foreach($val['subModule'] as $module)
                    <li><a href="{{ $module['route'] }}">{{ $module['title'] }}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</nav>