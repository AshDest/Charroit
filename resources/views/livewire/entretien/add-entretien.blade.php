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
                                    <label for="mobile_id">Vehicules</label>
                                    <select class="form-control" name="mobile_id" id="mobile_id" wire:model='mobile_id'>
                                        <option value=""> -- Select Engin --</option>
                                        @foreach ($mobiles as $mobile)
                                             <option value="{{$mobile->id}}">{{$mobile->immatriculation}} -
                                                {{$mobile->typemobile->designation}} - {{$mobile->marque}} -
                                                {{$mobile->couleur}}{{$mobile->marque}} - {{$mobile->couleur}}</option>
                                        @endforeach
                                     </select>
                                    @error('mobile_id')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="garage_id">Garage</label>
                                    <select class="form-control" name="garage_id" id="garage_id" wire:model='garage_id'>
                                        <option value=""> -- Select Garage --</option>
                                        @foreach ($garages as $garage)
                                             <option value="{{$garage->id}}">{{$garage->nomgarage}}</option>
                                        @endforeach
                                     </select>
                                    @error('garage_id')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="date_entretien">Date de Entretien
                                    </label>
                                    <input type="date" id="date_entretien" wire:model="date_entretien" max="2005-01-01"
                                        class="form-control @error('date_entretien') is-invalid @enderror" />
                                    @error('date_entretien')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="cout">Cout d'Entretien $
                                    </label>
                                    <input type="number" wire:model="cout" placeholder=" cout"
                                        class="form-control @error('cout') is-invalid @enderror" />
                                    @error('cout')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-sm-4 mb-2">
                                    <label for="entretien">Entretien Effectuées
                                    </label>
                                    <textarea wire:model="entretien" placeholder=" entretien"
                                        class="form-control @error('entretien') is-invalid @enderror"> </textarea>
                                    @error('entretien')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-primary col-sm-12">
                                        <i class="icon-plus"></i>&ensp;&ensp;Enregistrer Entretien
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
