<x-page title="Detalhes do contato ">
    <div class="container center mt-5">

        <div class="card " style="min-width: 360px;">

            <div class="card-header text-center fs-4 fw-bold text-success">DETALHES</div>
            <div class="card-body   p-3">
                <h3 class="card-title my-3"><strong>Nome: </strong>{{ $mensagem->nome }}</h3>
                <h3 class="card-title my-3"><strong>Telefone: </strong>{{ $mensagem->telefone }}</h3>
                <h3 class="card-title my-4"><strong>Email: </strong>{{ $mensagem->email }}</h3>
                <div class="bg-light p-2 pb-4 ">
                    <h4 class="py-3 mb-2 text-success"><strong>Mensagem:</strong> </h4>
                    <p class="card-text lead ">{{ $mensagem->mensagem }}</p>

                </div>
                <div class="text-center">
                    <a href="{{ route('painel.index') }}" class="btn btn-success mt-4 fs-5 "
                        style="width: 100px;">PAINEL </a>

                </div>
            </div>
        </div>
    </div>
</x-page>
