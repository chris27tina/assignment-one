<?php

require "database.php";

// retreive all records from akirachix table
$result = mysql_query("SELECT * FROM  friends");

?>
<html>
<body>
  <title>List of Friends</title>

</head>
<body>
<div class="wrapper">
<div class="page-body">
  <h2>My Friends</h2>
</div>
  <table class="table">
    <td>
      <tr>
        <th>Id</th>
        <th>Names</th>
        <th>Phone</th>
        <th>Age</th>
      </tr>
    </td>
    <tbody>
<?php
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	echo '<tr>';
	  echo "<td> ".$row['id'].'</td>';
	  echo "<td>".$row['names'].'</td>';
	  echo "<td>".$row['phone'].'</td>';
	  echo "<td>".$row['age'].'</td>';
	  echo '</tr>';
}
?>
 </tbody>
  </table>
</div>
</body>
</html>