<?php include('server1.php') ?>
<html>
<body>

  <?php
      //    session_start();
  //    $errors = array();
          $conn = mysqli_connect('localhost','root','saurabh','project');
          //$query = "SELECT * FROM ingredients ORDER BY id ASC";
        	//$sql = mysqli_query($db, $query);
          $sql_query="SELECT * FROM results";
          	$result = $conn->query($sql_query) or $conn->error;
          //while loop removed from here
          ?>
          <table width="70%">
            <thead>
              <tr>
               	<td>Receipe</td>
                <td>Cost Price</td>
                <td>Sales Price</td>
                <td>Target Gross Margin</td>
                <td>Current Gross Margin</td>
                <td>Delta to Target</td>
                <td>Weekly Gross Margin</td>
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
                    <td><?php echo $row[3]."%"; ?></td>
                    <td><?php echo $row[4]."%"; ?></td>
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




</body>
</html>
