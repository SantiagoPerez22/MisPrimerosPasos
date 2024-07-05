<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img src="{{asset('images/logo.svg')}}" class="avatar img-fluid rounded" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-end">
<!--                    <a href="#" class="dropdown-item">Profile</a>-->
<!--                    <a href="#" class="dropdown-item">Setting</a>-->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
