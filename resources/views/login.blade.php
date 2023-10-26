<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

</head>
<body>
 
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
  
  <style>@import url('://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');</style>
  
  <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
      <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
          <div class="md:flex w-full">
              <div class="hidden md:block w-1/2 bg-indigo-500 py-10 px-10">
                  <img src="loginImagem.jpeg" alt="imagemlogin">
              </div>
              <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                  <div class="text-center mb-10">
                      <h1 class="font-bold text-3xl text-gray-900">LOGIN</h1>
                      <p>Faça o login da sua conta</p>
                      <p>Ainda não tem cadastro clique <a href="{{route('cadastro')}}">aqui</a></p>
                  </div>
                  <div>
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Ops! Algo deu errado.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('acessoSistema')}}" method="post">
                @csrf
                      <div class="flex -mx-3">
                          <div class="w-full px-3 mb-5">
                              <label for="" class="text-xs font-semibold px-1">Email</label>
                              <div class="flex">
                                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i>
                                        <span class="material-symbols-outlined">
                                            mail
                                        </span>
                                    </i>
                                </div>
                                  <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com" name="email">
                              </div>
                          </div>
                      </div>
                      <div class="flex -mx-3">
                          <div class="w-full px-3 mb-12">
                              <label for="" class="text-xs font-semibold px-1">Senha</label>
                              <div class="flex">
                                  <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i>
                                        <span class="material-symbols-outlined">
                                            lock
                                        </span>
                                    </i>
                                </div>
                                  <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************" name="senha">
                              </div>
                          </div>
                      </div>
                      <div class="flex -mx-3">
                          <div class="w-full px-3 mb-5">
                              <button type="submit" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">ENTRAR</button>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>