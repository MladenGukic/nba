<ul class="nav">
    <li class="nav-item">
    </li>

    @if(Auth::check())
        <a href="#" class="nav-link ml-auto">{{Auth()->user()->name}}</a>
        <a href="/logout" class="nav-link ml-auto">Logout</a>
    @else
        <a href="/login" class="nav-link">Login</a>
    @endif
</ul> 