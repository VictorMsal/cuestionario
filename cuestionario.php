<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title> 
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
<div class="texto_bievenida">
    <marquee direction="left" behavior="scroll">
     <h2>
       Te gustaria ser distribuidor? Contesta el cuestionario siguiente y disfruta de
       todos los beneficios que JDShop Tiene para ti!!!
     </h2> 
    </marquee>
  </div> 

  <form class="login-form" method="post" action=""> 
  
  <div class="centrado_img">
  <a href="https://jdshop.mx/"><img src="public/img/logo.png" class="img_logo"></a>
</div>
    <h2 class="form-title"><b>Formulario distribuidores</b></h2><br>
                <h3 class="form-title"><b>Registro</b></h3><br>
                <h4 class="form-title">Tómese unos minutos para completar el formulario de inscripción. 
                  JDSHOP se pondrá en contacto con usted una vez que se revise su formulario de registro. ¡Gracias!</h4>
                  <br>
      <div class="form-group">
      <label class="titulo-cuest"><b>Empresa</b></label>
      <input type="text" id="empresa" name="empresa"  placeholder="Nombre de la empresa">
    </div>

    <div class="form-group">
        <label class="titulo-cuest"><b>Tipo de empresa</b></label>
        <div>
</div>
        <select >
        <option disabled selected hidden>Favor de seleccionar</option>
        <option value="1">Distribuidor</option>a
        <option value="2">Instalador</option>
        <option value="2">Reveendedor</option>
        </select>
    <div class="form-group">
      <label class="titulo-cuest"><b>Telefono</b></label>
      <input type="tel" id="telefono" name="telefono" placeholder="Telefono" required  >
    </div>
    <div class="form-group">
      <label class="titulo-cuest"><b>Numero de impuesto</b></label>
      <input type="number" id="nimpuesto" name="nimpuesto" placeholder="Numero de impuesto" required >
    </div>

    <div class="form-group">
      <label class="titulo-cuest"><b>Pais</b></label>
      <input type="text" id="pais" name="pais" placeholder="Pais" required>
    </div> 

    <div class="form-group">
      <label class="titulo-cuest"><b>Provincia/Estado</b></label>
      <input type="text" id="p/e" name="p/e" placeholder="Provincia/Estado" required>
    </div>
    <div class="form-group">
      <label class="titulo-cuest"><b>¿Ya tiene una cuenta?</b><a href="index.html" class="iniciar_sesion">&nbsp;Inicia sesión</a></label>
    <div class="form-group">
      <button type="submit" name='submit' class="login-btn">Enviar</button>
    </div>
  </form> 
</body>
</html>