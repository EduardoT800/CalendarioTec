<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <link href="css\calendariocss\master.css" rel="stylesheet" type="text/css">
    <link href="css\calendariocss\plantilla.css" rel="stylesheet" type="text/css">
    <link href="css\calendariocss\plantilla_menu.css" rel="stylesheet" type="text/css">
    <link href="css\calendariocss\calendario.css" rel="stylesheet" type="text/css">
    <link href="css\calendariocss\pop_up.css" rel="stylesheet" type="text/css">



    <title>@yield('title')</title>
  </head>

  <body>

    <header>
      <h1>Aqui va el menu del tec</h1>
    </header>

    <div class="container">



      @yield('content')


    </div>

    <footer>
      Instituto Tecnológico Superior de Calkiní en el Estado de Campeche, México ©2018
    </footer>


  </body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js\calendario\ocultador.js"></script>
  @yield('Scripts')
  <!-- <script src="{{ asset('js/calendario.js') }}"></script> -->

</html>
