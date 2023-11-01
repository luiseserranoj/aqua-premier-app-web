<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="login/css/login.css">
      
      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

      <link rel="shortcut icon" type="image/png" href="{{ asset('dist/img/aqua-service-vip.png') }}">
      <link rel="shortcut icon" sizes="192x192" href="{{ asset('dist/img/aqua-service-vip.png') }}">

    </head>
    

    <body>

      <main>
        
        <div class="container-fluid">
         <div class="row">
          <div class="col-sm-6 login-section-wrapper">
           <div class="brand-wrapper">
            <a href="/"> <img src="login/images/logo.png" alt="logo" style="width:250px;height:125px;"> </a>
           </div>
          
           <div class="login-wrapper my-auto">
            

            {{ $slot }}

            
          </div>
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
           <img src="login/images/login.jpg" alt="login image" class="login-img">
          </div>
         </div>

       </div>
      </main>
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>

</html>
