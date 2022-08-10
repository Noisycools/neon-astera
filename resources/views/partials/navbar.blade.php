<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Neon Astera</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ $active_in === 'Home' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ $active_in === 'About' ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ $active_in === 'Posts' ? 'active' : '' }}">
                    <a class="nav-link" href="/posts">Posts</a>
                </li>
                <li class="nav-item {{ $active_in === 'Categories' ? 'active' : '' }}">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item {{ $active_in === 'Login' ? 'active' : '' }}">
                    <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
