<h1>Libros</h1>
<hr>
<table>
  <thead>
    <tr>
      <td>idlibro</td>
      <td>nombreLibro</td>
      <td>catid</td>
      <td>stocklibro</td>
      <td>preciolibro</td>
      <td>editorial</td>
      <td><a href="index.php?page=mnt.libros.libro&mode=INS&idlibro=0">Nuevo</a></td>
    </tr>
  </thead>
  <tbody>
    {{foreach libros}}
      <tr>
        <td>{{idlibro}}</td>
        <td>
          <a href="index.php?page=mnt.libros.libro&mode=DSP&idlibro={{idlibro}}">{{nombreLibro}}</a>
        </td>
         <td>{{catid}}</td>
        <td>{{stocklibro}}</td>
        <td>{{preciolibro}}</td>
        <td>{{editorial}}</td>
        <td>
          <a href="index.php?page=mnt.libros.libro&mode=UPD&idlibro={{idlibro}}">Editar</a>
          &nbsp;
          <a href="index.php?page=mnt.libros.libro&mode=DEL&idlibro={{idlibro}}">Eliminar</a>
          </td>
      </tr>
    {{endfor libros}}
  </tbody>
</table>
