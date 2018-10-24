<?php
//if values are set process
if (isset($_POST['name']) && isset($_POST['value']) && isset($_POST['description']) && isset($_POST['item_id'])) {
     //item attrobutes
      $item_name =  $_POST['name'];
      $item_id = $_POST['item_id'];
      $item_value = $_POST['value'];
      $item_description = $_POST['description'];
      //Sql Insert query
      $insertSql="INSERT INTO items (ITEM_ID,NAME,VALUE,DESCRIPTION)VALUES($item_id,'$item_name',$item_value,'$item_description')";
      $query=mysqli_query($connectionToDatabase,$insertSql);
      //check if was successful
      if ($query){   echo "<hr/><h4 style='text-align:center;background-color:#4dff4d;padding:20px;'>Added To Table Successfully</h4>"; }
            else {
                     echo "<hr/><h4 style='text-align:center;background-color:#ff4d4d;padding:20px;'>Couldnt Add To Table</h4>";
                 }
}
else {
  
}
 ?>
<!-- Add Item php -->
<form action="<?php echo $current_workpath;?>" method="POST">

Item Name:<br/>
<input type="text" name="name" required><br>

Item Value:<br/>
<input type="number" name="value" maxlength="8" required><br>

Item Description:<br/>
<input type="text" name="description" required><br>

Item Id:<br/>
<input type="number" name="item_id" maxlength="8" required><br><br>

<input type="submit" value="Add To Table">
</form>
