<?php
require 'scripts/connect_to_database.php';
//select Table Item Contents, Sql Statement
$selectSql = "SELECT * FROM items";
//sql query
$query=mysqli_query($connectionToDatabase,$selectSql);
if ($query) {

      echo "<hr/><h4 style='text-align:center;background-color:#4dff4d;padding:20px;'>Query Was Successful</h4>";
      //check if no of rows has something or is null
      if (mysqli_num_rows($query) == NULL || mysqli_num_rows($query) == 0)
      {
           echo "<hr/><h4 style='text-align:center;background-color:#ffb366;'>Nothing In Table</h4>";
      }
      else{

           echo "<h4 style='text-align:center;color:#ff4dd2'>List Of Items</h4>";
           //loop through row by row-set data from each respective column
           while ($column = mysqli_fetch_assoc($query)) {
           $item_id = $column['ITEM_ID'];
           $item_value=$column['VALUE'];
           $item_description=$column['DESCRIPTION'];
           $item_name=$column['NAME'];
           $item_id_db=$column['ID_DB'];

          //display each item
          echo '<p style="word-spacing:3px;letter-spacing:3px;text-indent:20px;padding:10px;text-align:center;">'.$item_id_db.'. Item is/are <i>'.$item_name.'</i>.<br/><strong>Item Id</strong> - '.$item_id.'<br/><strong>Description::</strong>'.$item_description.'<br/><strong>Item Value::</strong>'.$item_value.'Ksh.<br/><p/>';
      }
}
}
else {
          //Didnt Retrieve Anything
          echo "<hr/><h4 style='text-align:center;background-color:brown;padding:20px;'>Query Was Unsuccessful<h4/>";
}
?>
