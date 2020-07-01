<header class="fixed-top">
    <nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link @yield('home_active')" href="/">Home</a>
        <a class="nav-item nav-link @yield('news_active')" href="/news">News</a>
        <a class="nav-item nav-link @yield('categories_active')" href="/categories">Categories</a>
        <a class="nav-item nav-link @yield('create_active')" href="/news/create">Create news</a>
        <a class="nav-item nav-link @yield('about_active')" href="/about_us">About us</a>
        <a class="nav-item nav-link @yield('login_active')" href="/user/login">Log in</a>
    </nav>
</header>