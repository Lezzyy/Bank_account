<?php
  include("template/header.php");
 ?>
 <div class="container transaction">
   <h2>Bank transactions</h2>
 <?php
  echo "<a class='btn btn-custom btn-sm' href='../controllers/delete.php?id=".$account->getId()."'>Delete</a>";
  echo "<a class='btn btn-custom btn-sm' href='../controllers/.php?id=".$account->getId()."'>Transfer</a>";
  echo "<a class='btn btn-custom btn-sm' href='../controllers/withdraw.php?id=".$account->getId()."'>Withdraw</a>";
  echo "<a class='btn btn-custom btn-sm' href='../controllers/payment.php?id=".$account->getId()."'>Payment</a>";
  echo "<a class='btn btn-custom btn-sm' href='../controllers/create.php?id=".$account->getId()."'>Create a new account</a>";
?>
<!-- </div>
</div> -->
</div>
 <div class="container OneList">
     <!-- <h3 class="text-center">Account</h3> -->
   <table class="table table-striped table-responsive text-center">
     <thead>
       <tr>
         <th>User number</th>
         <th>Account name</th>
         <th>User name</th>
         <th>Amount</th>
       </tr>
     </thead>
     <tbody>
    <tr>
      <td><?php echo $account->getNumber()?></td>
      <td><?php echo $account->getAccount()?></td>
      <td><?php echo $account->getName()?></td>
      <td><?php echo $account->getAmount()?></td>
    </tr><br>
     </tbody>
   </table>
   </div>


 </main>




 <?php
   include("template/footer.php");
  ?>
