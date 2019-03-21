<html>
<body>
  <?
   $querystr = "
   SELECT *
  FROM $wpdb->users,
  WHERE 1
   ";
   $result = $wpdb->get_results($querystr, OBJECT);
   var_dump($wpdb->users);
   var_dump($result);
 ?>
 <p> <?
 echo $result[0]["email"];
 if (1) {
     // output data of each row
     while($row = $result->fetch_assoc()){
         foreach($row as $cname => $cvalue){
             print "$cname: $cvalue\t";
         }
         print "\r\n";
     }
 } else {
     echo "0 results";
 }




 ?></p>
</body>
</html>
