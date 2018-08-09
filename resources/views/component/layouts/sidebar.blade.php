<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
                </a>
            </div>
            <div class="col-xs-6 no-padding">
                <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
                </a>
            </div>
            <div class="col-xs-6 m-t-20 no-padding">
                <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
            <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
            </button>
            <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 ">
                <a href="{{route('home')}}" class="detailed">
                    <span class="title">Dashboard</span>
                    <span class="details">Additional Text</span>
                </a>
                <span class="@if (url()->current() == route('home'))bg-success @endif icon-thumbnail"><i class="pg-home"></i></span>
            </li>
            <li class="">
                <a href="{{route('employee.index')}}"><span class="title">Employee</span></a>
                <span class="@if (url()->current() == route('employee.index'))bg-success @endif icon-thumbnail"><i class="fa fa-user"></i></span>
            </li>
            <li class="@if (url()->current() == route('car-brand.index') || url()->current() == route('car.index'))open active @endif">
                <a href="javascript:;"><span class="title">Asset</span><span class="@if (url()->current() == route('car-brand.index') || url()->current() == route('car.index'))open @endif arrow"></span></a>
                <span class="icon-thumbnail"><i class="fa fa-inbox"></i></span>
                <ul class="sub-menu">
                    <li class="">
                        <a href="{{route('car-brand.index')}}"><span class="title">Car Brand</span></a>
                        <span class="@if (url()->current() == route('car-brand.index'))bg-success @endif icon-thumbnail"><i class="pg-social"></i></span>
                    </li>
                    <li class="">
                        <a href="{{route('car.index')}}"><span class="title">Car</span></a>
                        <span class="@if (url()->current() == route('car.index'))bg-success @endif icon-thumbnail"><i class="fa fa-car"></i></span>
                    </li>
                </ul>
            </li> 
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>