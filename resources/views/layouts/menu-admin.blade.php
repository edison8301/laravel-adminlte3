<ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
    <li class="nav-item">
        <a class="nav-link" href="<?= url('/dashboard/index'); ?>">
            <i class="nav-icon fa fa-dashboard"></i>  <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item has-treeview">
        <a class="nav-link " href="#"><i class="nav-icon fa fa-comment"></i>  <p>e-Usulan <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-program'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Per Program</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-unit-i'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Per UKE I</p></a></li>
            <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Per Tema <i class="right fa fa-angle-left"></i> </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/kajian'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Kajian</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/modeling'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Model/Inovasi</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/policy-paper'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Policy Paper</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/rkp'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>RKP</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/monev'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Monev</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/percepatan'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Percepatan</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tema/phln'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>PHLN</p></a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item has-treeview">
        <a class="nav-link " href="#"><i class="nav-icon fa fa-file-archive"></i>  <p>e-TOR <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-program'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Per Program</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-unit-i'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Per UKE I</p></a></li>
            <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-circle-o"></i>  <p>Per Tema <i class="right fa fa-angle-left"></i> </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/kajian'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Kajian</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/modeling'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Model/Inovasi</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/policy-paper'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Policy Paper</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/rkp'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>RKP</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/monev'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Monev</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/percepatan'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Percepatan</p></a></li>
                    <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/rekap-tor-tema/phln'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>PHLN</p></a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-file-alt"></i>  <p>e-RAB <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-komponen/index-rab'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Daftar RAB</p></a></li>
            <li class="nav-item">
                <a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/belanja-operasional'); ?>">
                    <i class="nav-icon fa fa-circle-o"></i> <p>Belanja Operasional</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/belanja-non-operasional'); ?>">
                    <i class="nav-icon fa fa-circle-o"></i> <p>Belanja Non Operasional</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a class="nav-link " href="#">
                    <i class="nav-icon fa fa-circle-o"></i> <p>Jenis Belanja <i class="right fa fa-angle-left"></i> </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/belanja-pegawai'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Belanja Pegawai (51)</p></a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/belanja-barang'); ?>">
                            <i class="nav-icon fa fa-circle-o"></i>  <p>Belanja Barang (52) <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/perjalanan-dinas'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Perjalanan Dinas</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/perjalanan-dinas-luar-negeri'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Perjalanan Dinas Luar Negeri</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/konsinyiring'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Konsinyiring</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/konsultan'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Konsultan</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/jasa-lainnya'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Jasa Lainnya</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/narasumber-moderator'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Narasumber/Moderator</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/sewa'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Sewa</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/honorarium'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Honorarium</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/bahan'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Bahan</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/persediaan'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Persediaan</p></a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link " href="#">
                            <i class="nav-icon fa fa-circle-o"></i>  <p>Belanja Modal (53) <i class="right fa fa-angle-left"></i> </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/alat-pengolah-data'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Alat Pengolah Data</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/fasilitas-kerja'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Fasilitas Kerja</p></a></li>
                            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-akun/rekap-unit-i/konstruksi'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Konstruksi</p></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link " href="<?= url('/program/index'); ?>"><i class="nav-icon fa fa-edit"></i>  <p>e-Revisi</p></a></li>
    <li class="nav-header">DATA MASTER</li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-database"></i>  <p>Referensi <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-program/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Program</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-kegiatan/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Kegiatan</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-output/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Output</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-suboutput/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Sub Output</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-akun/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Akun</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/ref-akun-jenis/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Jenis Akun</p></a></li>
        </ul>
    </li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-university"></i>  <p>Unit <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/unit/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Daftar Unit</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-kegiatan/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Kegiatan Unit</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/usulan-output/index'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Output Unit</p></a></li>
        </ul>
    </li>
    <li class="nav-item has-treeview"><a class="nav-link " href="#"><i class="nav-icon fa fa-user"></i>  <p>User <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <li class="nav-item"><a class="nav-link " href="<?= url('/user/index?id_user_role=1'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Admin</p></a></li>
            <li class="nav-item"><a class="nav-link " href="<?= url('/user/index?id_user_role=2'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Unit</p></a></li>
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
