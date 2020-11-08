<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reportes de Libros</title>
    <link rel="stylesheet" href="Reportes/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="Reportes/logo_1.png">
      </div>
      <h1>REPORTE DE LIBROS</h1>
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
            <th class="service">COD</th>
            <th class="desc">NOMBRE</th>
            <th class="desc">AUTOR</th>
            <th>ISBN</th>
            <th>PRECIO</th>
          </tr>
        </thead>
        <tbody>
            <?php 
            $acum=0;
            foreach ($data["libros"]as $dato)
            {
            ?>
                      <tr>
            <td class="service"><?=$dato["codLibro"]?></td>
            <td class="desc"><?=$dato["nombre"]?></td>
            <td class="desc"><?=$dato["nombreAutor"]?></td>
            <td class="unit"><?=$dato["ISBN"]?></td>
            <td class="qty">S/.<?=$dato["precio"]?></td>
          </tr>
            <?php
            $acum=$acum+$dato["precio"];
            }
            
            ?>

          

          <tr>
            <td colspan="4" class="grand total">    TOTAL</td>
            <td class="grand total">S/.<?=$acum?></td>
          </tr>
        </tbody>
      </table>

    </main>
  </body>
</html>