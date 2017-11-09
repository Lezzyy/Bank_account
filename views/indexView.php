<?php
  include("template/header.php")
 ?>

<div class="container">
 <?php
echo "<a class='btn btn-custom btn-sm text-white' href='../controllers/create.php'>Create a new account</a>";
 ?>
</div>


 <div class="container TabList">
     <h2 class="text-center">Account</h2>
   <table class="table table-striped table-responsive text-center">
     <thead>
       <tr>
         <th>User number</th>
         <th>Account name</th>
         <th>User name</th>
         <th>Amount</th>
         <th>Bank tansactions</th>
       </tr>
     </thead>
     <tbody>
       <?php foreach ($accounts as $account){
     echo "<tr>";
     echo "<td>".$account->getNumber()."</td>";
     echo "<td>".$account->getAccount()."</td>";
     echo "<td>".$account->getName()."</td>";
     echo "<td>".$account->getAmount()."</td>";
     echo "<td><a class='btn btn-custom btn-sm' href='../controllers/single.php?id=".$account->getId()."'>See more</a></td>";
     echo "</tr>";
   } ?>
     </tbody>
   </table>
   </div>
 </main>


 <?php
   include("template/footer.php")
  ?>
