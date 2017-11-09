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
    <tr>
      <td><?php echo $account->getNumber()?></td>
      <td><?php echo $account->getAccount()?></td>
      <td><?php echo $account->getName()?></td>
      <td><?php echo $account->getAmount()?></td>
      <td><a class='btn btn-custom btn-sm' href='../controllers/single.php?id=<?php $account->getId()?>'>See more</a></td>
    </tr>


     </tbody>
   </table>
   </div>
 </main>




 <?php
   include("template/footer.php")
  ?>
