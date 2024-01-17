<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased">
    <!-- component -->
    <div class="flex min-h-screen items-center justify-center">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-xl">
                <thead>
                    <tr class="bg-blue-gray-100 text-gray-700">
                        <th class="py-3 px-4 text-left">Nome</th>
                        <th class="py-3 px-4 text-left">Descrição</th>
                        <th class="py-3 px-4 text-left">Preço</th>
                        <th class="py-3 px-4 text-left">Quantidade</th>
                        <th class="py-3 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-blue-gray-900">
                    @foreach ($produtos as $produto)
                        <tr class="border-b border-blue-gray-200">
                            <td class="py-3 px-4">{{ $produto->nome}}</td>
                            <td class="py-3 px-4">{{ $produto->descricao }}</td>
                            <td class="py-3 px-4">{{ $produto->preco }}</td>
                            <td class="py-3 px-4">{{ $produto->quantidade }}</td>
                            <td class="py-3 px-4">
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                <div class="text-sm text-gray-700 py-1 text-center">
                    Made with <a class="text-gray-700 font-semibold"
                        href="https://www.material-tailwind.com/docs/html/table/?ref=tailwindcomponents"
                        target="_blank">Material Tailwind</a> by <a
                        href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold"
                        target="_blank"> Creative Tim</a>.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
