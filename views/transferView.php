<?php
include("template/header.php");
 ?>
<main>
 <div class="container TransferList">
     <h2 class="text-center">Transfer accounts</h2>
      <div class="row">
       <div class="col-md-4">
         <table class="table table-striped table-responsive text-center">
           <thead>
             <tr>
               <h3>Withdraw amount from</h3>
               <th></th>
               <th>Account name</th>
               <th>Amount</th>
         <!-- <th>Bank tansactions</th> -->
              </tr>
            </thead>
          <tbody>
            <?php foreach ($accounts as $account) {
              echo "<tr>";
              echo "<td><input type='radio' name='account' value=''></td>";
              echo "<td>".$account->getAccount()."</td>";
              echo "<td>".$account->getAmount()." €</td>";
              echo "<td><input type='hidden' name='id' value='".$account->getId()."'></td>";
     //  echo "<td><a class='btn btn-custom btn-sm' href='../controllers/single.php?id=".$account->getId()."'>See more</a></td>";
              echo "</tr>";
            } ?>
          </tbody>
        </table>
    </div>
    <!-- </div> -->
  <!-- </div> -->

   <!-- <div class="container TransferList2"> -->
     <!-- <div class="row"> -->
       <div class="col-md-4">
         <table class="table table-striped table-responsive text-center">
           <thead>
             <tr>
              <h3>to</h3>
              <th></th>
              <th>Account name</th>
              <th>Amount</th>
           <!-- <th>Bank tansactions</th> -->
            </tr>
          </thead>
        <tbody>
         <?php foreach ($accounts as $account) {
          echo "<tr>";
          echo "<td><input type='radio' name='transferAccount' value=''></td>";
          echo "<td>".$account->getAccount()."</td>";
          echo "<td>".$account->getAmount()." €</td>";
          echo "<td><input type='hidden' name='id' value='".$account->getId()."'></td>";
     //  echo "<td><a class='btn btn-custom btn-sm' href='../controllers/single.php?id=".$account->getId()."'>See more</a></td>";
          echo "</tr>";
         } ?>
        </tbody>
      </table>
    </div>
     <div class="col-md-4">
    <form class="" action="" method="post">
      <input type="texte" name="Amount" value="" placeholder="Enter an amount in €">
      <input type="submit" name="" value="Transfer" class="btn btn-custom">
    </form>
  </div>
  </div>
 </div>
</main>




<?php
 include("template/footer.php");
 ?>
