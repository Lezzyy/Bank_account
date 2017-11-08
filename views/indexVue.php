<?php
  include("template/header.php")
 ?>

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
         <!-- <?php foreach ($accounts as $account){
           echo "<tr>";
           echo "<td>".$account->get()."</td>";
           echo "<td>".$account->get()."</td>";
           echo "<td>".$account>get()."</td>";
           echo "<td><a class='btn btn-custom btn-sm' href='../controllers/?id=".$account->getId()."'>Transfer</a>
           <a class='btn btn-custom btn-sm' href='../controllers/?id=".$account->getId()."'>Withdraw</a>
           <a class='btn btn-custom btn-sm' href='../controllers/?id=".$account->getId()."'>Payment</a>
           <a class='btn btn-custom btn-sm' href='../controllers/?id=".$account->getId()."'>Delete</a></td>";
           echo "</tr>";
         } ?> -->
     </tbody>
   </table>
   </div>
 </main>


 <?php
   include("template/footer.php")
  ?>
