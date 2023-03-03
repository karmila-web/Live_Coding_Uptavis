            <div class="preloader flex-column justify-content-center align-items-center">
                <img
                    class="animation__shake"
                    src="{{ asset('template/adminlte') }}/dist/img/AdminLTELogo.png"
                    alt="AdminLTELogo"
                    height="60"
                    width="60"
                />
            </div>

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img
                        src="{{ asset('template/adminlte/dist/img/AdminLTELogo.png') }}"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: 0.8"
                    />
                    <span class="brand-text font-weight-light">Klasemen Sepak Bola</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img
                                src="{{ asset('template/adminlte/dist/img/avatar5.png') }}"
                                class="img-circle elevation-2"
                                alt="User Image"
                            />
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul
                            class="nav nav-pills nav-sidebar flex-column"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false"
                        >

                            <li class="nav-item">
                                <a id="dashboard" href="{{ url('/home') }}" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="tampilan_klasemen" 
                                    href="{{ url('/tampilan-klasemen') }}"
                                    class="nav-link"
                                >
                                <i class="nav-icon fas fa-money-check"></i>
                                <p>Tampilan Klasemen</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="menu_inputdataclub" 
                                    href="/tampilan-klasemen/create"
                                    class="nav-link"
                                >
                                <i class="nav-icon fas fa-money-check"></i> 
                                <p>Input Data Club</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="menu_inputskor" 
                                    href="{{ url('/menu-inputskor/create') }}"
                                    class="nav-link"
                                >
                                <i class="nav-icon fas fa-money-check"></i> 
                                <p>Input Skor Pertandingan</p>
                                </a>
                            </li>
                           
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            