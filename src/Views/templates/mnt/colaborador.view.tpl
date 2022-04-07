<h1>{{modeDsc}}</h1>
<hr>
<section class="container-m">
  <form action="index.php?page=mnt.colaboradores.colaborador&mode={{mode}}&idColaborador={{idColaborador}}" method="post" >
    <input type="hidden" name="crsxToken" value="{{crsxToken}}" />
    {{ifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label for="idColaborador" class="col-5">ID</label>
        <input class="col-7" id="idColaborador" name="idColaborador" value="{{idColaborador}}" placeholder="" type="text">
    </fieldset> 
    {{endifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="nombre">nombre</label>
        <input class="col-7" id="nombre" name="nombre" value="{{nombre}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="apellido">apellido</label>
        <input class="col-7" id="apellido" name="apellido" value="{{apellido}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="direccion">direccion</label>
        <input class="col-7" id="direccion" name="direccion" value="{{direccion}}" placeholder="" type="text">
    </fieldset>
     <fieldset class="row flex-center align-center">
        <label class="col-5" for="correo">Correo</label>
        <input class="col-7" id="correo" name="correo" value="{{correo}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="fechaNacimiento">fechaNacimiento</label>
        <input class="col-7" id="fechaNacimiento" name="fechaNacimiento" value="{{fechaNacimiento}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="telefono">telefono</label>
        <input class="col-7" id="telefono" name="telefono" value="{{telefono}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="sexo">sexo</label>
        <select class="col-7" name="sexo" id="sexo">
          {{foreach catestOptions}}
          <option value="{{value}}" {{selected}}>{{text}}</option>
          {{endfor catestOptions}}
        </select>
    </fieldset class="row flex-center align-center">
    <fieldset class="row flex-end align-center">
        <button type="submit" name="btnConfirmar" class="btn primary">Confirmar</button>
        &nbsp;<button type="button" id="btnCancelar" class="btn secondary">Cancelar</button>
        &nbsp;
    </fieldset>
  </form>
</section>
<script>
  /* */
  document.addEventListener("DOMContentLoaded", (e)=>{
    document.getElementById("btnCancelar").addEventListener('click', (e)=>{
      e.preventDefault();
      e.stopPropagation();
      location.assign("index.php?page=mnt.colaboradores.colaboradores");
    })
  });
</script>
