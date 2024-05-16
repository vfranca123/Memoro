@extends('layout.layout2')

@section('content')
    <div class="m-4 d-flex flex-column">
        <h1 class="m-4">Perfil:</h1>

        <h1>{{$user->nome}}</h1>
        
        <div class="mb-3 col-md-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp">{{$user->email}}</label>
        </div>
        
        <div class="mb-3 col-md-3">
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <label class="form-control bg-body-secondary " id="exampleInputEmail1" aria-describedby="emailHelp">*********</label>
        </div>
        <a href="{{route('perfil.updateIndex',$user)}}" >Editar</a>
    </div>
@endsection