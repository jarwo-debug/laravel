<<<<<<< HEAD
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">BETV BEKEN</h5>
=======
<div
    class="sidebar border border-right col-md-3 col-lg-2 p-0  relative bg-primary-gradient h-screen w-64 hidden sm:block shadow-xl">
    <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel"><img class="img-fluid" src="img/logo/betv.png"
                    alt="BETV"></img></h5>
>>>>>>> 5cdf6db (update)
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}"
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
=======
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                        aria-current="page" href="/dashboard">
                        <span data-feather="home"></span>
>>>>>>> 5cdf6db (update)
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="/dashboard/posts">
                        <i class="bi bi-file-earmark-richtext"></i>
                        My Post </a>
                </li>
=======
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                        aria-current="page" href="/dashboard/posts">
                        <span data-feather="file-text"></span>
                        My Post </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/programs*') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                        aria-current="page" href="/dashboard/programs">
                        <span data-feather="play-circle"></span>
                        Program </a>
                </li>
>>>>>>> 5cdf6db (update)

            </ul>
            @can('isadmin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                            href="/dashboard/categories">
                            <span data-feather="grid"></span>
                            Category
=======
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                            aria-current="page" href="/dashboard/categories">
                            <span data-feather="grid"></span>
                            Category Post
                        </a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/kategoris*') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                            aria-current="page" href="/dashboard/kategoris">
                            <span data-feather="grid"></span>
                            Category Program
>>>>>>> 5cdf6db (update)
                        </a>
                    </li>
                </ul>
            @endcan
            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
<<<<<<< HEAD
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="#">
                        <svg class="bi">
                            <use xlink:href="#gear-wide-connected" />
                        </svg>
                        Settings
                    </a>
                </li>
=======

>>>>>>> 5cdf6db (update)
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
<<<<<<< HEAD
                            class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-right"></i>Logout</button>
=======
                            class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/logout') ? 'active' : 'opacity-75 hover:opacity-100' }}"
                            aria-current="page"><span data-feather="log-out"></span>Logout</button>
>>>>>>> 5cdf6db (update)
                    </form>

                </li>
            </ul>
        </div>
    </div>
</div>
