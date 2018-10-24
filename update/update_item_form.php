<?php
//if values are set process
if (isset($_POST['name']) && isset($_POST['value']) && isset($_POST['description'])  && isset($_POST['item_db_id'])) {
     //item attrobutes
     $item_name =  $_POST['name'];
     $item_db_id = $_POST['item_db_id'];
     $item_value = $_POST['value'];
     $item_description = $_POST['description'];

      //Sql Update query
      $updateSql="UPDATE items SET NAME='$item_name',VALUE=$item_value,DESCRIPTION='$item_description' WHERE ID_DB =$item_db_id ";
      $query=mysqli_query($connectionToDatabase,$updateSql);
      //check if was successful
      if ($query){   echo "<hr/><h4 style='text-align:center;background-color:#4dff4d;padding:20px;'>Update Successful</h4>"; }
            else {
                     echo "<hr/><h4 style='text-align:center;border:'>Updated Failed</h4>";
                 }
    }
else {

    }

 ?>
<!-- Form To Add Data -->
<form action="<?php echo $current_workpath;?>" method="POST">

<strong>Id Of Item To Be Updated</strong><br/><br/>
<input type="number" name="item_db_id"><br><br>

Item Name:<br/>
<input type="text" name="name" required><br>

Item Value:<br/>
<input type="number" name="value" maxlength="8" required><br>

Item Description:<br/>
<input type="text" name="description" required><br><br/>

<input type="submit" value="Update" style="background-color:#80d4ff">

</form>
