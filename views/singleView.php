<?php
  include("template/header.php")
 ?>
 <div class="container transaction">
   <h2 class="text-center">Bank transactions</h2>
   <!-- <div class="row">
   <div class="col-md-4 text-center"> -->
 <a class='btn btn-custom btn-sm' href='../controllers/single.php?id=<?php $account->getId()?>'>Delete</a></td>
 <a class='btn btn-custom btn-sm' href='../controllers/single.php?id=<?php $account->getId()?>'>Transfer</a></td>
 <a class='btn btn-custom btn-sm' href='../controllers/single.php?id=<?php $account->getId()?>'>Withdraw</a></td>
 <a class='btn btn-custom btn-sm' href='../controllers/single.php?id=<?php $account->getId()?>'>Payment</a></td>
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
   include("template/footer.php")
  ?>
