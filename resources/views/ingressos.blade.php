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
      <h1 class="text-zinc-900 text-3xl font-medium truncate">{{ $eventos->nome }}</h1>
      <!-- Título Evento -->

      <div class="h-2 rounded-full bg-violet-100">
        <div class="h-1 w-5/5 rounded-full bg-violet-600"></div>
      </div>

      <div class="gap-6 flex mb-4">

        <!-- Dados Eventos -->
        <div class="w-3/4 h-12">
        <div class="p-4 mb-4 text-zinc-800 rounded-lg bg-violet-50">
           <p class="text-lg inline-block font-semibold">Titulo: </p>
           <span>{{ $eventos->nome }}</span>
        </div>
        <div class="p-4 mb-4 text-zinc-800 rounded-lg bg-violet-50">
           <p class="text-lg inline-block font-semibold">Descrição: </p>
           <span>{{ $eventos->descricao }}</span>
        </div>
        <div class="p-4 mb-4 text-zinc-800 rounded-lg bg-violet-50">
          <p class="text-lg inline-block font-semibold">Endereço: </p>
          <span>{{ $eventos->endereco }}</span>
        </div>
        <div class="p-4 mb-4 text-zinc-800 rounded-lg bg-violet-50">
          <p class="text-lg inline-block font-semibold">Capacidade Máxima: </p>
          <span>{{ $eventos->capacidadeMaxima }}</span>
        </div>
        </div>
        <!-- Dados Eventos -->

        <div class="w-1/4  h-12">

        <div class="p-4 mb-4 rounded-lg bg-violet-200">
           <button 
             class="block text-zinc-800 bg-violet-200 hover:text-violet-700 text-center align-center justify-center content-center"
             type="submit">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
             </svg>
             <a href="{{route('cadastrarEvento')}}">Adicionar Evento</a>
          </button> 
        </div>

        <div class="p-4 mb-4 rounded-lg bg-violet-200">
           <button 
             data-modal-target="authentication-modal" 
             data-modal-toggle="authentication-modal"
             class="block text-zinc-800 bg-violet-200 hover:text-violet-700 text-center align-center justify-center content-center"
             type="button">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
             </svg>
             Editar Evento 
          </button>
          
          <!-- Modal -->
         <div id="authentication-modal" tabindex="-1" aria-hidden="true"
         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
         <div class="relative p-4 w-full max-w-md max-h-full">
         <!-- Conteúdo -->
         <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

         <!-- Cabeçalho -->
         <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            
            <!-- Título Modal-->
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Editar Informações</h3>

            <!-- Botão Fechar-->
            <button 
               type="button"
               class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
               data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path 
                    stroke="currentColor" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Fechar Modal</span>
            </button>
            <!-- Botão Fechar-->

        </div>
        <!-- Cabeçalho -->

        <!-- Formulário -->
        <div class="p-4 md:p-5">
            <form class="space-y-4" action="{{ route('editarEvento.post', ['idEvento' => $eventos->idEvento]) }}" method="post" >
            @csrf
                <!--Inputs formulário-->
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input 
                       type="text" name="nome" id="nome"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       value="{{ $eventos->nome }}"
                       required 
                    />
                </div>

                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                    <input 
                       type="text" name="descricao" id="descricao"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       value="{{ $eventos->descricao }}"
                       required 
                    />
                </div>

                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                    <input 
                       type="text" name="endereco" id="endereco"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       value="{{ $eventos->endereco }}"
                       required 
                    />
                </div>

                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacidade Máxima</label>
                    <input 
                       type="text" name="capacidadeMaxima" id="capacidadeMaxima"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                       value="{{ $eventos->capacidadeMaxima }}"
                       required 
                    />
                </div>
                <!--Inputs formulário-->

                <!-- Botão salvar modal -->
                <button 
                   type="submit"
                   class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                   Salvar
                </button>
                <!-- Botão salvar modal -->

            </form>
        </div>
        <!-- Formulário -->
        </div>
        <!-- Conteúdo -->
        </div>
        </div>
       <!-- Modal -->

        </div>

        <div class="p-4 mb-4 rounded-lg bg-violet-200">
           <button 
             class="block text-zinc-800 bg-violet-200 hover:text-violet-700 text-center align-center justify-center content-center"
             type="submit">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path strokeLinecap="round" strokeLinejoin="round" d="M3 3v1.5M3 21v-6m0 0 2.77-.693a9 9 0 0 1 6.208.682l.108.054a9 9 0 0 0 6.086.71l3.114-.732a48.524 48.524 0 0 1-.005-10.499l-3.11.732a9 9 0 0 1-6.085-.711l-.108-.054a9 9 0 0 0-6.208-.682L3 4.5M3 15V4.5" />
             </svg>
             <a href="{{route('feedback')}}">Feedback</a> 
          </button> 
        </div>

        <div class="p-4 mb-4 rounded-lg bg-violet-200">
           <button 
             class="block text-zinc-800 bg-violet-200 hover:text-violet-700 text-center align-center justify-center content-center"
             type="button">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
             </svg>
             Comentário
          </button> 
        </div>

        <div class="p-4 mb-4 rounded-lg bg-violet-200">
           <button 
             class="block text-zinc-800 bg-violet-200 hover:text-violet-700 text-center align-center justify-center content-center"
             type="button">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
             </svg>
             Nota
          </button> 
        </div>

        <div class="p-4 mb-4 rounded-lg bg-red-400">
        <form action="{{route('excluir.eventos', ['idEvento' => $eventos->idEvento])}}" method="post">
           @csrf
        <button 
             class="block text-zinc-800  hover:text-violet-700 text-center align-center justify-center content-center"
             type="submit">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block align-center justify-center content-center">
             <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
             </svg>
             Excluir
          </button> 
          </form>
        </div>







        </div>
      </div>
      <!-- Conteúdo -->
      </main>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   </body>