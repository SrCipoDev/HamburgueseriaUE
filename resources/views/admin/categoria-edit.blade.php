@extends('layout-admin')

@section('content')
   
<div class="container-fluid">
   <div class="volver mb-4">
     <a href="categorias.html"
       ><img
         src="/images/icons/arrow-left-short.svg"
         alt="Volver"
         width="26"
         height="26"
       />Categorías</a
     >
   </div>

   <form class="">
     <div class="main-header hstack gap-3 mb-5">
       <input
         type="text"
         class="form-control form-editar border-0 border-bottom"
         id="inputEmail4"
         value="Hamburguesas"
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
         
         
       </div>

      
     </div>
   </form>
 </div>


@endsection