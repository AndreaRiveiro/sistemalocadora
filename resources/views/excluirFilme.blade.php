@extends("template")

@section("container")
    <h1>Excluir Filme</h1>
          
        <form action="/filme/excluir/{{$filme->filme_id}}" method="POST">
        @csrf
        <input type="text" name="filme_id" value="{{$filme->filme_id}}" hidden>
        <input type="text" name="titulo" value=" {{$filme->titulo}}" id="">
        <button type="submit">Excluir</button>
        </form>
    @if(isset($resultado))
         @if($resultado)
            <h1>Excluir Conluido!</h1>
        @else
            <h1>Erro ao tentar eexcluir!</h1>
        @endif
    @endif        
@endsection