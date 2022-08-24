<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
{{-- {{ dd($mensagens) }} --}}
<table class="my-2 ">
    <thead class="mb-5 border-bottom py-4">
        <tr class="bg-gray-400 text-dark fs-5">
            <th class="p-3 text-center">ID</th>
            <th class="p-3 text-center">NOME</th>
            <th class="p-3 text-center">AÇÕES</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($mensagens as $mensagem)
            <tr>
                <th class="py-2 text-center">{{ $mensagem->id }}</th>

                <th class="py-2 text-center capitalize">{{ $mensagem->nome }}</th>

                <td class="py-2 text-center  center">

                    <a href="{{ route('painel.show', $mensagem) }}"
                        class="bg-blue-500 px-3 py-1 mx-5 rounded  text-white hover:bg-blue-800 fw-bold">Ver </a>

                    <form action="{{ route('painel.destroy', $mensagem) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="X"
                            class="bg-red-500 px-3 py-1 rounded  text-white hover:bg-red-800 fw-bold">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
