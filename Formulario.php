<?php
require_once("Plantilla/Plantilla_Formulario.PHP");
?>
<div class="formulario">
<form  action=""  method="">
    <div class="mb-3">
        <label >Nombres completos</label>
        <input type="text" class="form-control" name="nombre"  aria-describedby="emailHelp">
        <label >Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp">
        <label >Contraseña</label>
        <input type="password" class="form-control" name="contraseña" placeholder="Digite una contraseña minimo de 8 caracteres" aria-describedby="emailHelp">
        <label >Confirmar Contraseña</label>
        <input type="text" class="form-control" name="contraseña" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>