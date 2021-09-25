<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div id="createFilme">
  <div class="container">
   
    <form action="<?php echo e(route('salvar_filme')); ?>" method="post">
     <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col">
          <label for="titulo">Título:</label>
          <input type="text" name="titulo" id="titulo" class="form-control formPlaceholder" placeholder="Título">
        </div>
        <div class="col">
            <label for="diretor">Diretor:</label>  
          <input type="text" name="diretor" id="diretor" class="form-control formPlaceholder" placeholder="Diretor">
        </div>
      </div>
    
    <div class="row">
        <div class="col">
            <label for="genero">Gênero:</label>
          <input type="text" name="genero" id="genero" class="form-control formPlaceholder" placeholder="Gênero">
        </div>
        <div class="col">
            <label for="duracao">Duração:</label>
          <input type="text" name="duracao" id="duracao" class="form-control formPlaceholder" placeholder="Duração">
        </div>
        <div class="col">
            <label for="lancamento">Lançamento:</label>
          <input type="text" name="lancamento" id="lancamento" class="form-control formPlaceholder" placeholder="Lançamento">
        </div>
        <div class="col">
            <label for="preco">Preço:</label>
          <input type="text" name="preco" id="preco" class="form-control formPlaceholder" placeholder="Preço">
        </div>
    </div>

      <div class="form-group">
      <label for="sinopse">Sinopse:</label>
        <textarea name="sinopse" id="sinopse" class="form-control formPlaceholder" id="exampleFormControlTextarea1" placeholder="Sinopse" rows="3"></textarea>
      </div>
      <button  type="submit" class="btn btn-info">Salvar </i></button> 
    </form>

 
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\Franc\Projetos\filmesCRUDlaravel\resources\views/Filmes/create.blade.php ENDPATH**/ ?>