@extends('layout-admin')

@section('content')
   
<div class="container-fluid">
   <div class="volver mb-4">
     <a href="productos.html"
       ><img
         src="/images/icons/arrow-left-short.svg"
         alt="Volver"
         width="26"
         height="26"
       />Productos</a
     >
   </div>

   <form class="">
     <div class="main-header hstack gap-3 mb-5">
       <input
         type="text"
         class="form-control form-editar border-0 border-bottom"
         id="inputEmail4"
         value="Hamburguesa con queso"
       />
       <button class="btn btn-warning ms-auto mt-2">Eliminar</button>
       <button class="btn btn-warning mt-2">Guardar</button>
     </div>

     <div class="wrapper row">
       <div class="col-6">
         <div class="mb-3">
           <label for="descripcion" class="form-label">Descripción</label>
           <textarea class="form-control" id="descripcion" rows="3"></textarea>
         </div>
         <div class="mb-3">
           <label for="categoria" class="form-label">Categoría</label>
           <select id="categoria" class="form-select w-auto">
             <option selected>Elige...</option>
             <option>Hamburguesas</option>
             <option>Ensaladas</option>
             <option>Bebidas</option>
           </select>
         </div>
         <div class="mb-3" style="width: 100px">
           <label for="precio" class="form-label">Precio</label>
           <div class="input-group">
             <span class="input-group-text">€</span>
             <input type="text" class="form-control" id="precio" />
           </div>
         </div>
       </div>

       <div class="col-2">Imagen</div>
     </div>
   </form>
 </div>


@endsection