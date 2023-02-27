<h3> fornecedor </h3>


{{-- 'fornecedor2'--}}

{{-- fica o comentario --}}






{{--@dd($fornecedores)--}}

@if(count($fornecedores)> 0 && count($fornecedores)< 10)
    <h3> Existem  fornecedores cadastrados </h3>


@elseif(count($fornecedores)> 10)
    <h3> Existem varios fornecedores cadastrados </h3>

@else
    <h3> Ainda não existem fornecedores cadastrados </h3>

@endif

Fornecedor:{{ $fornecedores[0] ['nome'] }}
<br>
Status: {{ $fornecedores[0] ['status'] }}
<br>
@if ( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor inativo
@endunless
<br>