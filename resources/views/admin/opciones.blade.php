@extends('layout-admin')

@section('content')
   
<div class="container-fluid">
   <div class="main-header">
     <h1>Opciones hamburguesas</h1>
     <p>Opciones de personalización de hamburguesas.</p>
   </div>

   <div class="wrapper" style="max-width: 500px">
     <section>
       <h3>Punto de la carne</h3>
       <p class="text-body-tertiary fst-italic">
         Elegir 1
         <span class="badge ms-2 text-secondary text-bg-light">Obligatorio</span>
       </p>

       <div class="form-check form-check-inline">
         <input
           class="form-check-input"
           type="radio"
           name="coccion"
           id="opcionCoccion1"
           value="Bien hecha"
         />
         <label class="form-check-label" for="opcionCoccion1">Bien hecha</label>
       </div>
       <div class="form-check form-check-inline">
         <input
           class="form-check-input"
           type="radio"
           name="coccion"
           id="opcionCoccion2"
           value="Al punto"
         />
         <label class="form-check-label" for="opcionCoccion2">Al punto</label>
       </div>
       <div class="form-check form-check-inline">
         <input
           class="form-check-input"
           type="radio"
           name="coccion"
           id="opcionCoccion3"
           value="Poco hecha"
         />
         <label class="form-check-label" for="opcionCoccion3">Poco hecha</label>
       </div>
     </section>
     <section>
       <h3>Tipo de pan</h3>
       <p class="text-body-tertiary fst-italic">
         Elegir 1
         <span class="badge ms-2 text-secondary text-bg-light">Obligatorio</span>
       </p>
       <table class="table">
         <tr>
           <td>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="pan" value="Pan normal" />
               <label class="form-check-label" for="inlineRadio2">Pan normal</label>
             </div>
           </td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
         <tr>
           <td>
             <div class="form-check form-check-inline">
               <input
                 class="form-check-input"
                 type="radio"
                 name="pan"
                 value="Pan sin gluten"
               />
               <label class="form-check-label" for="inlineRadio2">Pan sin gluten</label>
             </div>
           </td>
           <td>+1,20 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
       </table>
       <button class="btn btn-warning mt-2">+ Añadir tipo de pan</button>
     </section>
     <section>
       <h3>Ingredientes extra</h3>
       <div class="d-flex">
         <p class="text-body-tertiary fst-italic">Escoger hasta</p>

         <select
           class="form-select form-select-sm w-auto mx-2"
           aria-label="Default select example"
         >
           <option value="1" selected>1</option>
           <option value="2">2</option>
           <option value="3">3</option>
         </select>
         <p class="text-body-tertiary fst-italic">opciones</p>
       </div>

       <table class="table">
         <tr>
           <td>Extra 1</td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
         <tr>
           <td>Extra 1</td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
         <tr>
           <td>Extra 1</td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
         <tr>
           <td>Extra 1</td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
         <tr>
           <td>Extra 1</td>
           <td>+0,00 €</td>
           <td class="text-end">
             <img
               class="me-1"
               src="/images/icons/pencil-square.svg"
               width="22"
               height="22"
               alt="Editar"
             />
             <img src="/images/icons/trash3-fill.svg" width="20" height="20" alt="Eliminar" />
           </td>
         </tr>
       </table>
       <button class="btn btn-warning mt-2">+ Añadir ingredientes extra</button>
     </section>
   </div>
 </div>


@endsection