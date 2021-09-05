<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ MenuActive('dashboard', 2) }}">
                <a href="{{ url('/dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            @hasanyrole('admin|manager|writer')
            <li class="dropdown {{ MenuActive('blog', 2) }}">
                <a href="{{ route('admin.blog.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Blog</span></a>
            </li>
            @endhasanyrole

            <li class="dropdown {{ MenuActive('library', 2) }}">
                <a href="{{ route('admin.library.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Libaray Setting</span></a>
            </li>

            <li class="dropdown {{ MenuActive('book', 2) }}">
                <a href="{{ route('admin.book.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Book</span></a>
            </li>

            <li class="dropdown {{ MenuActive('order', 2) }}">
                <a href="{{ route('admin.order.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Orders</span></a>
            </li>

            <li class="dropdown {{ MenuActive('category', 2) }}">
                <a href="{{ route('admin.category.index') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Category</span></a>
            </li>


            <li class="dropdown {{ MenuActive('settings', 1) }}">
                <a href="{{ url('/settings') }}" class="nav-link"><i
                        data-feather="briefcase"></i><span>settings</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Apps</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">Chat</a></li>
                    <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
