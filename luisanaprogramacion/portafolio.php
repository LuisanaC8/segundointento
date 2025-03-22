<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c1a6962e2d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Miller</title>
    <link rel="stylesheet" href="style.css">   
    <link rel="icon" type="image/png" href="perro.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">


</head>
<header>
    <form action="">
    <ul class="fuente">

        <li><a href="#suinicio">Inicio</a></li>
        <li><a href="#suhistoria">Historia</a></li>
        <li><a href="#suscaracteristicas">Características</a></li>
            
    </ul>
</header>
<body>
 

    <section id="suinicio">
        <img src="perro2.png" alt="Foto principal" class="image">

        <h1 style="color: rgb(30, 60, 126);" >
            ¿Quién es Miller?
        </h1>

        <p class="texto" style="margin-bottom: 20px;">
            Miller es mi mascota, su nombre completo en realidad
            es Miller Fabian Salas Rojas (Si, tiene nombre completo).
            Miller es un perrito con aproximadamente 8 años, pero en edad 
            perruna esos serian 48 años (Asi es, Miller es mayor que yo, su dueña).
        </p>
        <p class="texto" style="margin-bottom: 20px;"    >
            A Miller le gusta mucho salir a pasear, todos los días salimos a que haga sus
            necesidades y todos los dias mantiene la misma emoción.
            Es un poco odioso, no le gustan mucho las fotos, la mayoría del tiempo
            suele ignorar a todo el mundo, sin embargo eso no hace que todos lo amemos menos.
                     
        </p>
        <p class="texto">
             Miller es el quinto integrante de mi familia, llegó de una manera inesperada, pues 
             a pesar de que tiene 8 años, empezó a formar parte de nuestra familia a sus 3 años aproximadamente. 
             Su comida favorita es el pollo, aunque en realidad tiene una muy larga lista de comida favorita, es un
             perrito muy protector y ladrón (que ladra mucho xd). Ama conocer a otros perros e incluso gatos,
             y sin duda alguna, es mi animal espiritual.
        </p>  
    </section>

    <section class="cuadro" id="suhistoria">
        <h1 class="segundo" style="left: -600px;"> Historia </h1>  

        <p class="otrotexto" style="margin-bottom: 10px">
            Miller fue adoptado desde bebé por una de mis tias, ella lo tuvo por 3 años aproximadamente, luego de eso
             
        </p>
        <p class="otrotexto"style="margin-bottom: 10px">
            en vista de todo lo que estaba ocurriendo en el país, 
            mi tía junto con su familia tuvieron que emigrar a 
        </p>
        <p class="otrotexto"style="margin-bottom: 10px">
            España, pero el pasaje de Miller era muy
            costoso, por lo cual no podian llevarlo. Mi tía busco personas 
        </p>
        
        <p class="otrotexto"style="margin-bottom: 10px">
            que lo pudieran cuidar solo por un
            tiempo breve, asi ella podia irse,  trabajar y poder hacer el
        </p>
        <p class="otrotexto"style="margin-bottom: 10px" >
           dinero suficiente para llevarselo luego.  Claramente yo me ofreci a cuidarlo, pero las cosas 
           no pasaron 
        </p>
        <p class="otrotexto"style="margin-bottom: 10px">
           exactamente como se planeaban. Mi tía al final no tuvo la oportunidad de 
           llevarselo, hoy en dia, ella tiene
        </p>
           <p class="otrotexto"style="margin-bottom: 10px">
        otro perrito, y bueno, nosotros aca nos encariñamos mucho con Miller y estoy segura que el también con
    </p>
    <p class="otrotexto">
        nosotros, convirtiéndose en parte de nuestra familia.
        </p>
      
        <img src="miller.png" alt="Segunda imagen" class="circulo" style="right: 70px;">
    </section> 

    <section class="centro" id="suscaracteristicas">

            <h1  class="segundo"style="margin-top: 120px; margin-left: 390px;">Características</h1>
            <table class="fuente">
                    <tr>
                        <td>Pelaje</td>
                        <td>Largo, sedoso con tonalidades grises y doradas</td>
                    </tr>
                    <tr>
                       <td>Color de ojos</td>
                       <td>Marrones</td>
                    </tr>
                    <tr>
                        <td>Ladrido</td>
                        <td>Agudo</td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento</td>
                        <td>8 de septiembre de 2017</td>
                    </tr>
                    <tr>
                        <td>Estado civil</td>
                        <td>Soltero</td>
                    </tr>
                    <tr>
                        <td>Temperamento</td>
                        <td>Tranquilo</td>
                    </tr>
                    <tr>
                        <td>Pasatiempos</td>
                        <td>Dormir, pasear, jugar y comer</td>
                    </tr>
                   
            </table>

    </section>

   
   <h1 style="margin-top: -100px; margin-left: 600px;">Comentarios</h1>
<section style="margin-top: 120px;" class="fuente">
  <div class="container">
    <form method="POST">
    <?php
    include "conn.php";
    include "controller/new_user.php"
    ?>






    <div class="row">
      <div class="col-md-4" style="padding: 20px; background-color: #f0f0f0;">
        <div class="formulario">
          <label for="">Nombre y apellido</label>
          <input name="nombreyapellido" type="text" placeholder="Nombre completo" class="form-control" style="margin-bottom: 20px;>
        </div>
        <div class="formulario">
          <label for="">Usuario</label>
          <input name="usuario" type="text" placeholder="Ingresa tu usuario" class="form-control" style="margin-bottom: 20px;">
        </div>
        <div class="formulario">
          <label for="">Correo</label>
          <input name="email" type="email" placeholder="Ingresa tu correo" class="form-control" style="margin-bottom: 20px;">
        </div>
        <div class="formulario">
          <label for="">Comentarios</label>
          <textarea name="nota" placeholder="Agrega tu comentario" class="form-control" style="margin-bottom: 20px;"></textarea>
        </div>
        <button name="enviar" type="submit" class="btn btn-primary w-100" value="ok">Enviar</button>
      </div>
      </form>
      <div class="col-md-8"></div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12" style="padding: 20px; overflow-y: auto;">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Usuario</th>
              <th scope="col">Correo</th>
              <th scope="col">Comentario</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>

          
          <?php
          include "conn.php";
          $sql = $conn->query("select * from portafolio");
          while ($datos = $sql->fetch_object()){?>



            <tr>
              <th><?=$datos->id?></th>
              <td><?=$datos->nombreyapellido ?></th>
              <td><?=$datos->usuario ?></th>
              <td><?=$datos->email ?></th>
              <td><?=$datos->nota?></th>

              <td>
                <a href="" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="btn btn-small btn-secondary"><i class="fa-solid fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<footer class="fuente">
  <ul style="margin-left: 470px;">
    <li><a href=""> <span style='font-size:25px;'>&#128062;</span> </a></li>
    <li><a href="https://www.purina.es/encuentra-mascota/razas-de-perro/yorkshire-terrier">Más sobre los Yorkies</a></li>
    <li><a href="https://t.me/Wisana1">Contacto</a></li>
  </ul>
</footer>
</body>
</html>
