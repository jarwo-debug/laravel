<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="/dashboard" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">
            <img class="h-10 w-100" src="img/logo/betv.png" alt="BETV"></img></a>

    </div>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="/dashboard"
            class="flex items-center {{ Request::is('dashboard') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="/dashboard/posts"
            class="flex items-center {{ Request::is('dashboard/posts') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} text-white  py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Posts
        </a>
        <a href="/dashboard/programs"
            class="flex items-center {{ Request::is('dashboard/programs') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} text-white  py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Programs
        </a>
        @can('isadmin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <a href="/dashboard/categories"
                class="flex items-center {{ Request::is('dashboard/categories') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} text-white  py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Category Posts
            </a>
            <a href="/dashboard/categoryprograms"
                class="flex items-center {{ Request::is('dashboard/categoryprograms') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }} text-white  py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Category Program
            </a>
            <hr class="my-3">
        @endcan
        <a href="#" class="flex items-center  text-white  py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a>
    </nav>

</aside>
