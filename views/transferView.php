<?php
include("template/header.php");
 ?>
<main>
 <div class="container TransferList">
     <h2 class="text-center">Transfer accounts</h2>
      <div class="row">
       <div class="col-md-4">
         <form class="" action="../controllers/transfer.php" method="post">
         <table class="table table-striped table-responsive text-center">
           <thead>
             <tr>
               <h3>Withdraw amount from</h3>
               <th></th>
               <th>Account name</th>
               <th>Amount</th>
              </tr>
            </thead>
          <tbody>

            <?php foreach ($accounts as $account) {
              echo "<tr>";
              echo "<td><input type='radio' name='account' value='".$account->getId()."'></td>";
              echo "<td>".$account->getAccount()."</td>";
              echo "<td>".$account->getAmount()." €</td>";
              echo "</tr>";
            } ?>
          </tbody>
        </table>
    </div>


       <div class="col-md-4">
         <table class="table table-striped table-responsive text-center">
           <thead>
             <tr>
              <h3>to</h3>
              <th></th>
              <th>Account name</th>
              <th>Amount</th>
            </tr>
          </thead>
        <tbody>
         <?php foreach ($accounts as $account) {
          echo "<tr>";
          echo "<td><input type='radio' name='transferAccount' value='".$account->getId()."'></td>";
          echo "<td>".$account->getAccount()."</td>";
          echo "<td>".$account->getAmount()." €</td>";
          echo "</tr>";
         } ?>
        </tbody>
      </table>
    </div>


     <div class="col-md-4">
      <input type="texte" name="Amount" value="" placeholder="Enter an amount in €">
      <input type="submit" name="" value="Transfer" class="btn btn-custom">
  </div>
</form>
</div>
  </div>
</main>




<?php
 include("template/footer.php");
 ?>
