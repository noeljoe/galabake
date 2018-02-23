<?php include('server1.php') ?>
<html>
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


<body>

<?php
    //    session_start();
        $conn = mysqli_connect('localhost','root','saurabh','project');
        //$query = "SELECT * FROM ingredients ORDER BY id ASC";
      	//$sql = mysqli_query($db, $query);
        $sql_query="SELECT * FROM ingredients";
        	$result = $conn->query($sql_query) or $conn->error;
        //while loop removed from here
        ?>
        <table width="70%">
          <thead>
            <tr>
             	<td>Product Name</td>
              <td>Supplier</td>
              <td>Unit</td>
              <td>Product Quantity</td>
              <td>Cost</td>
              <td>Calories</td>
              <td>Date</td>
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
                  <td><?php echo $row[6]; ?></td>
        				</tr>
        			<?php
        					}
        				}
        			?>
        		</tr>

            </tbody>
        </table>



        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Ingredients</button>
        <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Delete Ingredient</button>
        <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Update Ingredient</button>

        <div id="id04" class="modal">
          <form class="modal-content animate" action="ingredients.php" method="post">
            <?php include('errors.php')  ?>
          <div class="imgcontainer">
              <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
          <div class="container">
            <label><b>Ingredient Name to be deleted</b></label>
            <input type="text" placeholder="Enter Receipe Name" name="diname">
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="submit" name = "submit4">Submit</button>
          </div>
        </form>
        </div>


        <div id="id03" class="modal">
          <form class="modal-content animate" action="ingredients.php" method="post">
            <?php include('errors.php')  ?>
          <div class="imgcontainer">
              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
          <div class="container">
            <label><b>Ingredient Name</b></label>
            <input type="text" placeholder="Enter New Supplier Name" name="updatedingredient">
          </div>
          <div class="container">
            <label><b>Supplier Name</b></label>
            <input type="text" placeholder="Enter New Supplier Name" name="updatedsupplier">
          </div>
          <div class="container">
            <label><b>Quantity</b></label>
            <input type="text" placeholder="Enter Updated Quantity" name="updatedquantity">
          </div>
          <div class="container">
            <label><b>Cost</b></label>
            <input type="text" placeholder="Enter Updated Cost" name="updatedcost">
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="submit" name = "submit18">Submit</button>
          </div>
        </form>
        </div>

        <div id="id01" class="modal">
        <form class="modal-content animate" action="ingredients.php" method="post">
            <?php include('errors.php')  ?>
          <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>

          <div class="container">
            <label><b>Ingredient Name</b></label>
            <input type="text" placeholder="Enter Ingredient Name" name="name">

            <label><b>Supplier Name</b></label>
            <input type="text" placeholder="Enter Supplier Name" name="supplier">

            <label><b>Unit of Quantity</b></label>
            <input type="text" placeholder="Enter Unit of Quantity" name="unit">

            <label><b>Purchase Quantity</b></label>
            <input type="text" placeholder="Enter Purchase Quantity" name="quantity">

            <label><b>Purchase Price</b></label>
            <input type="text" placeholder="Enter Purchase Price" name="price">

            <label><b>Calories</b></label>
            <input type="text" placeholder="Enter Calories" name="calories">
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="submit" name = "submit1">Submit</button>
          </div>

      </form>
      </div>
</body>
</html>
