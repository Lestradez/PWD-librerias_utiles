<?php
include_once __DIR__.'/../../includes/configuracion.php';
include_once(STRUCTURE_PATH.'head.php');
?>
<main class="p-5 text-center bg-light">
  <h1 class="mb-3">Librería reCaptcha</h1>
  <h4 class="mb-3">Versiones: reCaptcha v2.1 - reCaptcha V3.</h4>
  
  <div class="card shadow w-75 m-auto mb-3">
    <div class="card-header">
      <div class="row gx-3 gy-3 ">
        <h2 > ¿Qué es CAPTCHA? </h2>  
      </div>
    </div>
    <div class="card-body">
      <p>Los captchas (acrónimo de Completely Automated Public Turing test
        to tell Computers and Humans Apart, Prueba de Turing completamente
        automática y pública para diferenciar ordenadores de humanos) son unos
        "puzzles" que los programadores incluyen en su sitio web para asegurarse de
        que los visitantes que quieren interactuar con el contenido son personas, y no
        robots spam que tratan de registrarse en el sitio web, incluir comentarios en
        blogs, etc. Estos "puzzles" consisten en pruebas que requieren inteligencia
        humana, es decir, pruebas que las personas podemos resolver mejor que los
        robots.</p>
        
        <p>reCAPTCHA V2 y V3 es un servicio de Google diseñado para proteger los sitios web y las aplicaciones web contra el abuso de bots y la presentación automatizada de formularios. Se basa en la premisa de que los humanos y las máquinas tienen habilidades de resolución de pruebas diferentes. Por lo tanto, reCAPTCHA presenta a los usuarios desafíos CAPTCHA que son fáciles para los humanos de resolver pero difíciles para los bots.</p>
        <p>Los captchas benefician al propietario de un sitio web porque pueden proporcionar mayor percepción de seguridad al usuario.</p>
      </div>
  </div>
        
  <div class="card shadow w-75 m-auto mb-3">
    <div class="card-header">
      <div class="row gx-3 gy-3 ">
        <h2> Funcionamiento de reCAPTCHA </h2>  
      </div>
    </div>
    <div class="card-body">
      <p>Tipos de reCAPTCHA v2: reCAPTCHA v2 ofrece varias formas de desafiar a los usuarios para determinar si son humanos o bots:</p>
      <p>Checkbox reCAPTCHA v2: Este es el tipo más común de reCAPTCHA v2. Los usuarios ven una casilla de verificación que deben marcar para demostrar que son humanos. Cuando hacen clic en ella, pueden ser redirigidos a un desafío adicional si el sistema sospecha que pueden ser bots.</p>
      <p>reCAPTCHA v2 basado en imágenes: Este tipo de reCAPTCHA v2 muestra una serie de imágenes y pide a los usuarios que seleccionen todas las imágenes que coincidan con un cierto criterio, como "Seleccione todas las imágenes con semáforos". Esto ayuda a verificar la capacidad del usuario para reconocer objetos en las imágenes.</p>
      <p>Tipos de reCAPTCHA v3: reCAPTCHA v3 sigue un enfoque diferente al de v2 y no presenta desafíos visuales a los usuarios. En su lugar, se basa en la detección de bots mediante un sistema de puntuación. 
        Evaluación de comportamiento: reCAPTCHA v3 evalúa el comportamiento del usuario en el sitio web. Esto incluye factores como la velocidad de clicks, la navegación y las interacciones con el contenido.
        Asignación de puntuación de riesgo: En función de este comportamiento, reCAPTCHA v3 asigna una puntuación de riesgo a cada usuario. Los usuarios legítimos obtendrán una puntuación más alta, mientras que los bots tendrán una puntuación más baja.
        Toma de decisiones automatizadas: Los propietarios del sitio web pueden utilizar la puntuación de riesgo para tomar decisiones automatizadas. Por ejemplo, pueden establecer reglas para permitir el acceso, bloquear ciertas actividades o requerir una verificación adicional según la puntuación de riesgo.</p>
    </div>
  </div>
  <div class="card shadow w-75 m-auto mb-3">
    <div class="card-header">
      <div class="row gx-3 gy-3 ">
        <h2>  Integración de reCAPTCHA en un sitio web. </h2>  
      </div>
    </div>
    <div class="card-body">
      <p>Registro de Claves de API-Administracion API.
      Para utilizar reCAPTCHA, primero hay que registrarse y obtener un par de claves de API en el sitio web de reCAPTCHA. Este par consta de una "clave de sitio" (site key) y una "clave secreta" (secret key). La clave de sitio se usa en el lado del cliente para invocar el servicio de reCAPTCHA en el sitio web, mientras que la clave secreta se utiliza en el lado del servidor para verificar la respuesta del usuario.</p>
    </div>
  </div>
</main>

<?php
    include STRUCTURE_PATH.'footer.php';
    ?>
  