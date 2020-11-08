<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reportes de Clientes</title>
    <link rel="stylesheet" href="Reportes/style.css" media="all" />
  </head>
  <body>
      <header class="clearfix">
      <div id="logo">
        <img src="Reportes/logo_1.png">
      </div>
      <h1>REPORTE DE CLIENTES</h1>
      <div id="company" class="clearfix">
        <div>Nombre de la Empresa</div>
        <div>Millenium S.A.C</div>
        <div>Av. PERÚ 3124<br />San Martin de Porres,PERU</div>
        <div>(+51) 968651128</div>
        <div><a href="mailto:company@example.com">Millenium@gmail.com</a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">DNI</th>
            <th class="desc">Apellidos</th>
            <th class="desc">Nombres</th>
            <th class="desc" colspan="2">Direccion</th>
            <th class="desc">Codigo Postal</th>
            <th class="desc">Telefono</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $acum=0;
            foreach ($data["clientes"]as $dato)
            {
            ?>
                      <tr>
            <td class="service"><?=$dato["cuenta"]?></td>
            <td class="desc"><?=$dato["apellidos"]?></td>
            <td class="unit"><?=$dato["nombres"]?></td>
            <td class="qty" colspan="2"><?=$dato["direccion"]?></td>
            <td class="desc"><?=$dato["cpostal"]?></td>
            <td class="unit"><?=$dato["telefono"]?></td>
          </tr>
            <?php
            $acum++;
            }
            
            ?>

          

          <tr>
            <td colspan="6" class="grand total">    TOTAL</td>
            <td class="grand total"><?=$acum?> clientes</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">

      </div>
    </main>

  </body>
</html>