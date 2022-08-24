<x-page title="Painel Adminstrativo ">

    <div class="container bg-gray-800 p-3 fs-1" style="font-family: speed">
        <div class="row justify-content-around mx-5 text-white ">
            <div class="col center">
                PAINEL DE CONTROLE
            </div>
            <div class="col-1">
                <a href="/" class="  center hover:text-green-300"><i class="fa-solid fa-house-chimney"></i></a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <x-title class="text-green-700 " font='origin'> Mensagens</x-title>
    </div>

    <main>
        <div class="container p-0">
            <div class="row">
                <x-table :mensagens="$mensagens"></x-table>
            </div>

        </div>
    </main>
</x-page>
