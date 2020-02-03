<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Usuario </h3>
        <table class="striped">
           <thead>
               <tr>
                   <th>Nome:</th>
                   <th>Sobrenome:</th>
                   <th>Email:</th>
                   <th>Senha:</th>
               </tr>
           </thead>
           
           <tbody>
               <tr>
                   <td>Joao</td>
                   <td>Guilherme</td>
                   <td>joaoguilhermejg0107@gmail.com</td>
                   <td>25</td>
                   <td><a href="" class="btn-floating green"><i class="material-icons">edit</i></a></td>
                   <td><a href="" class="btn-floating green"><i class="material-icons">del</i></a></td>
               </tr>
           </tbody>
        </table> 
        <br>
        <a href="adicionar.php" class="btn">Adicionar Usuario</a>     
    </div>
</div>


<?php
// Footer
include_once 'includes/footer.php';
?>      