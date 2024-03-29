<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LA FLORA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="icon" href="img/logo.png" type="image/x-ico">
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="importante">
    
   <nav class="navbar navbar-expand-lg bg-primary" class="navbar bg-dark " data-bs-theme="dark"">
    <div class="container-fluid">
    <nav class="navbar" >
    <div class="container">
      <a class="navbar-brand " href="index.php">
       <img src="img/logo.png" alt="Bootstrap" width= 80px height=50px> 
    </a>
    </div>
     </nav>
      <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><h4 class="fw-bold">Inicio</h5></a>
          </li>
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="pedidos.html"><h4 class="fw-bold">ConsultarPedidos</h5></a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
    
<div class="container-fluid">
<div class="row">
<div class="fondo-importante-respuesta">  
<h1 class="text-light primer-texto">Gracias en breve responderemos a tus dudas o comentarios.</h1>

  <?php
// Obtener el número de pedido enviado desde el formulario
if (isset($_POST["numeroPedido"])) {
    $numeroPedidoBuscado = $_POST["numeroPedido"];
    
    // Cargar el contenido del archivo JSON de pedidos
    $jsonPedidos = file_get_contents("pedidos.json");
    $pedidos = json_decode($jsonPedidos, true);
    
    // Buscar el pedido con el númeroPedido buscado
    $pedidoEncontrado = null;
    foreach ($pedidos as $pedido) {
        if ($pedido["numeroPedido"] === $numeroPedidoBuscado) {
            $pedidoEncontrado = $pedido;
            break;
        }
    }
    
    if ($pedidoEncontrado) {
        // Mostrar los detalles del pedido
        echo "Número de Pedido: " . $pedidoEncontrado["numeroPedido"] . "<br>";
        echo "Estado: " . $pedidoEncontrado["estado"] . "<br>";
        echo "Nombre del Producto: " . $pedidoEncontrado["nombreProducto"] . "<br>";
        echo "Precio: $" . $pedidoEncontrado["precio"] . "<br>";
        // Agregar más detalles aquí...
    } else {
        echo "No se encontraron coincidencias.";
    }
} else {
    echo "Error: El número de pedido no fue proporcionado.";
}
?>
</p>
</div> 
</div> 
</div>
</div>


<footer class="bg-primary">
    <div class="container-fluid">
      <div class="footer-titulos">
        <div class="row">
          <div class="col-6 col-md-2 mb-3 clase-footer">
            <h5 class="primera-colmuna-footer">Acerca de</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Empresa</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Misión y
                  Valores</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Cuenta</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Blog</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Preguntas</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3 clase-footer">
            <h5 class="primera-colmuna-footer2">Soporte</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Facturación</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Ayuda</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Mis Compras</a>
              </li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Garantias</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Promociones</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3 clase-footer">
            <h5 class="primera-colmuna">Contacto</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Whatsapp</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white titulo-importante">Chat</a></li>
              <li class="nav-item mb-2">
                <p class="text-white hora-atencion">Hora de Atencion:
                <p class="text-white texto-lahora">Lunes a Domingo de 8:00 a 21:00 hrs.</p>
                </p>
              </li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3 clase-footer-suscribirse">
            <form>
              <h5>Subscribirse a LA FLORA</h5>
              <p>Recibe grandes promociones en nuestra gran página de Arreglos a tu mejor medida.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Ingresa tu e-mail</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Ingresa tu e-mail">
                <button class="btn btn-outline-dark boton-buscar-footer" type="submit">Suscribirse</button>
              </div>
            </form>
          </div>
        </div>
      </div>


      <div class="footer-descripcion-empresa">
        <div class="d-flex flex-column flex-sm-row pt-4 my-2 border-top">
          <div class="col-sm-9 col-lg-9 col-md-9 col-xl-9">
            <p class="text-light palabra-compania">© 2023 LA FLORA Inc. All rights reserved.</p>
            <div class="pagos-formas">
              <div>
                <p class="PAGO">Formas de pago:</p>
              </div>
              <div class="empresas-pago">
                <ul class="list-unstyled d-flex pagos-lista">
                  <li class="pagos ms-4">
                    <img src="img/Pagos/Paypal_pago.jpg" alt="" width=125px height=28px>
                  </li>

                  <li class="pagos ms-4">
                    <img src="img/Pagos/visa_Pago.jpg" alt="" width=120px height=28px>
                  </li>
                  <li class="pagos ms-4">
                    <img src="img/Pagos/ma-bc_mastercard-logo_eq.png" alt="" width=72px
                      height=28px>
                  </li>
                  <li class="pagos ms-4">
                    <img src="img/Pagos/american.png" alt="" width=100px height=28px>
                  </li>
                  <li class="pagos ms-4">
                    <img src="img/Pagos/bitcoin.jpg" alt="" width=130px height=28px>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </footer>    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="blog-json.js"></script>
  </body>
</html>