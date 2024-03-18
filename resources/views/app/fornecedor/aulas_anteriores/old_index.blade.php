<h3>Fornecedores</h3>
{{-- AQUI TEM UM COMENTARIO --}}

{{--@dd($fornecedores)--}}
{{--
    if(isset($variavel)){} //retorna true se a variavel estiver definada
    @empty($variavel) //retorna true se a variavel vazio
--}}
@isset($fornecedores)
    Fornecedores: {{$fornecedores[0]['nome']}}
    <br>
    Status: {{$fornecedores[0]['status']}}
    <br> 
    CNPJ: {{$fornecedores[0]['cnpj']}}
    @empty($fornecedores[0]['cnpj'])
        -vazio
    @endempty
    <br>
    Condicional "??": {{ $fornecedores[0]['condicional'] ?? 'Dado não preenchido' }}
    <!--
        $variavel testada não estiver definida(isset)
        ou
        $varavel testada possuir o valor null
    -->
@endisset

<br>
@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3 style="color: darkslategray">Existem alguns Fornecedores</h3>
@elseif(count($fornecedores)>10)
    <h3>Existem Varios Fornecedores</h3>
@else
    <h3>Ainda não existem Fornecedores</h3>
@endif