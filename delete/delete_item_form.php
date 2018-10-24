<?php
if (isset($_POST['item_db_id'])) {
  //id of the item to be deleted
  $itemToDeleteId = $_POST['item_db_id'];
  //Sql Delete query
  $deleteSql="DELETE FROM items WHERE ID_DB= $itemToDeleteId";
  //execute query
  $query=mysqli_query($connectionToDatabase,$deleteSql);
  //check if was successful
  if ($query){ echo "<hr/><h4 style='text-align:center;background-color:#4dff4d;padding:20px;'>Deleted Item Successfully</h4></strong>";}

        else { echo "<hr/><h4 style='text-align:center;'>Couldn't find anything to delete</h4></strong>";   }

}
 ?>
<form action="<?php echo $current_workpath;?>" method="POST">

  <strong>Item Id of item being deleted:</strong><br/><br>

  <input type="number" name="item_db_id"><br><br>

  <input type="submit" value="Delete Item" style="background-color:#ff6666;color:#ffffff;">
</form>
