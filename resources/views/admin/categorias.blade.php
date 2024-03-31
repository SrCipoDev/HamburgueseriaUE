@extends('layout-admin')

@section('content')

<div class="container-fluid">
   <div class="main-header d-flex justify-content-between">
     <h1>Categorías</h1>
     <button class="btn btn-warning mt-2">+ Añadir categoría</button>
   </div>

   <div class="wrapper" style="max-width: 700px">
     <section>
      
       <table class="table align-middle tabla-categorias">
         <thead>
           <tr>
             <th scope="col">Nombre</th>

             <th scope="col" class="text-end">Nº productos</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td><a href="">Hamburguesas</a></td>
             <td class="text-end">4</td>
           </tr>
           <tr>
            <td><a href="">Ensaladas</a></td>
             
             <td class="text-end">2</td>
           </tr>
           <tr>
            <td><a href="">Bebidas</a></td>
             
             <td class="text-end">8</td>
           </tr>
         </tbody>
       </table>
     </section>
   </div>
 </div>

@endsection