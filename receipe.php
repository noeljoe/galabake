<?php include('errors.php') ?>
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
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add Receipe</button>
  <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Delete Receipe</button>

  <div id="id03" class="modal">
    <form class="modal-content animate" action="ingredients.php" method="post">
      <?php include('errors.php')  ?>
    <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label><b>Receipe Name to be deleted</b></label>
      <input type="text" placeholder="Enter Receipe Name" name="rdname">
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" name = "submit3">Submit</button>
    </div>
  </form>
  </div>



  <div id="id02" class="modal">
    <form class="modal-content animate" action="ingredients.php" method="post">
      <?php include('errors.php')  ?>
    <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label><b>Receipe Name</b></label>
      <input type="text" placeholder="Enter Receipe Name" name="rname">
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" name = "submit2">Submit</button>
    </div>
  </form>
</div>
          <form method = "post">
            <h2> Select Receipe </h2>
            <select name="select2">
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
           <button type="submit" name="submit9" style="width:auto;"> Submit </button>
           <button type="submit" name="submit10" style="width:auto;"> Add Ingredient </button>
           <button type="submit" name="submit11" style="width:auto;"> Update </button>          <!-- goto test.php -->
         </form>
<?php include('test.php') ?>

</body>
</html>
