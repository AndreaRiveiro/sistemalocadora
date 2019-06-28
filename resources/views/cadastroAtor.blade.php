@extends("template")

@section("container")
    <h1>Cadastro de Ator</h1>
    <form action="cadastro" method="POST">
        @csrf
        <input type="text" name="primeiroNome" id="">
        <input type="text" name="segundoNome" id="">
        <button type="submit">Enviar</button>
    </form>
    @if(isset($resultado))
         @if($resultado)
            <h1>Cadastro Conluido!</h1>
        @else
            <h1>Erro ao tentar cadastrar!</h1>
        @endif
    @endif        
@endsection