<?php
include("template/header.php");
 ?>
 <main>
   <div class="container withdraw">
     <div class="card" style="width: 20rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-block">
    <h4 class="card-title text-center">Withdraw</h4>
    <p class="card-text"><strong>User number :</strong> <?php echo $account->getNumber();?></p>
    <p class="card-text"><strong>Account name :</strong> <?php echo $account->getAccount();?></p>
    <p class="card-text"><strong>User name : </strong><?php echo $account->getName();?></p>
    <p class="card-text"><strong>Current amount :</strong> <?php echo $account->getAmount();?>€</p>

    <form class="" action="" method="post">
    <input type="text" name="amount" value="" placeholder="Amount to withdraw">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    <input type="submit" name="register" value="Withdraw" class="btn btn-custom">
  </form>
  </div>
</div>
</main>


 <?php
 include("template/footer.php");
  ?>
