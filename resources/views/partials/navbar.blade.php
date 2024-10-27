<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">jandi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'about' ? 'active' : '' }}" href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'posts' ? 'active' : '' }}" href="/posts">posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
