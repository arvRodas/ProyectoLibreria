<h1>clientes</h1>
<hr>
<table>
  <thead>
    <tr>
      <td>idCliente</td>
      <td>nombre</td>
      <td>apellido</td>
      <td>direccion</td>
      <td>telefono</td>
      <td>correo</td>
      <td>estado</td>
      <td><a href="index.php?page=mnt.clientes.cliente&mode=INS&idCliente=0">Nuevo</a></td>
    </tr>
  </thead>
  <tbody>
    {{foreach clientes}}
      <tr>
        <td>{{idCliente}}</td>
        <td>
          <a href="index.php?page=mnt.clientes.cliente&mode=DSP&idCliente={{idCliente}}">{{nombre}}</a>
        </td>
        <td>{{apellido}}</td>
        <td>{{direccion}}</td>
         <td>{{telefono}}</td>
        <td>{{correo}}</td>
        <td>{{estado}}</td>
        <td>
          <a href="index.php?page=mnt.clientes.cliente&mode=UPD&idCliente={{idCliente}}">Editar</a>
          &nbsp;
          <a href="index.php?page=mnt.clientes.cliente&mode=DEL&idCliente={{idCliente}}">Eliminar</a>
          </td>
      </tr>
    {{endfor clientes}}
  </tbody>
</table>
