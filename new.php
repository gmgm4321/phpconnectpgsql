<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert</title>
</head>
<body>

<form action="funtion.php" method="post">
  <p>建立資料</p>
  <table border="1">
  <tbody><tr>
    <td>id</td>
    <td><input type="text" name="addid"></td>
    <td>姓名</td>
    <td><input type="text" name="addname"></td>
    <td>性別</td>
    <td><input type="text" name="addgender"></td>
    <td>學歷</td>
    <td><input type="text" name="addedubg"></td>
    <td>生日</td>
    <td><input type="text" name="addbirthday"></td>								
  </tr>
</tbody></table>
      <br>
      <label>
        <input type="submit" name="newbtn" value="Add">
      </label>
      <label>
        <input type="reset" value="Reset">
      </label>
      <label>
        <input type="button" value="Back" onclick="self.location.href=&#39;index.php&#39;">
      </label>
</form>


</body></html>
