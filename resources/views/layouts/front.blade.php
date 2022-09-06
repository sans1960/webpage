<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('css/styles.css')}}  ">
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}" defer></script>
</head>
<body>
    <a href="{{ route('index')}}" class="nav-link">
        <div class="container-fluid d-flex justify-content-center align-items-center one">
          <div class="d-flex two  justify-content-center align-items-center">
            <div class="d-flex justify-content-center align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart4 " viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>
            </div>
            <div class="d-flex flex-column ms-1 justify-content-start align-items-start mt-2">
              <h4>vender-online.cl</h4>
              <p class="mini">e-commerce & marketing digital</p>
            </div>
            </div>
        </div>
      </a>
      
              <ul class="d-flex flex-row justify-content-center align-items-center cuatro two lista p-1">
               
                <li class="nav-item dropdown me-5">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                  </a>
                  <ul class="dropdown-menu me-5">
                    <li><a class="dropdown-item p-1 " href="{{ route('branding')}}"> Branding & Diseño Grafico </a></li>
                    <li><a class="dropdown-item p-1" href="{{ route('desarrollo')}}"> Desarrollo Web & e-Commerce</a></li>
                    <li><a class="dropdown-item p-1" href="{{ route('marketing')}}">Marketing & Publicidad Online </a></li>
                  </ul>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('contacto')}}">Contacto</a>
                </li>
              
           
              </ul>
@yield('content')

<footer class=" mt-5 py-3 one ">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-4 text-white d-flex justify-content-center align-items-center">
            <p class="text-center mt-2">© 2022 Comercial e Industrial Nahuel & Millaray SpA </p>
          </div>
          <div class="col-md-4 text-white d-flex justify-content-center align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
          </svg>
           <a href="mailto:correo@vender-online.cl" class="nav-link ms-2"> correo@vender-online.cl  </a> 
          </div>
          <div class="col-md-4 text-white  d-flex justify-content-center align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
          </svg>
           <a href="tel:+569 5944 0409" class="nav-link ms-2"> +56959440409   </a> 
          </div>
      </div>
    </div>
  </footer>
  @yield('js')
</body>
</html>