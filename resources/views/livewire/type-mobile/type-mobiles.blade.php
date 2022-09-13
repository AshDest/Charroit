<div>
    <!-- START: Main Content-->
    <main>
     <div class="container-fluid site-width">
         <!-- START: Breadcrumbs-->
         <div class="row ">
             <div class="col-12  align-self-center">
                 <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                     <div class="w-sm-100 mr-auto"><h4 class="mb-0">Type Automobile</h4></div>
                     <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                         <li class="breadcrumb-item">Acceuil</li>
                         <li class="breadcrumb-item active">Type Automobile</li>
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
                         <h4 class="card-title">Modifier Type Mobile</h4>
                         @else
                         <h4 class="card-title">Ajouter Type Mobile</h4>
                         @endif
                     </div>
                     <div class="card-content">
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-12">
                                     @if ($updates)
                                     <form wire:submit.prevent="updates">
                                         <div class="form-group row">
                                             <label for="designation" class="col-sm-4 col-form-label">Type Mobile</label>
                                             <div class="col-sm-8">
                                                 <input type="text" class="form-control" id="designation"wire:model="designation"
                                                  placeholder="Description type automobile">
                                                  @error('designation')
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
                                         <label for="designation" class="col-sm-4 col-form-label">Type Mobile</label>
                                         <div class="col-sm-8">
                                             <input type="text" class="form-control" id="designation" wire:model="designation"
                                              placeholder="Description type automobile">
                                              @error('designation')
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
                         <h4 class="card-title">Liste Types Mobiles</h4>
                         <div class="col-sm-5">
                             <input type="text" id="reseach" placeholder="recherche une categclient" class="form-control"
                             wire:model="categclient_reseach">
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
                                         <th scope="col">Designation Type Automobile</th>
                                         <th scope="col">Modifier</th>
                                         <th scope="col">Suprimer</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @forelse($typesmobiles as $key=> $typesmobile)
                                     <tr>
                                         <th scope="row">{{$key+1}}</th>
                                         <td>{{ $typesmobile->designation }}</td>
                                         <td>
                                             <button
                                                 class="btn btn-primary btn-sm"  wire:click="edit({{ $typesmobile->id }})">
                                                 <span class="icon-pencil" style="cursor: pointer"></span></span></button>
                                         </td>
                                         <td>
                                         <button
                                             class="btn btn-danger btn-sm" wire:click="delete({{ $typesmobile->id }})">
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
                             @if (count($typesmobiles))
                             {{$typesmobiles->links('vendor.livewire.bootstrap')}}
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
