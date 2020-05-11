<?php
// include_once 'includes/cabecera.php';
// En lugar de include, lo mejor es usar require. Mas estricto
require_once 'includes/cabecera.php'
?>
<!-- Contenido -->
<div>
    <h2>Esta es la página de inicio</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Explicabo, tempore iure! Distinctio hic, ab repellendus optio
        accusamus maiores itaque architecto, inventore provident odit qui.
        Rem temporibus nulla perspiciatis reiciendis voluptate.
    </p>
    <?= var_dump($nombre) ?>
</div>

<?php
include 'includes/footer.php';
?>