<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="{{Request::path() == '/' ? 'active' : ''}}"><a href="{{ route('index') }}">Home</a></li>
            <li class="{{Request::path() == 'services' ? 'active' : ''}}"><a href="{{ route('services.index') }}">Services</a></li>
            <li class="{{Request::path() == 'blog' ? 'active' : ''}}"><a href="{{ route('blog.index') }}">Blog</a></li>
            <li class="{{Request::path() == 'contact' ? 'active' : ''}}"><a href="{{ route('contact.index') }}">Contact</a></li>
            {{-- <li class="{{Request::path() == 'elements' ? 'active' : ''}}"><a href="elements.html">Elements</a></li> --}}
        </ul>
    </nav>
</header>
<!-- Header section end -->
