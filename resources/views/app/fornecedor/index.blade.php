<h3>Fornecedores</h3>
{{-- AQUI TEM UM COMENTARIO --}}

{{--@dd($fornecedores)--}}
{{--
    if(isset($variavel)){} //retorna true se a variavel estiver definada
    @empty($variavel) //retorna true se a variavel vazio
--}}
@isset($fornecedores)

    @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedores: {{$fornecedores[$i]['nome']}}
    <br>
    Status: {{$fornecedores[$i]['status']}}
    <br>
    CNPJ: {{$fornecedores[$i]['cnpj']}}
    <br>
    Telefone: {{ $fornecedores[$i]['ddd'] ?? ''}} {{ $fornecedores[$i]['telefone'] ?? ''}}
    <br>
    <br>
    @endfor
    
@endisset