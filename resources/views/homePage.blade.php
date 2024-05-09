@extends('layout.layout')

@section('content')
    @include('layout.navBar')     
    
    <div class="d-flex">
        <div class="p-2 w-100" ></div>

        <div class="p-2 flex-md-shrink-1">
            @include('shared.barraPesquisa')
        </div>
    </div>

    
@endsection