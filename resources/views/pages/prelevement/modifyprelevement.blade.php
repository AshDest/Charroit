@extends('layouts.default', ['title'=>'Modifier Prelevement'])
@section('content')
@livewire('prelevement.modify-prelevements', ['ids' => $ids])
@endsection
