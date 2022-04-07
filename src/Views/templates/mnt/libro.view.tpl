<h1>{{modeDsc}}</h1>
<hr>
<section class="container-m">
  <form action="index.php?page=mnt.libros.libro&mode={{mode}}&idlibro={{idlibro}}" method="post" >
    <input type="hidden" name="crsxToken" value="{{crsxToken}}" />
    {{ifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label for="idlibro" class="col-5">ID</label>
        <input class="col-7" id="idlibro" name="idlibro" value="{{idlibro}}" placeholder="" type="text">
    </fieldset>
    {{endifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="nombreLibro">nombreLibro</label>
        <input class="col-7" id="nombreLibro" name="nombreLibro" value="{{nombreLibro}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="catid">Categoria</label>
        <select class="col-7" name="catid" id="catid">
          {{foreach catestOptions}}
          <option value="{{value}}" {{selected}}>{{text}}</option>
          {{endfor catestOptions}}
        </select>
    </fieldset class="row flex-center align-center">
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="stocklibro">stocklibro</label>
        <input class="col-7" id="stocklibro" name="stocklibro" value="{{stocklibro}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="preciolibro">preciolibro</label>
        <input class="col-7" id="preciolibro" name="preciolibro" value="{{preciolibro}}" placeholder="" type="text">
    </fieldset>
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="editorial">editorial</label>
        <input class="col-7" id="editorial" name="editorial" value="{{editorial}}" placeholder="" type="text">
    </fieldset>
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
      location.assign("index.php?page=mnt.libros.libros");
    })
  });
</script>
