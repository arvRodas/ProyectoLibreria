<h1>intentosPagos</h1>
<hr>
<table>
  <thead>
    <tr>
      <td>id</td>
      <td>cliente</td>
      <td>monto</td>
      <td>fechaNow</td>
      <td>fechaVencimiento</td>
      <td>estado</td>
      <td><a href="index.php?page=mnt.intentosPagos.intentoPago&mode=INS&id=0">Nuevo</a></td>
    </tr>
  </thead>
  <tbody>
    {{foreach intentosPagos}}
      <tr>
        <td>{{id}}</td>
        <td>
          <a href="index.php?page=mnt.intentosPagos.intentoPago&mode=DSP&id={{id}}">{{cliente}}</a>
        </td>
         <td>{{monto}}</td>
        <td>{{fechaNow}}</td>
        <td>{{fechaVencimiento}}</td>
        <td>{{estado}}</td>
        <td>
          <a href="index.php?page=mnt.intentosPagos.intentoPago&mode=UPD&id={{id}}">Editar</a>
          &nbsp;
          <a href="index.php?page=mnt.intentosPagos.intentoPago&mode=DEL&id={{id}}">Eliminar</a>
          </td>
      </tr>
    {{endfor intentosPagos}}
  </tbody>
</table>
