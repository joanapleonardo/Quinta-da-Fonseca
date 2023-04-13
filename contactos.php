<?php include ('content/head.php')?>

<?php include ('content/header.php')?>


<form action="">
<div class="container shadow mb-3 rounded">


    
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Apelido</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apelido">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
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

<?php include ('content/footer.php')?>