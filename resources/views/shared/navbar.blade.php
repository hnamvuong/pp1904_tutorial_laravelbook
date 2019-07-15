<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Larabook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">{{ trans('blog.home') }}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">{{ trans('blog.about') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blog">{{ trans('blog.blog') }}</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact">{{ trans('blog.contact') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('blog.member') }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::check())
                        @role('manager')
                        <ul>
                        <li class="nav-item"><a href="/admin">Admin</a></li>
                        </ul>
                        @endrole
                        <ul>
                        <li class="nav-item"><a href="/users/logout">Logout</a></li>
                        </ul>
                    @else
                    <ul>
                        <li class="nav-item"><a href="/users/register">{{ trans('blog.register') }}</a></li>
                    </ul>
                    <ul>
                        <li class="nav-item"><a href="/users/login">{{ trans('blog.login') }}</a></li>
                    </ul>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
