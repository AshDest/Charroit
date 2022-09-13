@extends('layouts.default', ['title'=>'Modifier Mobile'])
@section('content')
@livewire('mobile.mobiles', ['id' => $id])
@endsection
