<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
</head>
<body>

<form action="funtion.php" method="post">
<FONT SIZE="7" COLOR="#FF0000">Warning!!!!!妳確定要刪除這筆資料? </font>
<table border="1">
 <tr>
    <tr>
    <td>id</td>
    <td> <? echo $_POST[id] ?><input  name="id" type="hidden" value="<? echo $_POST[id] ?>"></td>
    <td>姓名</td>
    <td><? echo $_POST[name] ?><input  name="name" type="hidden" value="<? echo $_POST[name] ?>"></td> 
    <td>性別</td>
    <td><? echo $_POST[gender] ?><input  name="gender" type="hidden" value="<? echo $_POST[gender] ?>"></td>
    <td>學歷</td>
    <td><? echo $_POST[edubg] ?><input  name="edubg" type="hidden" value="<? echo $_POST[edubg] ?>"></td>
    <td>生日</td>
    <td><? echo $_POST[birthday] ?><input  name="birthday" type="hidden" value="<? echo $_POST[birthday] ?>"></td>
    </tr>
</table>
      <br>
      <label>
        <input type="submit" name="delbtn" value="Yes">
      </label>
      <label>
        <input type="button" value="No" onclick="self.location.href=&#39;index.php&#39;">
      </label>
</form>
</body>
</html>

    