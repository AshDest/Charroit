<div>
    <!-- START: Main Content-->
    <main>
     <div class="container-fluid site-width">
         <!-- START: Breadcrumbs-->
         <div class="row ">
             <div class="col-12  align-self-center">
                 <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                     <div class="w-sm-100 mr-auto"><h4 class="mb-0">Garages</h4></div>
                     <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                         <li class="breadcrumb-item">Acceuil</li>
                         <li class="breadcrumb-item active">Garages</li>
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
                         @if ($updates)
                         <h4 class="card-title">Modifier Garage</h4>
                         @else
                         <h4 class="card-title">Ajouter Garage</h4>
                         @endif
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     @if ($updates)
                                     <form wire:submit.prevent="updates">
                                         <div class="form-group row">
                                             <label for="nomgarage" class="col-sm-4 col-form-label">Nom Garage</label>
                                             <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="nomgarage"wire:model="nomgarage"
                                                  placeholder="Nomination garage">
                                                  @error('nomgarage')
                                                 <span style="color: red;">{{ $message }}</span>
                                                @enderror
                                             </div>
                                         </div>
                                         <div class="form-group row">
                                            <label for="contact" class="col-sm-4 col-form-label">Contact Telephone</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-transparent border-right-0" id="basic-addon1">
                                                            <i class="icon-phone"></i></span>
                                                    </div>
                                                    <input type="text" wire:model="contact" placeholder=" Ex : +243 XXX XXX XXX" class="form-control @error('contact') is-invalid @enderror"/>
                                                    @error('contact')
                                                        <div class="invalid-feedback">
                                                            <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="adresse" class="col-sm-4 col-form-label">Adresse</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="adresse"wire:model="adresse"
                                                 placeholder="Description type automobile"></textarea>
                                                 @error('adresse')
                                                <span style="color: red;">{{ $message }}</span>
                                               @enderror
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                             <div class="col-sm-10">
                                                 <button type="submit" class="btn btn-primary">
                                                    <span class="icon-plus"></span>  Modifier</button>
                                             </div>
                                         </div>
                                     </form>
                                 @else
                                 <form wire:submit.prevent="save">
                                    <div class="form-group row">
                                        <label for="nomgarage" class="col-sm-4 col-form-label">Nom Garage</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nomgarage"wire:model="nomgarage"
                                             placeholder="Nomination garage">
                                             @error('nomgarage')
                                            <span style="color: red;">{{ $message }}</span>
                                           @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="contact" class="col-sm-4 col-form-label">Contact Telephone</label>
                                       <div class="col-sm-8">
                                           <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <span class="input-group-text bg-transparent border-right-0" id="basic-addon1">
                                                       <i class="icon-phone"></i></span>
                                               </div>
                                               <input type="text" wire:model="contact" placeholder=" Ex : +243 XXX XXX XXX" class="form-control @error('contact') is-invalid @enderror"/>
                                               @error('contact')
                                                   <div class="invalid-feedback">
                                                       <i class="fas fa-exclamation-triangle"></i>&nbsp;{{ $message }}
                                                   </div>
                                               @enderror
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row">
                                       <label for="adresse" class="col-sm-4 col-form-label">Adresse</label>
                                       <div class="col-sm-8">
                                           <textarea class="form-control" id="adresse"wire:model="adresse"
                                            placeholder="Description type automobile"></textarea>
                                            @error('adresse')
                                           <span style="color: red;">{{ $message }}</span>
                                          @enderror
                                       </div>
                                   </div>
                                     <div class="form-group row">
                                         <div class="col-sm-10">
                                             <button type="submit" class="btn btn-primary">
                                                 <span class="icon-plus"></span>  Enregistrer</button>
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
                         <h4 class="card-title">Liste Garages</h4>
                         <div class="col-sm-5">
                             <input type="text" id="reseach" placeholder="recherche un garage" class="form-control"
                             wire:model="search">
                         </div>
                         <div class="col-auto ml-auto sm-2">
                             Afficher
                             <select id="page_active" wire:model.lazy="page_active" class="custom-select w-auto">
                                 @for ($i = 3; $i <= 9; $i += 3)
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
                                         <th scope="col">Nom Garage</th>
                                         <th scope="col">Telephone</th>
                                         <th scope="col">Adresse</th>
                                         <th scope="col">Modifier</th>
                                         <th scope="col">Suprimer</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @forelse($garages as $key=> $garage)
                                     <tr>
                                         <th scope="row">{{$key+1}}</th>
                                         <td>{{ $garage->nomgarage }}</td>
                                         <td>{{ $garage->contact }}</td>
                                         <td>{{ $garage->adresse }}</td>
                                         <td>
                                             <button
                                                 class="btn btn-primary btn-sm"  wire:click="edit({{ $garage->id }})">
                                                 <span class="icon-pencil" style="cursor: pointer"></span></span></button>
                                         </td>
                                         <td>
                                         <button
                                             class="btn btn-danger btn-sm" wire:click="delete({{ $garage->id }})">
                                             <span class="icon-trash" style="cursor: pointer"></span></span>
                                         </button>
                                         </td>
                                     </tr>
                                     @empty
                                 <tr>
                                     <td class="alert alert-danger" colspan="12">
                                         <center>Aucune information</center>
                                     </td>
                                 </tr>
                             @endforelse

                                 </tbody>
                             </table>
                             @if (count($garages))
                             {{$garages->links('vendor.livewire.bootstrap')}}
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
