<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                <a href="/" class="horizontal-logo text-left">
                    <span class="h4 font-weight-bold align-self-center mb-0 ml-auto" style="text-decoration-color: blue">Charroit</span>
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative">
                    <input type="text" class="form-control border-0 rounded bg-search pl-5"
                        placeholder=" Recherche avec motif . . .">
                    <div class="btn-search position-absolute top-0">
                        <a href="#"><i class="h6 icon-magnifier"></i></a>
                    </div>
                    <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown"
                        aria-expanded="false"><i class="icon-close h5"></i>
                    </a>
                </div>
            </form>
            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i
                                class="icon-magnifier h4"></i>
                        </a>
                    </li>
                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
                                class="icon-settings h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <a href="/garage" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6 mb-0"></span> Garages</a>
                            <a href="/section" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6 mb-0"></span> Section</a>
                            <div class="dropdown-divider"></div>
                            <a href="/type" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Type Mobile</a>
                        </ul>
                    </li>
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="{{asset('dist/images/user.png')}}" alt=""
                                    class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Modifier Profile</a>
                            <a href="/user" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> Utilisateurs</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Centre d'aide</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                            <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-settings mr-2 h6 mb-0"></span> Paramètres du compte</a>
                            <div class="dropdown-divider"></div>

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span>
                                Deconnexion

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->
