<h3>Fornecedores</h3>
{{-- AQUI TEM UM COMENTARIO --}}

{{--@dd($fornecedores)--}}

@if(count($fornecedores)>0 && count($fornecedores)<10)
    <h3>Existem alguns Fornecedores</h3>
@elseif(count($fornecedores)>10)
    <h3>Existem Varios Fornecedores</h3>
@else
    <h3>Ainda não existen Fornecedores</h3>
@endif