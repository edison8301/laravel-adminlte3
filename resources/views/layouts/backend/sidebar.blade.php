<?php

?>
<aside class="main-sidebar sidebar-light-primary elevation-3">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/images/logo-sidebar.png') }}" alt="TOR Bappenas" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Nama Aplikasi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/images/user.jpeg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block" href="#">{{ Auth::user()->username }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php if(Session::isAdmin()) { ?>
                @include('layouts.backend.menu-admin')
            <?php } ?>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
