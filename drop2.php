<?php include('server1.php') ?>
<?php include('errors.php')  ?>
<!DOCTYPE html>
<html>
<body>

<?php
  $select2="";
  $select10="";
  $select11="";
  $select2 = $_SESSION['select2'];
  echo "<h2>".'For '.$select2."</h2>";
  $_SESSION['select2'] = $select2;
  ?>
  <form method = "post">
    <h2> Select Ingredient </h2>
    <select name="select10">
      <option> Select Ingredient </option>
  <?php
    $db = mysqli_connect('localhost','root','saurabh','project');
    $query = "SELECT DISTINCT name FROM ingredients";
    $result= mysqli_query($db, $query);
    while ($row = $result->fetch_assoc())
    {
      echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
   ?>
 </select>
 <br></br>
 <div class="container" style="background-color:#f1f1f1">
  <button type="submit" name = "submit20">Submit</button>       <!-- server1.php -->
 </div>
</form>
<?php $_SESSION['select2'] = $select2; ?>

<?php
if(isset($_POST['submit20']))
{
  $conn = mysqli_connect('localhost','root','saurabh','receipe');
  $conn1 = mysqli_connect('localhost','root','saurabh','project');
  $select10 = $_POST['select10'];

  echo "<h2>".$select10."</h2>";
  if (count($errors) == 0)
  {
      $sql_query="SELECT name, supplier, cost FROM ingredients WHERE name = '$select10' ";
         $result2 = $db->query($sql_query) or $db->error;
         $_SESSION['select10'] = $select10;
  }
?>
  <table width="70%">
    <thead>
      <tr>
        <td><b>Ingredient</td>
        <td><b>Supplier</td>
        <td><b>Cost</td>
     </tr>
    </thead>
      <t body id="table_body">
        <tr>
        <?php
              if (mysqli_num_rows($result2) > 0)
          {
            while ($row = mysqli_fetch_array($result2))
            {
        ?>
          <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
          </tr>
        <?php
            }
          }
        ?>
      </tr>

      </tbody>
  </table>
  <form method = "post">
    <h2> Select Supplier </h2>
    <select name="select11">
      <option> Select Supplier </option>
  <?php
    $db = mysqli_connect('localhost','root','saurabh','project');
    $query = "SELECT supplier from ingredients where name = '$select10' ";
    $result= mysqli_query($db, $query);
    while ($row = $result->fetch_assoc())
    {
      echo "<option value='".$row['supplier']."'>".$row['supplier']."</option>";
    }
   ?>
 </select>
 <br></br>
 <div class="container" style="background-color:#f1f1f1">
  <button type="submit" name = "submit21">Submit</button>       <!-- server1.php -->
 </div>
</form>
<?php

?>
<?php }?>
</body>
</html>
