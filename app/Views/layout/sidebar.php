<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url(); ?>/assets/img/brand/blue.png" class="navbar-brand-img" alt="..">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() === '/' ? 'active' : ''; ?>" href="/">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() === 'info' ? 'active' : ''; ?>" href="/info">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Informasi Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() === 'prediction' ? 'active' : ''; ?>" href="/prediction">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">Prediksi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>