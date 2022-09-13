@extends('layouts.default', ['title'=>'Modifier Entretien'])
@section('content')
@livewire('entretien.modify-entretien', ['ids' => $entretien])
@endsection
