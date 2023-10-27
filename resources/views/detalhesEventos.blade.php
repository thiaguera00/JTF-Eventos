<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>

    <!-- Header -->
    <header class="">
        <nav class="flex items-center justify-start flex-row bg-white drop-shadow-md md:shadow-indigo-500/40">

            <!-- Logo -->
            <div class="flex basis-1/4 pl-10">
                <a href="{{ route('eventos') }}"><img
                        src="https://lh3.googleusercontent.com/pw/ADCreHcQluDNOUOUg0nFbhg_GJFpItqroLHYHuXRuRg1kk926FRoNRjopXrLZnpWqz6Jge8a_1HlL-1abxMISjzqwjSGHzf-WAeKhibL0GeXmoAirmJU_5pPehx5yGVvBZdXdkF9JgRZ4DkEFSRfEIWeJvkaEKQvXPl1DnrywgMs8wB7rsXHKN-pZXfOdcTcZ3-V9bBaG7ylN3-fyEatjxkPYKG8FFbgdF5fVVE5RCYIZwGE9VNlQAtrwWGEBI_1ihZCJIidJhGSmNOPv3_aaRp2jUI42efNTuhTVGdATS-eirJl5UuvCuS-GRiCi5WBFYcy9TDi0mGdsKI-mNq1OImewoWfLYrPo3XEfqoGi4cEfKueigT55GFfN6jSTE9vZW-GW4BA7rujDrPmjcxIJ-Evd7KcqOURK6OKZi2bUsqeysAe8__HmO7PSefFgZMPrY7gjJHdalkXwOTCnsFFMJJksS49S-RPx4nBCUdMlGZohJFBDA_nQnqVDkUWlXSHF2exBqjzRddgL2zMF0dRdM_01iLBpZapsbdsulgClEKWxW-eaR-wChwLPHBR-PwwwYTz0smcBL6bnY0AO5uvUxH8sHfa94B1MLDsU59xDYrgVFgVOWhY2kNJ5VUWp_gaO3kDPKzv9gvn_2HwnmeBBizA6lJoaX64xgDs7AY1NtGQxc-w2oSabI1YR7HmmGeFDwhsJo7iZOdoRSjA10SAiPDlAdo3hx35iEzmeLrpDVHLc7iZMJbDmalXRZT_bcMX686qVdARB8jqElTsY4eELYuTwcpP8y7p2ysOmlEQORzgKIewEIhw6SWi8fOMBOtsT83I12667YMPq7EdAOcQoV0maqRWcyMdWGB8dmldCCcGMJ8xZdqOT9nCfvDtvAgbIYhUcC4S2HoOq8PiWuxs_IVUczs=w500-h500-s-no-gm?authuser=0"
                        alt="logo" class="w-32"></a>
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

            <button type="submit"
                class="block mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold "
                data-modal-toggle="authentication-modal">
                Editar Evento
            </button>

        </nav>
    </header>

    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />

    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">

        {{-- <!-- Modal toggle --> --}}

        <!-- Main modal -->
        <div id="authentication-modal" aria-hidden="true"
            class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
            <div class="relative w-full max-w-screen-md px-4 h-full md:h-auto">
                <!-- Modal content -->



                <div class="w-full px-4 mx-auto mt-6 p-10">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0">
                        <div class="rounded-t bg-indigo-500 mb-0 px-6 py-6">
                            <div class="flex justify-end p-2">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="text-center flex justify-between">
                                <h6 class=" text-white text-xl font-bold">
                                    Editar Evento
                                </h6>
                            </div>
                        </div>
                        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                            <!-- Informações Eventos: Inicio -->
                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Informações do Evento
                            </h6>
                            <form action="{{ route('editarEvento.post', ['id' => $eventos->id]) }}" method="post">
                                @csrf
                                <div class="flex flex-wrap">
                                    <div class=" w-full lg:w-6/12 px-4">
                                        <div class=" grow-3 relative w-full mb-3">
                                            <label class="block text-gray-600 text-xs font-semibold mb-2"
                                                htmlfor="grid-password">
                                                Título
                                            </label>
                                            <input type="text"
                                                class="flex grow-3 w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                value="{{ $eventos->nome }}" placeholder="Título" name="nome">
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <label class="block text-gray-600 text-xs font-semibold mb-2"
                                                htmlfor="grid-password">
                                                Capacidade Máxima
                                            </label>
                                            <input type="number"
                                                class=" w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="300" value="{{ $eventos->capacidadeMaxima }}"
                                                name="capacidadeMaxima">
                                        </div>
                                    </div>
                                </div>

                                <!-- Informações Eventos: Final -->

                                <hr class="mt-6 border-b-1 border-blueGray-300">

                                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                    Endereço do Evento
                                </h6>
                                <div class="flex flex-wrap">
                                    <div class="w-full lg:w-12/12 px-4">
                                        <div class="relative w-full mb-3">
                                            <input type="text"
                                                class="w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                                value="{{ $eventos->endereco }}" name="endereco">
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-6 border-b-1 border-blueGray-300">
                                <div>
                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                        Descrição do Evento
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <textarea type="text"
                                                    class="border-2 px-3 py-3 bg-white rounded-lg text-lg w-full ease-linear transition-all duration-150 border-gray-200 outline-none focus:border-indigo-500"
                                                    rows="4" placeholder="Descrição do Evento" name="descricao">{{ $eventos->descricao }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Bottons -->
                                <div class="flex flex-row mt-10 align-baseline">
                                    <button type="submit"
                                        class="block w-full max-w-md mx-5 bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">
                                        Editar Evento
                                    </button>
                            </form>
                            <form action="{{ route('excluir.eventos', ['id' => $eventos->id]) }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="block w-full max-w-md mx-5 bg-red-500 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold ">Deletar</button>
                            </form>
                        </div>
                        <!-- Bottons -->
                    </div>
                </div>
            </div>
            {{-- fim modal --}}
        </div>
    </div>
    </div>

    <div class="flex justify-center m-5">

        <img class="h-auto max-w-full"
            src="https://lh3.googleusercontent.com/pw/ADCreHeOq4BISl6Eq6riFmuwM-AxhKrXqIvk4cwopkdAP8n_m9sbd61INGiV71oVIjZ2CL_yDilTzO5Vpf0bzW4tbBUiWAXzKxiZ8cv2Qcz5FhvoQ4ZKqbn8MxdfsmBhhgV4efVqkF-967LsNJ1jH8c8nSVxFA=w1128-h634-s-no-gm?authuser=0"
            alt="" width="60%">
    </div>
    <hr class="mt-6 border-b-1 border-blueGray-300">

    <div>
        <div class="mt-5 flex justify-center">
            <h1 class="flex items-center text-5xl font-extrabold  ">{{ $eventos->nome }}</h1>
        </div>

        <div class=" m-10 mt-10">
            <h2 class="text-4xl font-bold ">Descrição do evento</h2>
        </div>
        <div class="m-10 mt-10">
            <p class="text-xl font-bold ">{{ $eventos->descricao }}</p>
        </div>
        <hr class="mt-6 border-b-1 border-blueGray-300">
        <div class="m-10 mt-10">
            <h2 class="text-4xl font-bold ">Endereço do Evento</h2>
            <div class="m-10 mt-10">
                <p class="text-xl font-bold  ">{{ $eventos->endereco }}</p>
            </div>
        </div>

        <hr class="mt-6 border-b-1 border-blueGray-300">

        <div class="m-10 mt-10">
            <h2 class="text-4xl font-bold  ">Capacidade Máxima</h2>
            <div class="m-10 mt-10">
                <span>
                    <p class="text-xl font-bold  ">{{ $eventos->capacidadeMaxima }}</p>
                </span>
            </div>
        </div>
    </div>

    <hr class="mt-6 mb-10 border-b-1 border-blueGray-300">

    <div class="flex flex-col ml-14 mb-10 ">

        <h2 class="text-4xl font-bold ">Feedbacks</h2>

        <br>

        <div class="flex flex-row gap-3">
            <h3 class="font-bold">Nota: </h3>
            <p>5</p>
        </div>

        <div class="flex flex-col">
            <h2 class="font-bold">Comentário:</h2>
            <p class="max-w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias esse earum, aspernatur ratione iure error enim sint at saepe. Illum aliquam similique neque culpa iusto libero exercitationem qui amet magni.</p>
        </div>

    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

</body>

</html>
