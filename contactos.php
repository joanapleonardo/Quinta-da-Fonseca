<?php include ('content/head.php')?>

<?php include ('content/header.php')?>


<form action="email.php" method=get>
<div class="container shadow mb-3 rounded">
    
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@email.com">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Como chegou até nós?</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn">Enviar</button>
    <button type="reset" class="btn" data-bs-dismiss="modal">Limpar</button>

</div>
    
</form>  

<?php
if(isset($_GET['r'])){
    if($_GET['r'] == "ok"){
        ?>

        <div class="alert alert-success" role="alert">
            Mensagem enviada
        </div>

        <?php
    }else if($_GET['r'] == "erro"){
        ?>

        <div class="alert alert-danger" role="alert">
            Erro a enviar mensagem
        </div>
    
        <?php
    }
}  

?>

<?php include ('content/footer.php')?>