<aside id="sidebar_left" class="nano affix">
    <!-- Sidebar Left Wrapper  -->
    <div class="sidebar-left-content nano-content">
        <!-- Sidebar Header -->
        <header class="sidebar-header">
            <!-- Sidebar - Logo -->
            <div class="sidebar-widget logo-widget">
                <div class="media">
                    <a class="logo-image" href="{{route('user.index')}}">
                        <!-- <img src="assets/img/logo.png" alt="" class="img-responsive"> -->
                    </a>
                    <div class="">
                        <div>Egmore Connect<span class="text-info"></span></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Sidebar Header -->
        <!-- Sidebar Menu  -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt30">Navigation</li>
            <li>
                {{-- <a href="{{route('dashboard')}}">
                    <span class="sidebar-title">Dashboard</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a> --}}
                <a href="{{route('user.index')}}">
                    <span class="sidebar-title">Users</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('blog.index')}}">
                    <span class="sidebar-title">Blogs</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('banner.index')}}">
                    <span class="sidebar-title">Banners</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('complaint.index')}}">
                    <span class="sidebar-title">Complaints</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('contact.index')}}">
                    <span class="sidebar-title">Contacts</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('calendar.index')}}">
                    <span class="sidebar-title">Calendars</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('events.index')}}">
                    <span class="sidebar-title">Events</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('egmore.index')}}">
                    <span class="sidebar-title">Egmore Data</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('link.index')}}">
                    <span class="sidebar-title">Government Links</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
                <a href="{{route('media-sportlight.index')}}">
                    <span class="sidebar-title">Media Sportlights</span>
                    <span class="sb-menu-icon fa fa-book"></span>
                </a>
            </li>
        </ul>
        <!-- /Sidebar Menu  -->
    </div>
    <!-- /Sidebar Left Wrapper  -->
</aside>