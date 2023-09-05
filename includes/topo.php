<?php
session_start();
?>

<div class="card">
 <div class="card-header">
<hl> Project Blog in PHP + MySQL - IFSP - Rafael Reichenbach Gomes</hl>

 </div>
<?php if(isset($_SESSION['login'])): ?>
 <div class="card-body text-right">

Olá <?php echo $_SESSION['login']['usuario']['nome']?>!
<a href="core/usuario_ repositorio.php?acac=logout"
class="btn btn-link btn-sm" role="button">Sair</a>
 </div>
<?php endif ?>
</div>