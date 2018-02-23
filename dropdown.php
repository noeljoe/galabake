<html>
<head>
</head>
<body>
  <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}
#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}

button: container {
    padding: 16px;
}
</style>


<?php
  $id= '';
  session_start();
  $conn = mysqli_connect('localhost','root','saurabh','project');
  $sql_query="SELECT name FROM ingredients";
    $result = $conn->query($sql_query) or $conn->error;
?>

<h2>Search/Filter Dropdown</h2>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn" name = "down">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onclick="myFunction1()" onkeyup="filterFunction()">
    <?php
      while ($row = $result->fetch_assoc())
      {
        echo '<a href> '.$row['name'].' </a>';
      }

   ?>
  </div>
</div>

<br></br>
<div class="container">
  <label><b>Enter quantity </b></label>
  <input type="text" placeholder="Enter Quantity" name="q">
</div>


<script>
function myFunction1() {
    document.getElementById("mySelect").selectedIndex.innerHTML = "2";

}

function myFunction()
{
    document.getElementById("myDropdown").classList.toggle("show");

}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
</body>
</html>
