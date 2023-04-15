<?php include ('content/head.php')?>

<?php include ('content/header.php')?>


<form action="email.php" method=get>
<div class="container shadow mb-3 p-3 rounded ">
    
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" name="nome"class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="@email.com">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Como chegou até nós?</label>
    <input type="text" name="comochegou" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
    <textarea type="text" name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-light">Enviar</button>
    
</div>
</div>
    
 

<?php
if(isset($_GET['r'])){
    if($_GET['r'] == "ok"){
        ?>

        <div class="alert alert-success container shadow mb-3 rounded" role="alert">
            Mensagem enviada
        </div>

        <?php
    }else if($_GET['r'] == "erro"){
        ?>

        <div class="alert alert-danger container shadow mb-3 rounded" role="alert">
            Erro a enviar mensagem
        </div>
    
        <?php
    }
}  

?>

<?php include ('content/footer.php')?>