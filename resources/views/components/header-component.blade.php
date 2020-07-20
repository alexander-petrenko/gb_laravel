<header class="fixed-top">
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link @yield('home_active')" href="/">Home</a>
        <a class="nav-item nav-link @yield('news_active')" href="/news">News</a>
        <a class="nav-item nav-link @yield('categories_active')" href="/categories">Categories</a>
        <a class="nav-item nav-link @yield('create_active')" href="/news/create">Create news</a>
        <a class="nav-item nav-link @yield('about_active')" href="/about_us">About us</a>
        <a class="nav-item nav-link @yield('comment_active')" href="/user/comment">Rate us</a>
        <a class="nav-item nav-link @yield('feedback_active')" href="/user/feedback">Feedback</a>
        <a class="nav-item nav-link @yield('request_active')" href="/user/request">Order</a>
        <a class="nav-item nav-link @yield('requests_active')" href="/user/requests">Requests</a>
        @if(Auth::check())
            <a class="nav-item nav-link @yield('login_active')" href="{{ route('account') }}">Account</a>
            <a class="nav-item nav-link @yield('login_active')" href="{{ route('logout') }}">Log out</a>
        @else
            <a class="nav-item nav-link @yield('login_active')" href="{{ route('login') }}">Log in</a>
            <a class="nav-item nav-link @yield('login_active')" href="{{ route('register') }}">Register</a>
        @endif
    </nav>
</header>