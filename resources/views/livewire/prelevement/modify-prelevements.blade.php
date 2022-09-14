<main>
    <div class="container-fluid site-width">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-row" class="needs-validation" novalidate wire:submit.prevent="update">
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
                                    <label for="dateprelevement">Date Prelevement
                                    </label>
                                    <input type="date" id="dateprelevement" wire:model="dateprelevement" max="2005-01-01"
                                        class="form-control @error('dateprelevement') is-invalid @enderror" />
                                    @error('dateprelevement')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-4 mb-2">
                                    <label for="kilometre">Kilometres Actuels
                                    </label>
                                    <input type="number" wire:model="kilometre" placeholder=" kilometre"
                                        class="form-control @error('kilometre') is-invalid @enderror" />
                                    @error('kilometre')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-12">
                                    <button type="submit" class="btn btn-primary col-sm-12">
                                        <i class="icon-plus"></i>&ensp;&ensp;Modifier Prelevement
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
