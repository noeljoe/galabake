<html>
<body>
<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
//variable declaration
$name = "";
$supplier = "";
$unit = "";
$_SESSION['success'] = "";
$quantity = "";
$price = "";
$calories="";
$errors = array();
$rname="";
$rdname="";
$diname="";
$quant="";
$select1="";
$a="";
$b="";
$c="";
$d="";
$e="";
$labourtype="";
$labourcost="";
$labourtime="";
$select2="";
$check="";
$select5="";
$select6="";
$select7="";
$select8="";
$allergen="";
$labourcost1="";
$cogs="";
$servings="";
$yield="";
$target="";
$salesprice="";
$weekly="";
$overheadrate="";
$updatedingredient = "";
$updatedsupplier= "";
$updatedquantity = "";
$updatedcost = "";
//connect to database
$db = mysqli_connect('localhost','root','saurabh','project');
$db1 = mysqli_connect('localhost','root','saurabh','receipe');
//add ingredient button
if(isset($_POST['submit1']))
{
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $supplier = mysqli_real_escape_string($db, $_POST['supplier']);
  $unit = mysqli_real_escape_string($db, $_POST['unit']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $calories = mysqli_real_escape_string($db, $_POST['calories']);
// form validation: ensure that the form is correctly filled
  if (empty($name)) { array_push($errors, "Enter name of ingredient"); }
  if (empty($supplier)) { array_push($errors, "Enter name of supplier"); }
  if (empty($unit)) { array_push($errors, "Enter unit of quantity"); }
  if (empty($quantity)) { array_push($errors, "Enter Quantity"); }
  if (empty($price)) { array_push($errors, "Enter price of ingredient"); }
  if (empty($calories)) { array_push($errors, "Enter calories"); }
  if (count($errors) == 0)
  {
   $query = "INSERT INTO ingredients (name, supplier, unit, quantity, cost,calories)
          VALUES ('$name', '$supplier', '$unit','$quantity','$price','$calories')";
    $resultadd = mysqli_query($db, $query);
    $_SESSION['success'] = "Ingredient successfully added!";
    header('location: retrieve.php');
  }
}
//add receipe button
if(isset($_POST['submit2']))
{
  $rname = mysqli_real_escape_string($db1, $_POST['rname']);
  if (empty($rname)) { array_push($errors, "Enter name of receipe"); }
  if (count($errors) == 0)
  {
    $query = "CREATE TABLE $rname (ingredients varchar(50), quantity int, unit varchar(50),
        supplier varchar(50), price int, calories int)";
    mysqli_query($db1, $query);
    $_SESSION['rname'] = $rname;
//  $_SESSION[$rname] = $rname;
    header('location:drop.php');
  }
}
//delete receipe button
if(isset($_POST['submit3']))
{
  $rdname = mysqli_real_escape_string($db1, $_POST['rdname']);
  if (empty($rdname)) { array_push($errors, "Enter name of receipe"); }
  if (count($errors) == 0)
  {
    $query = "DROP TABLE $rdname";
    mysqli_query($db1, $query);
    $_SESSION['success'] = "Ingredient successfully added!";
    header('location:receipe.php');
  }
}

//delete ingredient button
if(isset($_POST['submit4']))
{
  $diname = mysqli_real_escape_string($db, $_POST['diname']);
  if (empty($diname)) { array_push($errors, "Enter name of ingredient"); }
  if (count($errors) == 0)
  {
    $query = "DELETE FROM ingredients WHERE name = '$diname' ";
    mysqli_query($db, $query);
    header('location:retrieve.php');
//    $_SESSION[$rname] = $rname;
  }
}


