@extends('layout-admin')

@section('content')
<div class="container-fluid">
   <div class="main-header d-flex justify-content-between">
     <h1>Productos</h1>
     <button class="btn btn-warning mt-2">+ Añadir producto</button>
   </div>

   <div class="wrapper" style="max-width: 700px">
     <section>
       <div class="filters d-flex mb-4">
         <select class="form-select w-auto mx-2" aria-label="Categorías">
           <option value="todas" selected>Todas las categorías</option>
           <option value="Hamburguesas">Hamburguesas</option>
           <option value="Bebidas">Bebidas</option>
           <option value="Postres">Postres</option>
         </select>
         <input
           class="form-control"
           type="search"
           placeholder="Buscar"
           aria-label="Search"
           style="width: 260px"
         />
       </div>
       <table class="table align-middle tabla-productos">
         <thead>
           <tr>
             <th scope="col">Imagen</th>
             <th scope="col">Nombre</th>
             <th scope="col">Categoría</th>
             <th scope="col" class="text-end">Precio</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td style="width: 70px">
               <img
                 src="/images/icons/image.svg"
                 class="img-thumbnail no-image"
                 width="50"
                 height="50"
                 alt="Eliminar"
               />
             </td>
             <td><a href="">Hamburguesa con queso y mucho más</a></td>
             <td>Hamburguesas</td>
             <td class="text-end">6,50 €</td>
           </tr>
           <tr>
             <td>
               <img
                 src="/images/icons/image.svg"
                 class="img-thumbnail no-image"
                 width="50"
                 height="50"
                 alt="Eliminar"
               />
             </td>
             <td><a href="">Hamburguesa con queso</a></td>
             <td>Hamburguesas</td>
             <td class="text-end">6,50 €</td>
           </tr>
           <tr>
             <td>
               <img
                 src="/images/icons/image.svg"
                 class="img-thumbnail no-image"
                 width="50"
                 height="50"
                 alt="Eliminar"
               />
             </td>
             <td><a href="">Hamburguesa con queso</a></td>
             <td>Hamburguesas</td>
             <td class="text-end">6,50 €</td>
           </tr>
         </tbody>
       </table>
     </section>
   </div>
 </div>

@endsection