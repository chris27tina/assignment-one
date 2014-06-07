
<?php
require 'database.php';

mysql_query("INSERT INTO friends (names,phone, age) VALUES('Linet', 0723447711, 20)") 
or die(mysql_error('Insert Failed'));  

mysql_query("INSERT INTO friends (names,phone, age) VALUES('Bwire', 0712798777, 21)") 
or die(mysql_error('Insert Failed'));  

mysql_query("INSERT INTO friends (names,phone, age) VALUES('Mike Muli', 0785465432, 24)") 
or die(mysql_error('Insert Failed'));  
?>
