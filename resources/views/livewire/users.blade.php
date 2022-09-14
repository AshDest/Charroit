<div>
    <!-- START: Main Content-->
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0">Les utilisateurs</h4>
                        </div>
                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Acceuil</li>
                            <li class="breadcrumb-item active">Utilisateurs</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">

                <div class="col-12 col-lg-6 mt-3">
                    <div class="card">
                        <div class="card-header">
                            @if ($updateuser)
                                <h4 class="card-title">Modifier L'utilisateur</h4>
                            @else
                                <h4 class="card-title">Nouvel Utilisateur</h4>
                            @endif
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if ($updateuser)

                                            <form wire:submit.prevent="updateuser">
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label">Adresse
                                                        mail</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            id="email"wire:model="email"
                                                            placeholder="saisir l'adresse mail">
                                                        @error('email')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="username" class="col-sm-4 col-form-label">Nom
                                                        d'utilisateur</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            id="username"wire:model="username"
                                                            placeholder="saisir le nom d'utilisateur">
                                                        @error('username')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-sm-4 col-form-label">Photo</label>
                                                    <div class="col-sm-8">
                                                        @if (!$logo)
                                                            <input type="file" wire:model="logo"
                                                                class="form-control @error('logo') is-invalid @enderror"
                                                                id="logo">
                                                        @endif

                                                        @if ($logo)
                                                            <img src="{{ $logo->temporaryUrl() }}"
                                                                style="height: 40px; border-radius: 4px; ">
                                                                &nbsp;&nbsp;
                                                                <div class="tooltipcabinet">
                                                                    <a wire:click.prevent="resetphoto"
                                                                     style="cursor:pointer;">
                                                                    <i class="fas fa-redo mr-1" style="color: #EF8354;"></i>
                                                                </a>
                                                                    <span class="tooltiptextcabinet">Recharger la photo</span>
                                                                  </div>

                                                        @endif

                                                        <div wire:loading wire:target="logo" style="color: #2f8045; ">
                                                            Uploading <img
                                                                src="{{ asset('dist/downloaded/load.png') }}"
                                                                width="14" />
                                                        </div>

                                                        @error('logo')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="username" class="col-sm-4 col-form-label">Photo Actuelle</label>
                                                    <div class="col-sm-8">

                                                            <img src="{{asset('dist/images/userpicture/'.$this->lienlogo.'')}}" style="height: 40px; border-radius: 4px; ">

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary">
                                                            <span class="icon-plus"></span> Modifier l'utilisateur</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @else
                                            <form wire:submit.prevent="saveuser">
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label">Adresse
                                                        mail</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            id="email"wire:model="email"
                                                            placeholder="saisir l'adresse mail">
                                                        @error('email')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="username" class="col-sm-4 col-form-label">Nom
                                                        d'utilisateur</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control"
                                                            id="username"wire:model="username"
                                                            placeholder="saisir le nom d'utilisateur">
                                                        @error('username')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password" class="col-sm-4 col-form-label">Mot de
                                                        passe</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" class="form-control"
                                                            id="password"wire:model="password"
                                                            placeholder="saisir le mot de passe">
                                                        @error('password')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="password_confirmation" class="col-sm-4 col-form-label">Confirme  le
                                                        mot passe</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" class="form-control"
                                                            id="password_confirmation"wire:model="password_confirmation"
                                                            placeholder="confirmer le mot de passe">
                                                        @error('password_confirmation')
                                                            <span style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-sm-4 col-form-label">Logo</label>
                                                    <div class="col-sm-8">
                                                        @if (!$logo)
                                                            <input type="file" wire:model="logo"
                                                                class="form-control @error('logo') is-invalid @enderror"
                                                                id="logo">
                                                        @endif

                                                        @if ($logo)
                                                            <img src="{{ $logo->temporaryUrl() }}"
                                                                style="height: 40px; border-radius: 4px; ">
                                                                &nbsp;&nbsp;
                                                                <div class="tooltipcabinet">
                                                                    <a wire:click.prevent="resetphoto"
                                                                     style="cursor:pointer;">
                                                                    <i class="fas fa-redo mr-1" style="color: #EF8354;"></i>
                                                                </a>
                                                                    <span class="tooltiptextcabinet">Recharger la photo</span>
                                                                  </div>

                                                        @endif

                                                        <div wire:loading wire:target="logo" style="color: #2f8045; ">
                                                            Uploading <img
                                                                src="{{ asset('dist/downloaded/load.png') }}"
                                                                width="14" />
                                                        </div>

                                                        @error('logo')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary">
                                                            <span class="icon-plus"></span> Enregistrer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mt-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">LISTES USERS</h4>
                            <div class="col-sm-5">
                                <input type="text" id="reseach" placeholder="recherche un accès" class="form-control"
                                wire:model="user_reseach">
                            </div>
                            <div class="col-auto ml-auto sm-2">
                                Afficher
                                <select id="page_active" wire:model.lazy="page_active" class="custom-select w-auto">
                                    @for ($i = 6; $i <= 12; $i += 3)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <label for="page_active">Page</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Username</th>
                                            {{-- <th scope="col">Accès</th> --}}
                                            <th scope="col">Photo</th>
                                            <th scope="col">Modifier</th>
                                            <th scope="col">Suprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($users as $key=> $user)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{ $user->name }}</td>
                                            {{-- <td>{{ $user->niveauacce->niveau }}</td> --}}
                                            <td> <img src="dist/images/userpicture/{{$user->avatar}}"
                                                style="height: 20px; border-radius: 4px; "></td>
                                            <td>
                                                <button
                                                    class="btn btn-primary btn-sm"  wire:click="edit({{ $user->id }})">
                                                    <span class="icon-pencil" style="cursor: pointer"></span></span></button>
                                            </td>
                                            <td>
                                            <button
                                                class="btn btn-danger btn-sm" wire:click="deleteuser({{ $user->id }})">
                                                <span class="icon-trash" style="cursor: pointer"></span></span>
                                            </button>
                                            </td>
                                        </tr>
                                        @empty
                                    <tr>
                                        <td class="alert alert-danger" colspan="12">
                                            <center>Aucune enregistrement correspondant à votre récherche</center>
                                        </td>
                                    </tr>
                                @endforelse

                                    </tbody>
                                </table>
                                @if (count($users))
                                {{$users->links('vendor.livewire.bootstrap')}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->
</div>
