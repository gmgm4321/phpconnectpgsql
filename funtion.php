<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<? 
$dbconn = pg_connect("host=localhost port=5432 dbname=test user=Yuki password=0988186086")
or die('Could not connect: ' . pg_last_error());
?>
<? if($_POST[editbtn] == "edit") { 
$editSql ="UPDATE testtable SET id= $_POST[new_id], name= '$_POST[new_name]',gender= '$_POST[new_gender]',edubg= '$_POST[new_edubg]',birthday= '$_POST[new_birthday]' WHERE id='$_POST[new_id]'";

	  $query = pg_query($editSql)or die('Fail！: ' .pg_ErrorMessage());
	  echo '<font color="ff0000"><p>Edit Successful!</p></font>';	  	
      }
?>	

<? if($_POST[delbtn] == "Yes") { 
	$delSql = "delete from testtable where id=$_POST[id]";
	pg_query($delSql);
	echo '<p>Delete Successful!</p>';
      }
?>
<? if($_POST[newbtn] == "Add"){	
//$insertItem="";
        $addSql="insert into testtable (id,name,gender,edubg,birthday) values ('$_POST[addid]','$_POST[addname]','$_POST[addgender]','$_POST[addedubg]','$_POST[addbirthday]')" ;
	  $query = pg_query($addSql)or die('Fail！: ' .pg_ErrorMessage());
	  echo '<font color="ff0000"><p>Add Successful!</p></font>';
      }
?>
<input type="button" value="回首頁" onclick="self.location.href='index.php'" />
<? pg_close($dbconn); ?>
</body>
</html>
