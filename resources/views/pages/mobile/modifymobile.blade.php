@extends('layouts.default', ['title'=>'Modifier Mobile'])
@section('content')
@livewire('mobile.modify-mobile', ['ids' => $ids])
@endsection
