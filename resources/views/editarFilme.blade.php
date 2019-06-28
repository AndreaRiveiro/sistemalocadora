@extends("template")

@section("container")
    <h1>Editar de Filme</h1>
    
      
        <form action="/filme/editar/{{$filme->filme_id}}" method="POST">
        @csrf
        <input type="text" name="filme_id" value="{{$filme->filme_id}}" hidden>
        <input type="text" name="titulo" value=" {{$filme->titulo}}" id="">
        <button type="submit">Enviar</button>
        </form>
    @if(isset($resultado))
         @if($resultado)
            <h1>Edição Conluido!</h1>
        @else
            <h1>Erro ao tentar editar!</h1>
        @endif
    @endif        
@endsection