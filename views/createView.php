<?php
  include("template/header.php")
 ?>
 <main>

  <div class="container">
    <div class="form-group" id="modifyForm">
        <h2 class="text-center">Create account</h2><br>
        <form class="d-flex flex-column justify-content-center" action="" method="post">
        <input type="text" name='number' class="form-control" value="" placeholder="User number"><br>
        <input type="text" name='account' class="form-control" value="" placeholder="Account name"><br>
        <input type="text" name='name' class="form-control" value="" placeholder="User name"><br>
        <input type="text" name='amount' class="form-control" value="" placeholder="Amount in €"><br>
        <input type='submit' name='register' value='Create' class="btn btn-custom">
      </div>

 </main>






 <?php
  //  include("template/footer.php")
  ?>
