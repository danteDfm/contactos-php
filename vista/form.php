<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="css/aside.css" rel="stylesheet" type="text/css">
    <link href="css/tableL.css" rel="stylesheet" type="text/css">

    <title>Agenda</title>
</head>
<body>

<header class="cabecera">

    <ul class="listContent">
    
        <li class="listItem1"><a href="">Inicio</a></li>
        <li class="listItem2"><a href="">Curiosidades</a></li>
        <li class="listItem3"><a href="">Contactos</a></li>

    </ul>

</header>

    <aside class="asideIzquierdo">

    <form class="formulario" action="../controlador/createController.php" method="post">
        <h3>ingresar contactos</h3>
        <div class="i1"><input name="nombre" type="text" placeholder="NickName" required></div>
        <div class="i2"><input name="celular" type="text" placeholder="Celular" required></div>
        <div class="i3"><input name="instagram" type="text" placeholder="Facebook" required></div>
        <div class="i4"><input name="facebook" type="text" placeholder="Instagram " required></div>
        <div><input type="submit"></div>
    </form>

    </aside>


    <ul class="table">
  

        <?php require('../controlador/readcontroller.php'); ?>
       

            <?php   while($element=$consult->fetch(PDO::FETCH_ASSOC)){ ?>

      <div class="contentFilas">
        
        <li class="t1"> <?php echo $element['nombre']; ?> </li>
        <li class="t2"> <?php echo $element['celular']; ?> </li>
        <li class="t3"> <?php echo $element['instagram']; ?> </li>
        <li class="t4"> <?php echo $element['facebook']; ?> </li>
        <?php $id = $element['id_contactos']; ?>
    
       <?php echo "<a class='botomB' href='../modelo/delete.php?id=$id'>enviar</a>"; ?>
    
      </div>

      <?php  } ?>   
    </ul>


    
</body>
</html>

