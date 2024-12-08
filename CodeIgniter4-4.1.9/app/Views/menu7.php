 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('home/tabel_user')?>">
              <i class="bi bi-person"></i><span>User</span>
            </a>
          </li>
           <li>
            <a href="<?= base_url('home/tabel_siswa')?>">
              <i class="bi bi-person"></i><span>Siswa</span>
            </a>
            <li>
            <a href="<?= base_url('home/tabel_walikelas')?>">
              <i class="bi bi-person"></i><span>walikelas</span>
            </a>
          </li>
           <li>
            <a href="<?= base_url('home/tabel_bendahara')?>">
              <i class="bi bi-person"></i><span>Bendahara</span>
            </a>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('home/tabel_pemasukan1')?>">
              <i class="bi bi-people-fill"></i><span>Table pemasukan</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('home/tabel_pengeluaran1')?>" class="active">
              <i class="bi bi-person"></i><span>Table pengeluaran</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('home/tabel_uangkas1')?>">
              <i class="bi bi-people-fill"></i><span>Table Uang kas </span>
            </a>
          </li>

        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporanbm">
              <i class="bi bi-circle"></i><span>laporan barang masuk</span>
            </a>
          </li>
          <li>
            <a href="laporanbk">
              <i class="bi bi-circle"></i><span>laporan barang keluar</span>
            </a>
          </li>
          <li>
            <a href="laporanbr">
              <i class="bi bi-circle"></i><span>laporan barang rusak</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="profile1">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->