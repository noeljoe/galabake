<?php include('server1.php') ?>
<?php include('errors.php')  ?>
<!DOCTYPE html>
<html>
<body>

  <?php
  $rname = $_SESSION['rname'];
//$rname=$_SESSION[$rname];
  echo "<h2>".'For '.$rname."</h2>";?>
  <form method = "post">
    <h2> Select Ingredient </h2>
    <select name="select1">
      <option> Select Ingredient </option>
  <?php
    $db = mysqli_connect('localhost','root','saurabh','project');
    $query = "SELECT name FROM ingredients";
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
  <button type="submit" name = "submit5">Submit</button>
</div>
<br></br><br>
<h2> Select Receipe </h2>
<select name="select7">
  <option> Select Receipe </option>
<?php
$db = mysqli_connect('localhost','root','saurabh','receipe');
$query = "SHOW TABLES";
$result= mysqli_query($db, $query);
//  echo "<select name='select1'>";
//echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";
while ($row = $result->fetch_assoc())
{
  echo "<option value='".$row['Tables_in_receipe']."'>".$row['Tables_in_receipe']."</option>";
}
?>
</select>
<!--
<h2> Select Labour Type </h2>
<select name="select6">
  <option> Select Type </option>
<?php
$db = mysqli_connect('localhost','root','saurabh','project');
$query = "SELECT type FROM labour";
$result= mysqli_query($db, $query);
//  echo "<select name='select1'>";
//echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";
while ($row = $result->fetch_assoc())
{
  echo "<option value='".$row['type']."'>".$row['type']."</option>";
}
//  echo "</select>";
?>
</select>
-->
<br></br>
<div class="container">
  <label><b>Enter Time Required (mins) </b></label>
  <input type="text" placeholder="Enter Labour Cost in Minutes" name="labourcost1">
</div>
<br></br>
   <div class="container" style="background-color:#f1f1f1">
     <button type="submit" name = "submit14">Submit</button>
   </div>
<br>
<h2> Select Receipe </h2>
<select name="select8">
<?php
$db = mysqli_connect('localhost','root','saurabh','receipe');
$query = "SHOW TABLES";
$result= mysqli_query($db, $query);
//  echo "<select name='select1'>";
//echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";
while ($row = $result->fetch_assoc())
{
  echo "<option value='".$row['Tables_in_receipe']."'>".$row['Tables_in_receipe']."</option>";
}
?>
</select>
<br></br>
   <div class="container">
     <label><b>Other COGS </b></label>
     <input type="text" placeholder="Enter Other COGS" name="cogs">
   </div>
<br>
   <div class="container">
     <label><b>Number of servings per Receipe </b></label>
     <input type="text" placeholder="Enter Number of servings" name="servings">
   </div>
<br>
   <div class="container">
     <label><b>Yield (Percentage that are sold) </b></label>
     <input type="text" placeholder="Enter Other COGS" name="yield">
   </div>
<br>
   <div class="container">
     <label><b>Target Margin </b></label>
     <input type="text" placeholder="Enter Other COGS" name="target">
   </div>
<br>
   <div class="container">
     <label><b>Current Sales Price per serving </b></label>
     <input type="text" placeholder="Enter Other COGS" name="salesprice">
   </div>
<br>
   <div class="container">
     <label><b>Weekly sales volume</b></label>
     <input type="text" placeholder="Enter Other COGS" name="weekly">
   </div>
<br>
<div class="container">
  <label><b>Overhead Rate</b></label>
  <input type="text" placeholder="Enter Other COGS" name="overheadrate">
</div>
<br>
   <div class="container" style="background-color:#f1f1f1">
     <button type="submit" name = "submit15">Submit</button>
   </div>
 </form>
 <script>
 function filterFunction()
 {
     var input, filter, ul, li, a, i;
     input = document.getElementById("myInput");
     filter = input.value.toUpperCase();
     div = document.getElementById("myDropdown");
     a = div.getElementsByTagName("a");
     for (i = 0; i < a.length; i++)
     {
         if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1)
         {
             a[i].style.display = "";
         } else {
             a[i].style.display = "none";
         }
     }
 }
 </script>
</body>
</html>
