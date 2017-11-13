<?php
  include("template/header.php")
 ?>
 <main>
        <!-- <input type="text" name="number" value="" placeholder="User number">
        <input type="text" name="account" value="" placeholder="Account name">
        <input type="text" name="name" value="" placeholder="User name">
        <input type="text" name="amount" value="" placeholder="Amount">
        <input type="submit" name="register" value="create">
      </form>
    </div> -->
  <div class="container">
    <div class="form-group" id="modifyForm">
        <h2 class="text-center">Create account</h2><br>
        <form class="" action="" method="post">
        <!-- <label for="vehicleName">User number</label> -->
        <input type="text" name='number' class="form-control" value="" placeholder="User number"><br>
        <!-- <label for="vehicleType">Account name</label> -->
        <input type="text" name='account' class="form-control" value="" placeholder="Account name"><br>
        <!-- <label for="vehicleColor">User name</label> -->
        <input type="text" name='name' class="form-control" value="" placeholder="User name"><br>
        <!-- <label for="vehicleColor">Amount</label> -->
        <input type="text" name='amount' class="form-control" value="" placeholder="Amount in €"><br>
        <input type='submit' name='register' value='Create' class="btn btn-custom">
      </div>

 </main>






 <?php
   include("template/footer.php")
  ?>
