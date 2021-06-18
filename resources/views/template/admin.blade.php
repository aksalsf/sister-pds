<div class="d-flex justify-content-around bg-primary p-3">
    <div class="d-flex flex-column flex-shrink-0 bg-light vh-100 rounded shadow" style="width: 4.5rem;">
        <a href="{{ url('/') }}" class="d-flex justify-content-center p-3 link-dark text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
            <img src="{{ asset('favicon-32x32.png') }}">
            <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link py-3 border-bottom {{ request() -> is('/') ? 'active' : '' }}" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <i class="bi bi-house fs-4"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/siswa') }}" class="nav-link py-3 border-bottom {{ request() -> is('siswa') ? 'active' : '' }}" title="Siswa" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Siswa">
                    <i class="bi bi-person fs-4"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/wali/putra') }}" class="nav-link py-3 border-bottom {{ request() -> is('wali/putra') ? 'active' : '' }}" title="Wali Putra" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Wali Putra">
                    <i class="bi bi-sun fs-4"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/wali/putri') }}" class="nav-link py-3 border-bottom {{ request() -> is('wali/putri') ? 'active' : '' }}" title="Wali Putri" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Wali Putri">
                    <i class="bi bi-moon fs-4"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/prestasi') }}" class="nav-link py-3 border-bottom {{ request() -> is('prestasi') ? 'active' : '' }}" title="Prestasi" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Prestasi">
                    <i class="bi bi-trophy fs-4"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link py-3 border-bottom {{ request() -> is('/logout') ? 'active' : '' }}" title="Logout" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Logout">
                    <i class="bi bi-power fs-4"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-11">
        @yield('content-admin')
    </div>
</div>