//add receipe ingredients to database
if(isset($_POST['submit5']))
{
  $rname = $_SESSION['rname'];
//  echo $rname;
  $query1="";
  $query2="";
  $query3="";
  $query4="";
  $query5="";
  $getinfo1="";
  $getinfo2="";
  $getinfo3="";
  $getinfo4="";
  $getinfo5="";
  $a="";
  $b="";
  $c="";
  $d="";
  $e="";
  $select1 = $_POST['select1'];
  //echo $select1;
  $quant = mysqli_real_escape_string($db1, $_POST['quant']);
  //echo $quant;
  if (empty($quant)) { array_push($errors, "Enter name of receipe"); }
  if (empty($select1)) { array_push($errors, "Select ingredient"); }

$getinfo1 = "SELECT unit from ingredients where name = '$select1'";
$getinfo2 = "SELECT supplier from ingredients where name = '$select1'";
$getinfo3 = "SELECT cost from ingredients where name = '$select1'";
$getinfo4 = "SELECT calories from ingredients where name = '$select1'";
$getinfo5 = "SELECT quantity from ingredients where name = '$select1'";
$query1 = mysqli_query($db,$getinfo1);
$query2 = mysqli_query($db,$getinfo2);
$query3 = mysqli_query($db,$getinfo3);
$query4 = mysqli_query($db,$getinfo4);
$query5 = mysqli_query($db,$getinfo5);
while ($row = mysqli_fetch_array($query1))
{
    $a = $row['unit'];
    //echo $a;
}
while ($row = mysqli_fetch_array($query2))
{
    $b = $row['supplier'];
}
while ($row = mysqli_fetch_array($query3))
{
  $c = $row['cost'];
}
while ($row = mysqli_fetch_array($query4))
{
    $d = $row['calories'];
}
while ($row = mysqli_fetch_array($query5))
{
    $e = $row['quantity'];
}
$s= $c*$quant/$e;
if (count($errors) == 0)
{
  //$query = "INSERT INTO a(a,aa) VALUES ('$select1','$quant')";
  //echo $rname;
  $query = "INSERT INTO $rname (ingredients, quantity, unit,
    supplier, price, calories) VALUES ('$select1','$quant','$a','$b','$s','$d')";
  mysqli_query($db1, $query);
  $_SESSION['success'] = "Ingredient successfully added!";
}
//echo $firstname;
}
//insert labour type
if(isset($_POST['submit6']))
{
  $labourtype = mysqli_real_escape_string($db, $_POST['labourtype']);
  $labourtime = mysqli_real_escape_string($db, $_POST['labourtime']);
  $labourcost = mysqli_real_escape_string($db, $_POST['labourcost']);
  if (empty($labourcost)) { array_push($errors, "Enter labour cost"); }
  if (empty($labourtime)) { array_push($errors, "Enter labour time"); }
  if (count($errors) == 0)
  {
    $query = "INSERT INTO labour(type, rate,labourtime) VALUES ('$labourtype','$labourcost','$labourtime') ";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Ingredient successfully added!";
    header('location:labour.php');
  }
}

if(isset($_POST['submit7']))
{
  $select5= mysqli_real_escape_string($db, $_POST['select5']);
  $check = $_POST['check'];
  print_r($check);
  $field_array = array();
  $query_field = "SHOW COLUMNS from allergens";
  $result_field= mysqli_query($db, $query_field);
  while ($row = $result_field->fetch_assoc())
    array_push($field_array,$row['Field']);

  for($i=0;$i<sizeof($check);$i++)
  {
    for($j=0;sizeof($field_array);$j++)
    {
      if($check[$i] == $field_array[$j])
      {
        $query = "INSERT INTO allergens1(ingredients,$check[$i]) VALUES ('$select5','$check[$i]')";
        if(mysqli_query($db, $query))
        {
          echo "Insert".$check[$i];
        }
        else
        {
          $query = "UPDATE INTO allergens($check[$i]) VALUES (1) WHERE ingredients='sugar'";
          mysqli_query($db, $query);
        }
        break;
      }
    }
  }
  //$select1 = $_POST['select1'];
//  if (empty($select1)) { array_push($errors, "Select allergens"); }
  if (count($errors) == 0)
  {
    $query = " ";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Ingredient successfully added!";
  //  header('location:labour.php');
  }
//  header('location:welcome.html');
}
//delete labour type
if(isset($_POST['submit8']))
{
  $type = mysqli_real_escape_string($db, $_POST['type']);
  if (empty($type)) { array_push($errors, "Enter type"); }
  if (count($errors) == 0)
  {
    $query = "DELETE FROM labour WHERE type='$type'";
    mysqli_query($db, $query);
    $_SESSION['rname'] = $rname;
//  $_SESSION[$rname] = $rname;
    header('location:labour.php');
  }
}
//add ingredients to a receipe
if(isset($_POST['submit10']))
{
  $conn = mysqli_connect('localhost','root','saurabh','receipe');
  $select2= mysqli_real_escape_string($conn, $_POST['select2']);
//  echo $select2;
  $_SESSION['select2'] = $select2;
  header('location:drop1.php');
}

