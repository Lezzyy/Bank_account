<?php
include("template/header.php");
 ?>

 <main>
   <div class="container withdraw">
     <div class="card" style="width: 20rem;">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-block">
    <h4 class="card-title text-center">Payment</h4>
    <p class="card-text"><strong>User number :</strong> <?php echo $account->getNumber();?></p>
    <p class="card-text"><strong>Account name :</strong> <?php echo $account->getAccount();?></p>
    <p class="card-text"><strong>User name : </strong><?php echo $account->getName();?></p>
    <p class="card-text"><strong>Current amount :</strong> <?php echo $account->getAmount();?> €</p>

    <form class="" action="../controllers/payment.php" method="post">
    <input type="text" name="amount" value="" placeholder="Amount to add in €">
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    <input type="hidden" name="id" value="<?php echo $account->getId();?>">
    <input type="submit" name="register" value="Withdraw" class="btn btn-custom">
  </form>
  </div>
</div>
</main>


 <?php
 // include("template/footer.php");
  ?>
