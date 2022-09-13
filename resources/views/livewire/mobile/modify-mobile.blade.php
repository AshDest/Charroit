<main>
    <div class="container-fluid site-width">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-row" class="needs-validation" novalidate wire:submit.prevent="save">
                                @csrf
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="immatriculation">Immatriculation</label>
                                    <input type="text" wire:model="immatriculation" placeholder=" immatriculation"
                                        class="form-control @error('immatriculation') is-invalid @enderror" id="immatriculation">
                                    @error('immatriculation')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="type_id">Type Automobile</label>
                                    <select class="form-control" name="type_id" id="type_id" wire:model='type_id'>
                                        <option value=""> -- Select type Mobile --</option>
                                        @foreach ($types as $type)
                                             <option value="{{$type->id}}">{{$type->designation}}</option>
                                        @endforeach
                                     </select>
                                    @error('type_id')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">

                                    <label for="num_chassis">Numero Chassis
                                    </label>
                                    <input type="text" wire:model="num_chassis" placeholder=" Numero Chassis"
                                        class="form-control @error('num_chassis') is-invalid @enderror" id="num_chassis">
                                    @error('num_chassis')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 mb-2">

                                    <label for="marque">Marque
                                    </label>
                                    <input type="text" placeholder=" marque" wire:model="marque"
                                        class="form-control @error('marque') is-invalid @enderror" id="marque">
                                    @error('marque')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">

                                    <label for="couleur">Couleur
                                    </label>
                                    <input type="text" placeholder=" couleur" wire:model="couleur"
                                        class="form-control @error('couleur') is-invalid @enderror" id="couleur">
                                    @error('couleur')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 mb-2">
                                    <label for="kilometrage">Kilometre
                                    </label>
                                    <input type="number" wire:model="kilometrage" placeholder=" kilometrage"
                                        class="form-control @error('kilometrage') is-invalid @enderror" />
                                    @error('kilometrage')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 mb-2">
                                    <label for="type_id">Section d'Affectation</label>
                                    <select class="form-control" name="section_id" id="section_id" wire:model='section_id'>
                                        <option value=""> -- Select Section --</option>
                                        @foreach ($sections as $section)
                                             <option value="{{$section->id}}">{{$section->designation}}</option>
                                        @endforeach
                                     </select>
                                    @error('section_id')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- <div class="form-group col-sm-4 mb-2">
                                    <label for="datenaissance">Date de naissance
                                    </label>
                                    <input type="date" id="datenaissance" wire:model="datenaissance" max="2005-01-01"
                                        class="form-control @error('datenaissance') is-invalid @enderror" />
                                    @error('datenaissance')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 mb-2">
                                    <label>Genre</label><br />
                                    <div class="custom-control custom-radio custom-control-inline mr-2">
                                        <input type="checkbox" onclick="check(this);" wire:click="genrem()"
                                            class="custom-control-input" checked="checked" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Masculin</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="checkbox" onclick="check(this);" wire:click="genref()"
                                            class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Feminin</label>
                                    </div>
                                </div> --}}

                                <div class="form-group col-sm-4 mb-2">
                                    <label for="intervalle">Intervalle Km
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent border-right-0"
                                                id="basic-addon1">
                                                <i class="icon-number"></i></span>
                                        </div>
                                        <input type="number" wire:model="intervalle" placeholder=" Ex : 3000"
                                            class="form-control @error('intervalle') is-invalid @enderror" />
                                        @error('intervalle')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-primary col-sm-12">
                                        <i class="icon-plus"></i>&ensp;&ensp;Modifier Mobile
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@push('script-avocat')
<script>
    function check(input)
    {
    	var checkboxes = document.getElementsByClassName("custom-control-input");
    	for(var i = 0; i < checkboxes.length; i++){
    		if(checkboxes[i].checked == true){
    			checkboxes[i].checked = false;
    		}
    	}

    	if(input.checked == true){
    		input.checked = false;
    	}else{
    		input.checked = true;
    	}
    }
</script>
@endpush
