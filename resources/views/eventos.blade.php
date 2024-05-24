<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/assets/SymplaEventTicket.jpeg')
</head>

<body>
    <!-- Header -->
    <header class="w-auto">
        <nav class="flex items-center justify-start flex-row bg-white drop-shadow-md md:shadow-indigo-500/40">

            <!-- Logo -->
            <div class="flex basis-1/4 pl-10">
                <a href="{{route('eventos')}}">
                    <img src="JTFEventosLogo.png" alt="JTF Eventos Logo" class="w-32">
                </a>
            </div>
            <!-- Logo -->

            <!-- Barra de Pesquisa -->
            <form class="basis-2/4">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input 
                        type="search" id="default-search"
                        class=" w-full min-w-fit p-4 pl-10 text-sm text-gray-900 border-2 border-gray-300 rounded-lg bg-gray-50 focus:border-indigo-500"
                        placeholder="Encontre eventos!"
                        required
                    >
                </div>
            </form>
            <!-- Barra de Pesquisa -->
        
            <a type="submit"
                class=" pl-3 mx-auto focus:bg-indigo-700 text-indigo-500 font-semibold text-sm"
                href="{{route('cadastrarEvento')}}"
                >
                Cadastrar Evento
            </a>

            <a type="submit"
                class=" pl-3 mx-auto focus:bg-indigo-700 text-indigo-500 font-semibold text-sm"
                href="{{route('feedback')}}"
                >
                Criar Feedback
            </a>

        </nav>
    </header>

    <!-- Cards -->
    <div class="flex flex-row flex-wrap justify-center mb-40">
        <!-- Card 1-->
        Bem vindo(a), {{auth()->user()->login}}
        

        @foreach ($eventos as $evento)
            <div class="flex-col max-w-xs rounded overflow-hidden shadow-lg mt-10 mx-10">
                <div>
                    <a href="{{ route('detalhes.eventos', ['idEvento' => $evento->idEvento]) }}"">
                        <img src="symplaeventticket.jpeg" alt="evento">
                    </a>
                </div>
                <div class="px-6 pt-8">
                    <div class="font-bold text-xl mb-2">{{ $evento->nome }}</div>
                </div>
            <p class=" px-6 py-4 text-lg mb-2">{{ $evento->endereco}}</p>
        </div>
        <!-- Card 1-->

        @endforeach
            </div>
            <!-- Cards -->

</body>

</html>
