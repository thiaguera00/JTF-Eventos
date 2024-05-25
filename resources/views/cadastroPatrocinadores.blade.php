
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite('resources/css/app.css')
      @vite('resources/assets/SymplaEventTicket.jpeg')

      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   </head>                                                                                                                                                                                                                                      
      <div class="grid min-h-screen grid-cols-app">
      <!-- Sidebar -->
      <aside class="flex flex-col gap-6 border-r border-zinc-200 px-5 py-8">
         <img  class="" src="https://i.ibb.co/hC1bTW8/JTFEventos-Logo.png" width="120" higth="80" alt="Logo JTF Eventos" border="0">
         <div class="mx-1 flex w-full items-center gap-2 rounded-lg border border-zinc-300 px-4 py-3 shadow-sm">
            <img class="h-5 w-5 text-zinc-500"  src="https://i.ibb.co/WvRnSCw/search.png" alt="search" border="0">
            <input class="flex-1 border-0 bg-transparent p-0 text-zinc-900 placeholder-zinc-600" placeholder="Search" />
         </div>

          <!--Menu Principal -->
         <nav class="space-y-0.5">

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Home</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Eventos</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Ingressos</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Pagamentos</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Patrocinadores</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Participantes</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

            <a href="" class="flex items-center gap-3 rounded px-3 py2 hover:bg-violet-50">
               <img class="h-5 w-5 text-zinc-500" src="https://i.ibb.co/N20Gqh0/home.png" alt="home">
               <span class="font-medium text-zinc-700 hover:text-violet-500">Feedbacks</span>
               <svg class="ml-auto h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
               </svg>
            </a>

         </nav>
          <!--Menu Principal -->

         <div class="mt-auto flex flex-col gap-6">
           <!--Menu Usuários-->
         <nav class=" space-y-0.5">
            <a href="">
            <img  class="inline-block" src="https://i.ibb.co/TYDyKdk/users.png" alt="users" border="0"> 
            Gerenciar Usuários
            </a>
         </nav>
         <!--Menu Usuários-->
         </div>
         
         <div class=" flex flex-col gap-4 rounded-lg bg-violet-50 px-4 py-5">
            <div class=" grid grid-cols-profile items-center gap-3">
               <img src="https://i.ibb.co/hV8kryb/user.png" class="h-10 w-10 rounded-full" alt="Avatar" />
               <!-- Detalhes Usuário -->
               <div class="flex flex-col truncate">
                  <span class="text-sm font-semibold text-zinc-700"> 
                  Usuário
                  </span>
                  <span class="truncate text-sm text-zinc-500">
                  email@email.com
                  </span>
               </div>

               <button type="button" class="ml-auto rounded-md p-2 hover:bg-zinc-50">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                  </svg>
               </button>
            </div>
        
            <div class="h-2 rounded-full bg-violet-100">
               <div class="h-1 w-5/5 rounded-full bg-violet-600">
               </div>
            </div>
            <!-- Detalhes Usuário -->
          </div>
      </aside>
      <!-- Sidebar -->
      <main class="px-4 pb-12 pt-8">
      <!-- Conteúdo -->

      <!-- Título Evento -->
      <h1 class="text-zinc-900 text-3xl font-medium truncate">Cadastrar Evento</h1>
      <!-- Título Evento -->

      <div class="h-2 rounded-full bg-violet-100">
        <div class="h-1 w-5/5 rounded-full bg-violet-600"></div>
      </div>

      <div class="gap-6 flex mb-4">

      <form action="{{ route('criarEventos') }}" method="post">
                        @csrf
                        <!-- Informações Eventos: Inicio -->
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Informações do Evento
                        </h6>
                        <div class="flex flex-wrap justify-between ">
                            <div class=" w-full lg:w-6/12 px-4">
                                <div class=" grow-3 relative w-full mb-3">
                                    <label class="block text-gray-600 text-xs font-semibold mb-2"
                                        htmlfor="grid-password">
                                        Título
                                    </label>
                                    <input type="text"
                                        class="flex w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        value="" placeholder="Título" name="nome">
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
                                        placeholder="300" name="capacidadeMaxima">
                                </div>
                            </div>
                            {{-- Data Picker --}}
                            <div class=" flex flex-col self-start ml-5 mb-6 rounded-lg bg-blueGray-100 border-0">
                                <div class="text-gray-600 text-xs font-semibold mb-2">
                                    Selecione a data
                                </div>
                                <div class="relative max-w-sm">

                                    <div class="relative max-w-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <i class="fas fa-calendar text-gray-500 dark:text-gray-400 text-lg"></i>
                                        </div>
                                        <input datepicker datepicker-format="dd/mm/yyyy" type="text"
                                            class=" border-2 border-gray-300 text-gray-700 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            placeholder="dd/mm/yyyy">
                                    </div>

                                </div>

                            </div>

                            <div class="w-full lg:w-6/12 px-4">
                                <label for="turno" class="text-gray-600 text-xs font-semibold mb-2 ">Escolha um
                                    turno</label>
                                <select id="countries"
                                    class="px-3 py-3 border-2 border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-indigo-500 block w-full p-2.5 " name="turno">
                                    <option selected>Escolha um turno</option>
                                    <option value="matutino">Matutino</option>
                                    <option value="vespertino">vespertino</option>
                                    <option value="noturno">Noturno</option>
                                </select>
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
                                        placeholder="Rua, Cidade-UF" name="endereco">
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
                                            rows="4" placeholder="Descrição do Evento" name="descricao"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Equipamentos
                        </h6>

                        <div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="Iluminacao"
                                    class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2 " name="tipo[]">
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-neutral-700 " >
                                    Iluminação
                                </label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="CaixaSom"
                                    class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2 " name="tipo[]">
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-neutral-700 " >
                                    Caixas de Som
                                </label>
                            </div>

                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="Microfone"
                                    class="w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2 "  name="tipo[]">
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-neutral-700 ">
                                    Microfone
                                </label>
                            </div>
                        </div>
                        <button type="submit"
                            class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">
                            Cadastrar Evento
                        </button>
                    </form>

        <div class="w-1/4  h-12">
        </div>

      </div>
      <!-- Conteúdo -->
      </main>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   </body>
