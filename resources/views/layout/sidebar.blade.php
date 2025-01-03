<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; min-height: 100vh;">
    <ul class="nav nav-pills flex-column mb-auto">
        @include('layout.nav-item', [
            'url' => '/',
            'name' => 'Home',
            'activePath' => '/',
        ])
        @include('layout.nav-item', [
            'url' => '/students',
            'name' => 'Students',
            'activePath' => 'students*',
        ])
        @include('layout.nav-item', [
            'url' => '/users',
            'name' => 'Users',
            'activePath' => 'users*',
        ])
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle "
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1"
            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -34px, 0px);"
            data-popper-placement="top-start">
            <li>
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Sign out</button>
                </form>
            </li>
        </ul>
    </div>
</div>
