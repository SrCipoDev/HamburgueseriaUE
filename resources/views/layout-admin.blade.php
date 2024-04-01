<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>BurgerApp Admin</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    {{-- <link rel="stylesheet" href="{{ asset('../css/admin.css') }}" /> --}}
    <style>
/* :root,
[data-bs-theme="light"] {
     --bs-btn-bg: #ffc244; 
} */

html {
    font-size: 15px;
}
body {
    font-family: Lato, Helvetica, sans-serif;
}

.opciones-hamburguesas section {
    margin-top: 50px;
}
.productos section {
    margin-top: 40px;
}
.ppal {
    /* border: solid 1px red; */
    /* background: #ccc; */
    max-width: 1700px;
}
.menu {
    height: 100%;
    width: 260px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;

    overflow-x: hidden;
    padding: 20px;
    background-color: #fbfbfb;
}
.content {
    margin-left: 260px;
    padding: 40px 30px;
}
.volver {
    height: 40px;
}

.table.tabla-categorias td {
    padding-top: 20px;
    padding-bottom: 20px;
}

.table.tabla-productos td {
    padding-top: 10px;
    padding-bottom: 10px;
}

h1,
h3 {
    color: #000;
}

h1,
.form-editar {
    font-size: 34px;
    font-weight: 600;
}

h3 {
    font-size: 18px;
    font-weight: 600;
}

.menu .nav .nav-link {
    font-size: 16px;
}

.img-thumbnail {
    border-radius: 3px;
}
.no-image {
    background-color: #e9ecef;
}

.form-editar {
    border-radius: 0;
}

    </style>
  </head>
  <body>
    <div class="container-fluid d-flex ppal">
      <div class="menu d-flex flex-column">
        <h2 class="mt-3">BurguerApp</h2>

        <nav class="nav flex-column flex-grow-1 gap-3 mt-5">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          <a class="nav-link" href="#">Pedidos</a>
          <a class="nav-link" href="categorias.html">Categorías</a>
          <a class="nav-link" href="productos.html">Productos</a>
          <a class="nav-link" href="opciones.html">Opciones hamburguesas</a>
        </nav>
        <div class="user hstack gap-3 py-4 border border-start-0 border-end-0">
          <img src="/images/icons/person-circle.svg" width="34" height="34" alt="" />
          <p>Hamburguesería Compostela</p>
        </div>
      </div>

      <main class="content productos flex-grow-1">
        
         @yield('content')
          
         {{-- <div class="container-fluid"> --}}
         {{-- <div class="main-header d-flex justify-content-between">
            <h1>Productos</h1>
            <button class="btn btn-warning mt-2">+ Añadir nuevo</button>
          </div> --}}

          
        {{-- </div> --}}
      </main>
    </div>
  </body>
</html>
