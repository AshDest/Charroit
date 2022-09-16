<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Tableau de bord</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                        <li class="breadcrumb-item active">Tableau de bord</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mt-3">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="media-body align-self-center ">
                                    <span class="mb-0 h5 font-w-600">Dashboard</span><br>
                                    <p class="mb-0 font-w-500 tx-s-12"></p>
                                </div>
                                <div class="ml-auto border-0 outline-badge-success circle-50"><span
                                        class="h5 mb-0"></span></div>
                            </div>
                            <div class="d-flex mt-4">
                                <div class="border-0 outline-badge-info w-50 p-3 rounded text-center"><span
                                        class="h5 mb-0">Automobiles</span><br />
                                    {{$mobiless}}
                                </div>
                                <div class="border-0 outline-badge-success w-50 p-3 rounded ml-2 text-center"><span
                                        class="h5 mb-0">Sections</span><br />
                                    {{$sections}}
                                </div>
                                <div class="border-0 outline-badge-primary w-50 p-3 rounded ml-2 text-center"><span
                                        class="h5 mb-0">Entretiens</span><br />
                                    {{$entretiens}}
                                </div>
                                <div class="border-0 outline-badge-warning w-50 p-3 rounded ml-2 text-center"><span
                                        class="h5 mb-0">Garages</span><br />
                                    {{$garages}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-3">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title">Automobiles Par Km</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0">
                            <ul class="list-group list-unstyled">
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author1.jpg') }}" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">Jonathan</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>
                                        <div class="ml-auto my-auto">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author2.jpg') }}" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">kelvin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>
                                        <div class="ml-auto my-auto">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author3.jpg') }}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">Peter</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>
                                        <div class="ml-auto my-auto">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author9.jpg') }}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">Ray Sin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>
                                        <div class="ml-auto my-auto">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 border-bottom zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author6.jpg') }}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">Abexon Dixon</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>

                                        <div class="ml-auto mail-tools">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-2 zoom">
                                    <div class="media d-flex w-100">
                                        <a href="#"><img src="{{ asset('dist/images/author7.jpg') }}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                        <div class="media-body align-self-center pl-2">
                                            <span class="mb-0 font-w-600">Nathan S. Johnson</span><br/>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>
                                        </div>

                                        <div class="ml-auto mail-tools">
                                            <a href="#"  data-toggle="dropdown">
                                                <i class="icon-options icons h6 font-weight-bold"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                <a href="" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                    <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h6 class="card-title">LISTE DES VEHICULES</h6>
                    </div>
                    <div class="card-body table-responsive p-0">

                        <table class="table font-w-600 mb-0">
                            <thead>
                                <tr>
                                    <th>Automobile</th>
                                    <th>Km Actuelle</th>
                                    <th>Km Restant</th>
                                    <th>Intervalle d'Entretien (km)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="zoom">
                                    @forelse ($mobiles as $mobile)
                                        <td>{{$mobile->immatriculation}}-{{$mobile->marque}}-{{$mobile->couleur}}</td>
                                        <td class="text-success">{{$mobile->kilometrage}}<i class="ion ion-arrow-graph-up-right"></i>km</td>
                                        @if ($mobile->rest_km < 100)
                                            <td class="text-danger">{{$mobile->rest_km}}<i class="ion ion-arrow-graph-down-right">km</i></td>
                                        @elseif ($mobile->rest_km > 100 && $mobile->rest_km < 800)
                                            <td class="text-warning">{{$mobile->rest_km}}<i class="ion ion-arrow-graph-down-right">km</i></td>
                                        @else
                                            <td class="text-success">{{$mobile->rest_km}}<i class="ion ion-arrow-graph-down-right">km</i></td>
                                        @endif
                                        <td class="text-info">{{$mobile->intervalle}} km</td>
                                    @empty

                                    @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->
