@extends('template')
@section ("container")
<h1>Fimes</h1>


@if(isset($todosFilmes))
    <ul>
@foreach($todosFilmes as $filme)
    <li>{{$filme->titulo}}<a href="/filme/editar/{{$filme->filme_id}}">  Editar</a> </li> <a href="/filme/excluir/{{$filme->filme_id}}">  Excluir</a>

    <!--<i class="fa fa-close"></i>-->
@endforeach
</ul>
@endif
@endsection