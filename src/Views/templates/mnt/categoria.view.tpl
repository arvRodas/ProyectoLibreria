<h1>{{modeDsc}}</h1>
<hr>
<section class="container-m">
  <form action="index.php?page=mnt.categorias.categoria&mode={{mode}}&catid={{catid}}" method="post" >
    <input type="hidden" name="crsxToken" value="{{crsxToken}}" />
    {{ifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label for="catid" class="col-5">ID</label>
        <input class="col-7" id="catid" name="catid" value="{{catid}}" placeholder="" type="text">
    </fieldset>
    {{endifnot isInsert}}
    <fieldset class="row flex-center align-center">
        <label class="col-5" for="catnom">Categoria</label>
        <input class="col-7" id="catnom" name="catnom" value="{{catnom}}" placeholder="" type="text">
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
      location.assign("index.php?page=mnt.categorias.categorias");
    })
  });
</script>
