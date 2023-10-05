{{-- Side Bar Menu --}}
<div class="sidebar" data-color="azure" data-background-color="black">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="/dashboard" class="simple-text logo-normal">ADMIN DASHBOARD</a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/posts">
                    <i class="material-icons">content_paste</i>
                    <p>My Post</p>
                </a>
            </li>
        </ul>
        <br>
        @can('admin')
            
        <ul class="nav">
            <li class="nav-item">
                <h5 class="nav-link nav-title">Super Admin</h5>
            </li>
            <li class="nav-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/categories">
                    <i class="material-icons">library_books</i>
                    <p>Post Category</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="material-icons">person</i>
                    <p>Account</p>
                </a>
            </li>
        </ul>
        @endcan
    </div>
</div>