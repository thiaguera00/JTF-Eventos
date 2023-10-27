<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/assets/SymplaEventTicket.jpeg')
</head>
<body>
    <header class="">
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
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border-2 border-gray-300 rounded-lg bg-gray-50 focus:border-indigo-500"
                        placeholder="Search Mockups, Logos..." required>

                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-indigo-500 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>
            <!-- Barra de Pesquisa -->

        </nav>
    </header>
<div class="flex justify-center">
    <form action="{{route('criarFeedback')}}" method="post">
        @csrf
    <div class="relative max-w-sm m-10 justify-center">
        <label for="">Comentario</label>
        <div class="relative max-w-sm">
            <div
            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <i class="fas fa-calendar text-gray-500 dark:text-gray-400 text-lg"></i>
        </div>
        <input datepicker datepicker-format="dd/mm/yyyy" type="text"
                class=" border-2 border-gray-300 text-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Adorei" name="comentario">
        </div>
        <div class="m-10">
            <button type="submit"
            class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">
            Enviar
        </button>
    </div>
</form>
</div>
</div>
</body>
</html>