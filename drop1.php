<?php include('server1.php') ?>
<?php include('errors.php')  ?>
<!DOCTYPE html>
<html>
<body>
<?php
$select2="";
?>
  <?php
//  $select2 = $_SESSION['select2'];
//  echo $select2;
  //  $conn = mysqli_connect('localhost','root','saurabh','receipe');
  //  $select2= mysqli_real_escape_string($conn, $_POST['select2']);
  $select2 = $_SESSION['select2'];
//  echo $select2;
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
  //  echo "<select name='select1'>";
    //echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";
    while ($row = $result->fetch_assoc())
    {
      echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
  //  echo "</select>";
   ?>
 </select>
<br></br>
   <div class="container">
     <label><b>Enter quantity </b></label>
     <input type="text" placeholder="Enter Quantity" name="quant">
   </div>
<br>
<div class="container" style="background-color:#f1f1f1">
  <button type="submit" name = "submit17">Submit</button>       <!-- server1.php -->
</div>
</form>
<?php $_SESSION['select2'] = $select2; ?>