if(isset($_POST['submit13']))
{
  $allergen = mysqli_real_escape_string($db, $_POST['allergen']);
  if (empty($allergen)) { array_push($errors, "Enter type"); }
  if (count($errors) == 0)
  {
    $query = "ALTER TABLE allergens ADD $allergen VARCHAR(50)";
    $query1 = "ALTER TABLE allergens1 ADD $allergen VARCHAR(50)";
    mysqli_query($db, $query);
    mysqli_query($db, $query1);
    $_SESSION['rname'] = $rname;
//  $_SESSION[$rname] = $rname;
    header('location:allergens.php');
  }
}

//insert labour cost of receipe
if(isset($_POST['submit14']))
{
  $select7 = $_POST['select7'];
  $select6 = $_POST['select6'];
  $labourcost1 = mysqli_real_escape_string($db1, $_POST['labourcost1']);
  if (empty($labourcost1)) { array_push($errors, "Enter labour cost"); }
  if (count($errors) == 0)
  {
    $query = "INSERT INTO receipelabourcost(receipe,labourtimereceipe) VALUES ('$select7','$labourcost1') ";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Ingredient successfully added!";
    header('location:drop.php');
  }
}

//additional inputs
if(isset($_POST['submit15']))
{
  $select8 = $_POST['select8'];
  $cogs = (float)mysqli_real_escape_string($db1, $_POST['cogs']);
  $servings = (float)mysqli_real_escape_string($db1, $_POST['servings']);
  $yield = (float)mysqli_real_escape_string($db1, $_POST['yield']);
  $target = (float)mysqli_real_escape_string($db1, $_POST['target']);
  $salesprice = (float)mysqli_real_escape_string($db1, $_POST['salesprice']);
  $weekly = (float)mysqli_real_escape_string($db1, $_POST['weekly']);
  $overheadrate = (float)mysqli_real_escape_string($db1, $_POST['overheadrate']);

  if (empty($cogs)) { array_push($errors, "Enter COGS"); }
  if (empty($servings)) { array_push($errors, "Enter number of servings"); }
  if (empty($yield)) { array_push($errors, "Enter yield"); }
  if (empty($target)) { array_push($errors, "Enter target"); }
  if (empty($salesprice)) { array_push($errors, "Enter salesprice"); }
  if (empty($weekly)) { array_push($errors, "Enter weekly margin"); }
  if (count($errors) == 0)
  {
    $query = "INSERT INTO additions(receipe,	cogs,	servings,	yield,	target,	currentsalesprice,	weekly,overheadrate)
          VALUES ('$select8','$cogs','$servings','$yield','$target','$salesprice','$weekly','$overheadrate') ";
    mysqli_query($db, $query);
    $l = "SELECT SUM(labourtime)*60 FROM labour" ;
    $ll = mysqli_query($db, $l);
    $lll = mysqli_fetch_array($ll);
    //echo $row2[0];
    $lll = (float)$lll[0];
//    $o1 = "SELECT SUM((labourcost*rate*labourtime)/$lll) AS value from labour,receipelabourcost where receipe = '$select8' and type=labourtype";
    $o1 = "SELECT (SUM((rate*labourtime))/$lll)*labourtimereceipe AS value from labour,receipelabourcost where receipe = '$select8'";
  //  $o1 = "SELECT SUM(rate * labourcost/60) AS value from labour,receipelabourcost where receipe = '$select8' and type=labourtype" ;
    $o11 = mysqli_query($db, $o1);

    //echo gettype($o11);
    //echo $o11;
    //$row1 = (int)mysqli_fetch_array($db,$o11);
    $row1 = mysqli_fetch_array($o11);
    //echo gettype($row1);
    //echo $row1[0];
    $row1 = (float)$row1[0];
    echo $row1;
//    $p1 = mysqli_fetch_assoc($o11);
    $o2 = "SELECT SUM(price) FROM $select8" ;
    $o22 = mysqli_query($db1, $o2);
    $row2 = mysqli_fetch_array($o22);
  //echo $row2[0];
  $row2 = (float)$row2[0];
  echo "<br>".$row2;
    $o3 = "SELECT cogs FROM additions where receipe = '$select8' " ;
    $o33 = mysqli_query($db, $o3);
    $row3 = mysqli_fetch_array($o33);
  //echo  $row3[0];
  $row3 = (float)$row3[0];
  echo "<br>".$row3;
//    $p3 = mysqli_fetch_assoc($o33);
    $o44 = $o11+$o22+$o33;
//    $o44 = $p1+$p2+$p3;
//$o44 = 5;
    $o55 = (float)$o44/$servings;
//    echo "<br>".gettype($o55);
    $o66 = (float)$o44/($servings*$yield);
    $o77 = (float)$o66/(1-$target);
    $o88 = round((float)($salesprice-$o66)/$salesprice,2);
    $o99 = (float)$salesprice-$o66;
    $o110 = round((float)$o99*$weekly,2);
    $o111 = (float)$salesprice*$weekly*$overheadrate;
    $o112 = (float)$o110 - $o111;
//    echo "<br>".gettype($o112);
  //  echo $select8, $o11, $o22, $o33, $o44, $o55, $o66, $o77, $o88, $o99, $o110, $o111, $o112;
    $output = "INSERT INTO outputs(receipe,labour2,ingredient2,cogs2,totalcost2,costperserving2,costyield2,thresholdsales2,grossmargin2,grossmarginperserving2,weekly2,overheadallowance2,weeklynet2)
              VALUES ('$select8','$row1','$row2','$row3','$o44','$o55','$o66','$o77','$o88','$o99','$o110','$o111','$o112')" ;
    mysqli_query($db, $output);

$delta = round(((float) ($o88-$target)*100),2);
    $output1 = "INSERT INTO results(receipe,costprice1,salesprice1,target1,currentgross1,delta1,weekly1)
              VALUES ('$select8','$o66','$salesprice','$target','$o88','$delta','$o110')" ;
    mysqli_query($db, $output1);
    $_SESSION['success'] = "Ingredient successfully added!";
    header('location:drop.php');

  }

/*$o1 = "SELECT SUM(rate * labourcost/60) AS value from labour,receipelabourcost where receipe = '$select8' and type=labourtype" ;
$o11 = mysqli_query($db, $o1);
$o2 = "SELECT SUM(price) FROM $select8" ;
$o22 = mysqli_query($db1, $o1);
$o3 = "SELECT cogs FROM additions where receipe = '$select8' " ;
$o33 = mysqli_query($db, $o1);
$o44 = $o11+$o22+$o33;
$o55 = $o44/$servings;
$o66 = $o44/($servings*$yield);
$o77 = $o66/(1-$target);
$o88 = ($salesprice-$o66)/$salesprice;
$o99 = $salesprice-$o66;
$o110 = $o99*$weekly;
$o111 = $salesprice*$weekly;
$o112 = $o110 - $o111;
$output = "INSERT INTO outputs(receipe,labour2,ingredient2,cogs2,totalcost2,costperserving2,costyield2,thresholdsales2,grossmargin2
  	   grossmarginperserving2,weekly2,overheadallowance2,weeklynet2) VALUES ('$select8','$o11','$o22','$o33','$o44','$o55','$o66','$o77'
              '$o88','$o99','$o110','$o111','$o112')" ;
mysqli_query($db, $output); */
}
//add ingredient to a receipe
if(isset($_POST['submit17']))
{
//  $select2= mysqli_real_escape_string($db1, $_POST['select2']);
  $select2 = $_SESSION['select2'];
  echo $select2;
  $query1="";
  $query2="";
  $query3="";
  $query4="";
  $query5="";
  $getinfo1="";
  $getinfo2="";
  $getinfo3="";
  $getinfo4="";
  $getinfo5="";
  $a="";
  $b="";
  $c="";
  $d="";
  $e="";
  $select10 = $_POST['select10'];

  $quant = mysqli_real_escape_string($db1, $_POST['quant']);
  if (empty($quant)) { array_push($errors, "Enter name of receipe"); }
  if (empty($select10)) { array_push($errors, "Select ingredient"); }

$getinfo1 = "SELECT unit from ingredients where name = '$select10'";
$getinfo2 = "SELECT supplier from ingredients where name = '$select10'";
$getinfo3 = "SELECT cost from ingredients where name = '$select10'";
$getinfo4 = "SELECT calories from ingredients where name = '$select10'";
$getinfo5 = "SELECT quantity from ingredients where name = '$select10'";
$query1 = mysqli_query($db,$getinfo1);
$query2 = mysqli_query($db,$getinfo2);
$query3 = mysqli_query($db,$getinfo3);
$query4 = mysqli_query($db,$getinfo4);
$query5 = mysqli_query($db,$getinfo5);
while ($row = mysqli_fetch_array($query1))
{
    $a = $row['unit'];
}
while ($row = mysqli_fetch_array($query2))
{
    $b = $row['supplier'];
}
while ($row = mysqli_fetch_array($query3))
{
  $c = $row['cost'];
}
while ($row = mysqli_fetch_array($query4))
{
    $d = $row['calories'];
}
while ($row = mysqli_fetch_array($query5))
{
    $e = $row['quantity'];
}
$s= $c*$quant/$e;
if (count($errors) == 0)
{
  //$query = "INSERT INTO a(a,aa) VALUES ('$select1','$quant')";
  //echo $rname;
  $query = "INSERT INTO $select2 (ingredients, quantity, unit,
    supplier, price, calories) VALUES ('$select10','$quant','$a','$b','$s','$d')";
  mysqli_query($db1, $query);
  $_SESSION['success'] = "Ingredient successfully added!";
    header('location:receipe.php');
}
//echo $firstname;
}
// update ingredient
if(isset($_POST['submit18']))
{
  $updatedingredient = mysqli_real_escape_string($db, $_POST['updatedingredient']);
  $updatedsupplier= mysqli_real_escape_string($db, $_POST['updatedsupplier']);
  $updatedquantity = mysqli_real_escape_string($db, $_POST['updatedquantity']);
  $updatedcost = mysqli_real_escape_string($db, $_POST['updatedcost']);
  if (empty($updatedingredient)) { array_push($errors, "Enter updated ingredient"); }
  if (empty($updatedsupplier)) { array_push($errors, "Enter updated supplier name"); }
  if (empty($updatedquantity)) { array_push($errors, "Enter updated quantity"); }
  if (empty($updatedcost)) { array_push($errors, "Enter updated cost"); }
  if (count($errors) == 0)
  {
    $query = "UPDATE ingredients SET supplier = '$updatedsupplier', quantity=$updatedquantity, cost=$updatedcost WHERE name='$updatedingredient'";
    mysqli_query($db, $query);
    header('location:retrieve.php');
  }
}


if(isset($_POST['submit21']))
{
  $select11 = $_POST['select11'];
  $select10 = $_SESSION['select10'];
  $getinfo2 = "SELECT cost from ingredients where supplier = '$select11' and name = '$select10'";
  $query2 = mysqli_query($db,$getinfo2);
  while ($row = mysqli_fetch_array($query2))
  {
      $bb = $row['cost'];
  }
  if (count($errors) == 0)
  {
    $query = "INSERT INTO ingredientssupplier(ingredients, supplier, cost) VALUES ('$select10','$select11','$bb')";
    mysqli_query($db, $query);
  }
}
 ?>

</body>
</html>
