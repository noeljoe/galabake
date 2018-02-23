<!DOCTYPE html>
<?php include('server1.php') ?>
<?php include('errors.php')  ?>
<html>
<body>
  <style>
  /* Full-width input fields */
  input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }

  button:hover {
      opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
  }

  img.avatar {
      width: 40%;
      border-radius: 50%;
  }

  .container {
      padding: 16px;
  }

  span.psw {
      float: right;
      padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
  }

  .close:hover,
  .close:focus {
      color: red;
      cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
  }
  </style>
<style>

.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>

<button onclick="document.getElementById('id07').style.display='block'" style="width:auto;">Add Allergens</button>
<div id="id07" class="modal">
  <form class="modal-content animate" action="ingredients.php" method="post">
    <?php include('errors.php')  ?>
  <div class="imgcontainer">
      <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>
  <div class="container">
    <label><b>Name of the allergen</b></label>
    <input type="text" placeholder="Enter Allergen Name" name="allergen">
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="submit" name = "submit13">Submit</button>
  </div>
</form>
</div>

<?php
    //    session_start();
        $conn = mysqli_connect('localhost','root','saurabh','project');
        //$query = "SELECT * FROM ingredients ORDER BY id ASC";
      	//$sql = mysqli_query($db, $query);
        $sql_query="SELECT * FROM allergens WHERE 1=0";
      	$result = $conn->query($sql_query) or $conn->error;

        $field_array = array();
        $query_field = "SHOW COLUMNS from allergens";
        $result_field= mysqli_query($db, $query_field);
        while ($row = $result_field->fetch_assoc())
          array_push($field_array,$row['Field']);

        //while loop removed from here
        ?>
        <table width="70%">
          <thead>
            <tr>
             	<td>Allergens</td>
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
        				</tr>
        			<?php
        					}
        				}
        			?>
        		</tr>

            </tbody>
        </table>


  <form method = "post">
    <h2> Select Ingredient </h2>
    <select name="select5">
       <option>Select an option 1</option>
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

<script>
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>


<br></br>

<h2> Select Allergens </h2>
   <div class="multiselect">
     <div class="selectBox" onclick="showCheckboxes()">
       <select>
         <option>Select an option 1</option>
       </select>
       <div class="overSelect"></div>
     </div>
     <div id="checkboxes">
       <?php
         $db = mysqli_connect('localhost','root','saurabh','project');
    //     $query = "SELECT * FROM allergens WHERE 1=0";
    $query = "SHOW COLUMNS from allergens";
    $result= mysqli_query($db, $query);
       //  echo "<select name='select1'>";
         //echo "<option type='text' placeholder='Search..' id='myInput' onkeyup='filterFunction()'/option>";

         while ($row = $result->fetch_assoc())
         {
            //  echo "<input type='checkbox' name='check' id='one' value='".$row['Field']."'>".$row['Field']."<br>";
              echo "<input type='checkbox' name='check[]' id='one' value='".$row['Field']."'>".$row['Field']."<br>";
         }

          ?>
     </div>
   </div>
   <button type="submit" name = "submit7">Submit</button>
 </form>
</body>
</html>
