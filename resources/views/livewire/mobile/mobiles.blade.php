<main>
    <div class="container-fluid site-width">
        <div class="row ">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center"
                        style="background-color: #2ba3b3; ">
                        <h6 class="card-title">Liste Automobile</h6>
                    </div>
                    <div class="card-header  justify-content-between align-items-center">
                        <div class="form-row">

                            <div class="col-7 my-auto">
                                <input class="form-control form-control-sm" id="search"
                                    style="background-color: #f2f4fa; " placeholder=" Recherche par motif "
                                    wire:model="search" />
                            </div>

                            <div class="col-2 my-auto">
                                <select class="form-control form-control-sm" id="filterByOrder"
                                    style="background-color: #f2f4fa; " wire:model="filterByOrder">
                                    <option> Affichage</option>
                                    <option value="A-Z"> A - Z</option>
                                    <option value="Z-A"> Z - A</option>
                                </select>
                            </div>


                            <div class="col-3 my-auto">
                                <a href="/addmobiles" class="btn btn-primary col-12"><i class="icon-plus"></i>
                                    &ensp;&ensp;Enregistrer Mobile</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">

                        <table class="table  mb-0">
                            <thead style="background-color: #9dced4; ">
                                <tr>
                                    <th>ID</th>
                                    <th>IMMATRICULATION</th>
                                    <th>TYPE MOBILE</th>
                                    <th>N?? CHASSIS</th>
                                    <th>DETAILS</th>
                                    <th>Km PARCOURUS</th>
                                    <th>Km RESTANT</th>
                                    <th>Nbre ENTRETIENS</th>
                                    <th>DERNIERE ENTRETIEN</th>
                                    <th>SECTION AFFECTATIION</th>
                                    <th></th>
                                    <th></th>
                                    <th style="cursor:pointer;" wire:click="reload()">
                                        <b class="text text-primary">
                                            <i class="icon-refresh"></i></b>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- class="ng-scope" -->
                                <?php $i=1; $alert=''; ?>
                                @forelse ( $mobiles as $mobile )
                                <td>
                                    <?php echo $i.''.$alert; $i++; ?>
                                </td>
                                <td>{{$mobile->immatriculation}}</td>
                                <td>{{$mobile->typemobile->designation}}</td>
                                <td>{{$mobile->num_chassis}}</td>
                                <td>{{$mobile->marque}} - {{$mobile->couleur}} {{$mobile->anneefabrication}}</td>
                                <td>{{$mobile->kilometrage}} km</td>
                                @if ($mobile->rest_km < 100)
                                    <td class="text-danger">{{$mobile->rest_km}} km</td>
                                @elseif ($mobile->rest_km > 100 && $mobile->rest_km < 800)
                                    <td class="text-warning">{{$mobile->rest_km}} km</td>
                                @else
                                    <td class="text-success">{{$mobile->rest_km}} km</td>
                                @endif
                                <td>{{$mobile->nbre_entretien}} fois</td>
                                <td>{{date('d/m/Y', strtotime($mobile->updated_at))}}</td>
                                <td>{{$mobile->section->designation}}</td>
                                {{-- <td>
                                    <span class="badge outline-badge-warning" data-toggle="tooltip"
                                        data-placement="left" title="Adresse : {{$mobile->adresse}}"
                                        style="cursor:pointer;">
                                        <i class="fas fa-info"></i>
                                    </span>
                                </td> --}}
                                <td>
                                    <a href="/modifymobile/{{$mobile->id}}" class="badge outline-badge-primary"
                                        data-toggle="tooltip" data-placement="top" title="Modifier mobile"
                                        style="cursor:pointer;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    <span class="badge outline-badge-danger" wire:click="alertsupr({{$mobile->id}})"
                                        data-toggle="tooltip" data-placement="top" title="Supprimer mobile"
                                        style="cursor:pointer;">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="alert alert-danger">
                                        <center> ... Liste vide ....</center>
                                    </td>
                                </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>



                    @if (!is_null($iddelete))
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <strong style="font-size: 14px; ">Message de confirmation !</strong> <br />
                        Voulez vous vraiment supprimer cette Information ?&emsp;&ensp;
                        <a class="btn btn-outline-primary" wire:click="deleteavocat()">
                            <span onMouseOver="this.style.color='white'" onMouseOut="this.style.color='black'">Confirmer
                                suppression
                            </span>
                        </a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="color: black; "><i class="icon-close"></i></span>
                        </button>
                    </div>
                    @endif



                    @if( count($mobiles) > 0 )
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3 text-center">
                            {{ $mobiles->links('vendor.livewire.bootstrap') }}
                        </div>
                        <div class="col-sm-6 text-center">
                            Affichage de <span style="color:#151e52; ">{{$mobiles->firstItem()}}</span>
                            ?? <b style="color:#7781a6; ">{{$mobiles->lastItem()}}</b> sur
                            <b style="color:#7781a6; ">{{$mobiles->currentPage()}}</b></span>
                            (<b style="color:#7781a6; ">{{$mobiles->lastPage()}}</b> {{ Str::plural('page',
                            $mobiles->count()) }})&ensp;&ensp;
                        </div>
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</main>
