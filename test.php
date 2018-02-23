<?php include('errors.php') ?>
<?php include('server1.php') ?>
<?php
    //    session_start();
    $result="";
    $errors=array();
    $select2="";
    $select4="";
  //  $errors="";
        $conn = mysqli_connect('localhost','root','saurabh','receipe');
        $conn1 = mysqli_connect('localhost','root','saurabh','project');
        if(isset($_POST['submit9']))
        {
          $select2 = mysqli_real_escape_string($conn, $_POST['select2']);
          echo "<h2>".$select2."</h2>";

          $query12 = "SELECT ingredients FROM $select2";
          $result12 = mysqli_query($conn, $query12);
          $name1 = mysqli_fetch_array($result12);
          $result3 = $conn->query($query12) or $conn->error;
          $data[] = array();
          if (mysqli_num_rows($result3) > 0)
          {
            while ($row = mysqli_fetch_array($result3))
            {
              array_push($data, $row[0]);
              //echo $row[0];
            }
          }


            $sql_query1="SELECT COUNT(ingredients) FROM $select2";
            $namecount = mysqli_query($db1, $sql_query1);
            $count1 = mysqli_fetch_array($namecount);
            $count1 = (int)$count1[0];

            for($i=1;$i<=$count1;$i++)
            {
              $query111 = "SELECT cost FROM ingredients WHERE name = '$data[$i]'";
        //      $result111 = $conn1->query($query111) or $conn1->error;
              $temp = mysqli_query($conn1, $query111);
              $temp1 = mysqli_fetch_array($temp);
              $temp1 = (float)$temp1[0];

              $query222 = "UPDATE $select2 SET price = $temp1 WHERE ingredients = '$data[$i]'";
              $temp = mysqli_query($conn,$query222);
            }

          if (empty($select2)) { array_push($errors, "Enter receipe"); }
          if (count($errors) == 0)
          {
              $sql_query="SELECT * FROM $select2";
        	       $result = $conn->query($sql_query) or $conn->error;
          }

        //while loop removed from here
        ?>
        <table width="70%">
          <thead>
            <tr>
             	<td>Ingredient</td>
              <td>Quantity</td>
              <td>Unit</td>
              <td>Supplier</td>
              <td>Cost</td>
              <td>Calories</td>
       	   </tr>
          </thead>
            <t body id="table_body">
              <tr>
        			<?php
        				if (mysqli_num_rows($result) > 0)
        				{
        					while ($row = mysqli_fetch_array($result))
        					{
        			?>
        				<tr>
        					<td><?php echo $row[0]; ?></td>
        					<td><?php echo $row[1]; ?></td>
        					<td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
                  <td><?php echo $row[5]; ?></td>
        				</tr>
        			<?php
        					}
        				}
        			?>
        		</tr>

            </tbody>
        </table>
<?php }?>

<?php
//update
if(isset($_POST['submit11']))
{
  $select2= mysqli_real_escape_string($conn, $_POST['select2']);
//  echo $select2;
  $_SESSION['select2'] = $select2;
//  $select2 = $_POST['select2'];
//  echo $select2;
 ?>
 <form method = "post">
<br></br>
   <h2> Select Ingredient </h2>
   <select name="select3">
 <?php
   $db = mysqli_connect('localhost','root','saurabh','receipe');
   $query = "SELECT ingredients FROM $select2";
   $result= mysqli_query($db, $query);
 //  echo "<select name='select1'>";
   //echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";
   while ($row = $result->fetch_assoc())
   {
     echo "<option value='".$row['ingredients']."'>".$row['ingredients']."</option>";
   }
 //  echo "</select>";
  ?>
 </select>
 <div class="container">
 <label><b>Enter quantity </b></label>
 <input type="text" placeholder="Enter Quantity" name="quant1">
 </div>
 <div class="container">
 <label><b>Enter Cost </b></label>
 <input type="text" placeholder="Enter Quantity" name="cost1">
 </div>
 <button type="submit" name="submit12" style="width:auto;"> Submit</button>
</form>

 <?php }?>
<?php
if(isset($_POST['submit12']))
{

  $select3="";
//  $select4="";
  $quant1="";
  $cost1="";
//  $select2 = $_POST['select2'];
//  $_SESSION['select2'] = $select2;
$select2 = $_SESSION['select2'];

//  $select2= mysqli_real_escape_string($conn, $_POST['select2']);
  $select3= mysqli_real_escape_string($db1, $_POST['select3']);
//  $select4= mysqli_real_escape_string($db1, $_POST['select4']);
  $quant1 = mysqli_real_escape_string($db1, $_POST['quant1']);
  $cost1 = mysqli_real_escape_string($db1, $_POST['cost1']);
  if (count($errors) == 0)
  {
    $query = "UPDATE $select2 SET quantity=$quant1, price=$cost1 WHERE ingredients='$select3'";
  //    echo $select2;
    mysqli_query($conn, $query);
  //  $_SESSION['select2'] = $select2;
    //  $sql_query="UPDATE $select3 SET quantity=$quant1";
    //     $result = $conn->query($sql_query) or $conn->error;
  //  header('location:receipe.php');
  }
}
?>
