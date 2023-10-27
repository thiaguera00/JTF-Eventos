<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="">
  <section class=" py-1 bg-gray-100">
    <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
        <div class="rounded-t bg-indigo-500 mb-0 px-6 py-6">
          <div class="text-center flex justify-between">
            <h6 class=" text-white text-xl font-bold">
              Cadastro Evento
            </h6>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
          <form action="{{route('criarEventos')}}" method="post">
            @csrf
            <!-- Informações Eventos: Inicio -->
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
              Informações do Evento
            </h6>
            <div class="flex flex-wrap">
              <div class=" w-full lg:w-6/12 px-4">
                <div class=" grow-3 relative w-full mb-3">
                  <label class="block text-gray-600 text-xs font-semibold mb-2" htmlfor="grid-password">
                    Título
                  </label>
                  <input type="text" class="flex grow-3 w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" value="" placeholder="Título" name="nome">
                </div>
              </div>
              <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                  <label class="block text-gray-600 text-xs font-semibold mb-2" htmlfor="grid-password">
                    Capacidade Máxima
                  </label>
                  <input type="number" class=" w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="300" name="capacidadeMaxima">
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
                  <input type="text" class="w-full px-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" name="endereco">
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
                    <textarea type="text" class="border-2 px-3 py-3 bg-white rounded-lg text-lg w-full ease-linear transition-all duration-150 border-gray-200 outline-none focus:border-indigo-500" rows="4" placeholder="Descrição do Evento" name="descricao"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold ">Cadastrar Evento</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
