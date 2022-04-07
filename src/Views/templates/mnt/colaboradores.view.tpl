<h1>colaboradores</h1>
<hr>
<table>
  <thead>
    <tr>
      <td>idColaborador</td>
      <td>nombre</td>
      <td>apellido</td>
      <td>direccion</td>
      <td>correo</td>
       <td>fechaNacimiento</td>
      <td>telefono</td>
      <td>sexo</td>
      <td><a href="index.php?page=mnt.colaboradores.colaborador&mode=INS&idColaborador=0">Nuevo</a></td>
    </tr>
  </thead>
  <tbody>
    {{foreach colaboradores}}
      <tr>
        <td>{{idColaborador}}</td>
        <td>
          <a href="index.php?page=mnt.colaboradores.colaborador&mode=DSP&idColaborador={{idColaborador}}">{{nombre}}</a>
        </td>
          <td>{{apellido}}</td>
        <td>{{direccion}}</td>
         <td>{{correo}}</td>
        <td>{{fechaNacimiento}}</td>
        <td>{{telefono}}</td>
        <td>{{sexo}}</td>
        <td>
          <a href="index.php?page=mnt.colaboradores.colaborador&mode=UPD&idColaborador={{idColaborador}}">Editar</a>
          &nbsp;
          <a href="index.php?page=mnt.colaboradores.colaborador&mode=DEL&idColaborador={{idColaborador}}">Eliminar</a>
          </td>
      </tr>
    {{endfor colaboradores}}
  </tbody>
</table>
