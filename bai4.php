<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if (isset($_POST["sd"])&& isset($_POST["sc"]))
{
$sd=$_POST["sd"];
$sc=$_POST["sc"];
$tong=0;
$sum_chan=0;
$sum_le=0;
$tich=1;
for ($i=$sd;$i<=$sc;$i++)
$tong=$tong+$i;
for ($i=$sd;$i<=$sc;$i++)
$tich=$tich*$i;
for ($i=$sd;$i<=$sc;$i++)
if ($i%2==0)
$sum_chan=$sum_chan+$i;
for ($i=$sd;$i<=$sc;$i++)
if ($i%2!=0)
$sum_le=$sum_le+$i;
}

?>
<form action="bai4.php" method="post" >
<table width="728" border="1">
<tr>
<td width="122">&nbsp;</td>
<td width="76">Số bắt đầu</td>
<td width="169"><label for="textfield"></label>
<input type="text" name="sd" id="textfield" value="<?php if (isset($_POST["sd"])) echo $_POST["sd"];?> "/></td>
<td width="152">Số kết thúc</td>
<td width="175"><label for="textfield2"></label>
<input type="text" name="sc" id="textfield2" value="<?php if (isset($_POST["sc"])) echo $_POST["sc"];?> "/></td>
</tr>
<tr>
<td colspan="5">Kết quả
<label for="textfield3"></label></td>
</tr>
<tr>
<td>Tổng các số</td>
<td colspan="4"><label for="textfield4"></label>
<input type="text" name="tong" id="textfield4" value="<?php if (isset($tong)) echo $tong;?> "/></td>
</tr>
<tr>
<td>Tích các số</td>
<td colspan="4"><label for="textfield5"></label>
<input type="text" name="tich" id="textfield5" value="<?php if (isset($tich)) echo $tich;?> "/></td>
</tr>
<tr>
<td>Tổng các số chẵn</td>
<td colspan="4"><label for="textfield6"></label>
<input type="text" name="sum_chan" id="textfield6" value="<?php if (isset($sum_chan)) echo $sum_chan;?> "/></td>
</tr>
<tr>
<td>Tổng các số lẻ</td>
<td colspan="4"><label for="textfield7"></label>
<input type="text" name="sum_le" id="textfield7" value="<?php if (isset($sum_le)) echo $sum_le;?> "/></td>
</tr>
<tr>
<td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
</tr>
</table>
</form>
</body>
</html>
