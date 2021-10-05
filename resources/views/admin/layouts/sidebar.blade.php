<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand mb-4">
            <a href="index.html"> <img style="
                width: 100px;
                height: 70px;
                margin-top: 12px;
            " alt="image" src="{{url('/')}}/assets/images/log.png" class="header-logo" />
            </a>
        </div>


        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ MenuActive('dashboard', 2) }}">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            @hasanyrole('admin|manager|writer')
            <li class="dropdown {{ MenuActive('blog', 2) }}">
                <a href="{{ route('admin.blog.index') }}" class="nav-link"><i
                        data-feather="feather"></i><span>Blog</span></a>
            </li>
            @endhasanyrole

            @hasanyrole('admin|librarian')
            <li class="dropdown {{ MenuActive('library', 2) }}">
                <a href="{{ route('admin.library.index') }}" class="nav-link"><i
                        data-feather="book-open"></i><span>Libaray Setting</span></a>
            </li>

            <li class="dropdown {{ MenuActive('book', 2) }}">
                <a href="{{ route('admin.book.index') }}" class="nav-link"><i
                        data-feather="book"></i><span>Book</span></a>
            </li>

            <li class="dropdown {{ MenuActive('order', 2) }}">
                <a href="{{ route('admin.order.index') }}" class="nav-link"><i
                        data-feather="shopping-bag"></i><span>Orders</span></a>
            </li>


            <li class="dropdown {{ MenuActive('order-reprot', 2) }}">
                <a href="{{ route('admin.order-report.index') }}" class="nav-link"><i
                        data-feather="bar-chart-2"></i><span>Order Report</span></a>
            </li>
            @endhasanyrole

            @hasanyrole('admin|manager')
            <li class="dropdown {{ MenuActive('pdf', 2) }}">
                <a href="{{ route('admin.pdf.index') }}" class="nav-link"><i
                        data-feather="file-text"></i><span>PDF File</span></a>
            </li>
            @endhasanyrole

            @hasanyrole('admin')
            <li class="dropdown {{ MenuActive('pdf', 2) }}">
                <a href="{{ route('admin.library-payment.index') }}" class="nav-link"><i
                        data-feather="dollar-sign"></i><span>Library Payments</span></a>
            </li>
            @endhasanyrole

            @hasanyrole('admin')
            <li class="dropdown {{ MenuActive('category', 2) }}">
                <a href="{{ route('admin.category.index') }}" class="nav-link"><i
                        data-feather="list"></i><span>Category</span></a>
            </li>
            @endhasanyrole

            @hasanyrole('admin')
            <li class="dropdown {{ MenuActive('settings', 2) }}">
                <a href="{{ route('admin.settings.index') }}" class="nav-link"><i
                        data-feather="settings"></i><span>settings</span></a>
            </li>
            @endhasanyrole
            @hasanyrole('admin')
            <li class="dropdown {{ MenuActive('rating', 2) }}">
                <a href="{{ route('admin.rating.index') }}" class="nav-link"><i
                        data-feather="settings"></i><span>Ratings</span></a>
            </li>
            @endhasanyrole
            {{-- <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Apps</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="chat.html">Chat</a></li>
                    <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                </ul>
            </li> --}}

        </ul>
    </aside>
</div>
