<h1>categorias</h1>
<hr>
<table>
  <thead>
    <tr>
      <td>id</td>
      <td>categoria</td>
      <td><a href="index.php?page=mnt.categorias.categoria&mode=INS&catid=0">Nuevo</a></td>
    </tr>
  </thead>
  <tbody>
    {{foreach categorias}}
      <tr>
        <td>{{catid}}</td>
        <td>
          <a href="index.php?page=mnt.categorias.categoria&mode=DSP&catid={{catid}}">{{catnom}}</a>
        </td>
         <td>{{catnom}}</td>
        <td>
          <a href="index.php?page=mnt.categorias.categoria&mode=UPD&catid={{catid}}">Editar</a>
          &nbsp;
          <a href="index.php?page=mnt.categorias.categoria&mode=DEL&catid={{catid}}">Eliminar</a>
          </td>
      </tr>
    {{endfor categorias}}
  </tbody>
</table>
