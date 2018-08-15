<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-header"></div>
    <div class="sidebar-menu">
        <ul class="menu-items">
            <li class="m-t-30 ">
                <a href="{{route('home')}}" class="detailed">
                    <span class="title">Home</span>
                    <span class="details">General Information</span>
                </a>
                <span class="@if (url()->current() == route('home'))bg-success @endif icon-thumbnail"><i class="pg-home"></i></span>
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
            <li>
                <a href="{{route('client.index')}}"><span class="title">Client</span></a>
                <span class="@if (url()->current() == route('client.index'))bg-success @endif icon-thumbnail"><i class="fa fa-user"></i></span>
            </li>
            <li>
                <a href="{{route('booking.index')}}"><span class="title">Booking</span></a>
                <span class="@if (url()->current() == route('booking.index'))bg-success @endif icon-thumbnail"><i class="fa fa-book"></i></span>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>