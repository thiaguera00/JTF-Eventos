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
                <img src="https://lh3.googleusercontent.com/pw/ADCreHcQluDNOUOUg0nFbhg_GJFpItqroLHYHuXRuRg1kk926FRoNRjopXrLZnpWqz6Jge8a_1HlL-1abxMISjzqwjSGHzf-WAeKhibL0GeXmoAirmJU_5pPehx5yGVvBZdXdkF9JgRZ4DkEFSRfEIWeJvkaEKQvXPl1DnrywgMs8wB7rsXHKN-pZXfOdcTcZ3-V9bBaG7ylN3-fyEatjxkPYKG8FFbgdF5fVVE5RCYIZwGE9VNlQAtrwWGEBI_1ihZCJIidJhGSmNOPv3_aaRp2jUI42efNTuhTVGdATS-eirJl5UuvCuS-GRiCi5WBFYcy9TDi0mGdsKI-mNq1OImewoWfLYrPo3XEfqoGi4cEfKueigT55GFfN6jSTE9vZW-GW4BA7rujDrPmjcxIJ-Evd7KcqOURK6OKZi2bUsqeysAe8__HmO7PSefFgZMPrY7gjJHdalkXwOTCnsFFMJJksS49S-RPx4nBCUdMlGZohJFBDA_nQnqVDkUWlXSHF2exBqjzRddgL2zMF0dRdM_01iLBpZapsbdsulgClEKWxW-eaR-wChwLPHBR-PwwwYTz0smcBL6bnY0AO5uvUxH8sHfa94B1MLDsU59xDYrgVFgVOWhY2kNJ5VUWp_gaO3kDPKzv9gvn_2HwnmeBBizA6lJoaX64xgDs7AY1NtGQxc-w2oSabI1YR7HmmGeFDwhsJo7iZOdoRSjA10SAiPDlAdo3hx35iEzmeLrpDVHLc7iZMJbDmalXRZT_bcMX686qVdARB8jqElTsY4eELYuTwcpP8y7p2ysOmlEQORzgKIewEIhw6SWi8fOMBOtsT83I12667YMPq7EdAOcQoV0maqRWcyMdWGB8dmldCCcGMJ8xZdqOT9nCfvDtvAgbIYhUcC4S2HoOq8PiWuxs_IVUczs=w500-h500-s-no-gm?authuser=0" alt="A porra da imagem" class="w-32">
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
                class="block mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">Cadastrar
                Evento</button>

        </nav>
    </header>
    <section class=" py-1 bg-gray-100">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-indigo-500 mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class=" text-white text-xl font-bold">
                            Editar Evento
                        </h6>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <form>
                        <!-- Informações Eventos: Inicio -->
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informações do Evento
                        </h6>
                        <div class="flex flex-wrap">
                            <div class=" w-full lg:w-6/12 px-4">
                                <div class=" grow-3 relative w-full mb-3">
                                    <label class="block text-gray-600 text-xs font-semibold mb-2"
                                        htmlfor="grid-password">
                                        Título
                                    </label>
                                    <input type="text"
                                        class="flex grow-3 w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        value="{{ $eventos->nome }}" placeholder="Título">
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
                                        placeholder="300" value="{{ $eventos->capacidadeMaxima }}">
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
                                        placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
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
                                            rows="4" placeholder="Descrição do Evento" value="{{ $eventos->descricao }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bottons -->
                        <div class="flex flex-row mt-10 align-baseline">
                            <button type="submit"
                                class="block w-full max-w-xs mx-auto bg-red-500 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold ">Deletar</button>
                            <button type="submit"
                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">Cadastrar
                                Evento</button>
                        </div>
                        <!-- Bottons -->

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
