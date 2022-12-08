<li class="sidebar-title">Menu</li>

<li class="sidebar-item ">
    <a href="/" class='sidebar-link'>
        <i class="bi bi-grid-fill"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="sidebar-item">
    <a class='sidebar-link'>
        <i class="bi bi-diagram-3-fill"></i>
        <span>Distributor</span>
    </a>
</li>

<li class="sidebar-item" style="margin-bottom:5rem;">
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();"
        class='sidebar-link'>
        <i class="bi bi-box-arrow-in-left"></i>
        <span>Logout</span>
    </a>
</li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
