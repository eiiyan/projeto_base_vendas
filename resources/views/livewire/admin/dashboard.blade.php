<div>
    {{--relacionamento}}
    <h4> {{ auth()->user()->email}}</h4>
    <h4> {{ auth()->user()->id}}</h4>
    <h4> {{ auth()->user()->user_type}}</h4>
    <h4> {{ auth()->user()->admin->cpf}}</h4>
    <h4> {{ auth()->user()->admin->nome}}</h4>
    <h4> {{ auth()->user()->created_at}}</h4>
    <h4> {{ auth()->user()->admin->id}}</h4>
    {{--se está logado com admin tem que pegar os dados do usuário logado--}}
    
    <h2>Admin logado</h2>
</div>
