<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPConnectPGSQL Test</title>
</head>
<body>
<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=test user=Yuki password=0988186086")
or die('Could not connect: ' . pg_last_error());
$query = 'SELECT * FROM testtable'; 
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
$total_fields=pg_num_fields($result);
$total_records=pg_num_rows($result);
echo "現有". $total_records."筆資料";	
?>
<hr>
<? for ($i=0;$i<$total_records;$i++) {$row = pg_fetch_assoc($result);  ?>
<form action="funtion.php" method="post">
<table border="1">
  <tr>
    <td>id</td>
    <td><? echo $row[id];?><input name="id" 	type="hidden" value="<? echo $row[id];?>" /></td>
    <td>姓名</td>
    <td bgcolor=yellow><?php echo $row[name];?><input name="name" type="hidden" 	value="<? echo $row[name];?>" /></td>
    <td>性別</td>
    <td><? echo $row[gender];?><input name="gender" type="hidden" 	value="<? echo $row[gender];?>" /></td>
    <td>學歷</td>
    <td><? echo $row[edubg];?><input name="edubg" type="hidden" 	value="<? echo $row[edubg];?>" /></td>
    <td>生日</td>
    <td><? echo $row[birthday];?><input name="birthday" type="hidden" 	value="<? echo $row[birthday];?>" /></td>
    <td><input type="button" name="btn" value="修改" onclick="this.form.action='edit.php';this.form.submit();"/></td>
    <td><input type="button" name="btn" value="刪除"onclick="this.form.action='del.php';this.form.submit();"/></td>			
  </tr>  
</table>
</form>
<hr>
<?php } ?>
<input type="button" value="new一個" onclick="self.location.href='new.php'" />
<? pg_close($dbconn); ?>
</body>
</html>
