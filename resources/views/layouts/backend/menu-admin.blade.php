<ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
    <li class="nav-item">
        <a class="nav-link" href="<?= url('/dashboard/admin'); ?>">
            <i class="nav-icon fa fa-dashboard"></i>  <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item has-treeview">
        <a class="nav-link " href="#"><i class="nav-icon fa fa-comment"></i>  <p>Menu 1 <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Menu 1</p></a></li>
            <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Menu 2</p></a></li>
            <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Menu 3 <i class="right fa fa-angle-left"></i> </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Sub Menu 1</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Sub Menu 2</p></a></li>
                </ul>
            </li>
        </ul>
    </li>

    <li class="nav-header">HEADER</li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-database"></i>  <p>Referensi <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Ref Data 1</p></a></li>
            <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Ref Data 2</p></a></li>
        </ul>
    </li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-user"></i>  <p>User <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/user/index?id_user_role=1'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Admin</p></a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= url('/logout'); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="nav-icon fa fa-sign-out"></i>  <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
