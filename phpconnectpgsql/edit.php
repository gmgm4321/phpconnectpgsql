<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit</title>
</head>
<body>

<form action="funtion.php" method="post">
  <table border="1">
  <tbody>
    <tr>
    <td>id</td>
    <td>
    <input type="text" name="new_id" value="<? echo $_POST[id] ?>"></td>
    <td>姓名</td>
    <td><input type="text" name="new_name" value="<? echo $_POST[name] ?>"></td> 
    <td>性別</td>
    <td>
    <input type="text" name="new_gender" value="<? echo $_POST[gender] ?>"></td>
    <td>學歷</td>
    <td>
    <input type="text" name="new_edubg" value="<? echo $_POST[edubg] ?>"></td>
    <td>生日</td>
    <td>
      <input type="text" name="new_birthday" value="<? echo $_POST[birthday] ?>"></td>
    </tr>
</tbody></table>
      <br>
      <label>
        <input type="submit" name="editbtn" value="edit">
      </label>
      <label>
        <input type="button" value="Back" onclick="self.location.href=&#39;index.php&#39;">
      </label>
</form>
</body>
</html>
