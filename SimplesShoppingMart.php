<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<form action="redirect.php" method="post">
<table style="border:1px solid black" >
  <tr>
    <th style="border:1px solid black">Label </th>
    <th style="border:1px solid black">Control (For Quantity) </th>
    <th style="border:1px solid black">Price (As Label)</th>
  </tr>
  <tr>
    <td>Tooth Brush</td>
    <td><input type="text" name="toothBrush" /></td>
    <td>40</td>
  </tr>
  <tr>
    <td>Tooth Paste</td>
    <td><input type="text" name="toothPaste" /></td>
    <td>60</td>
  </tr>
  <tr>
    <td>Hand wash</td>
    <td><input type="text" name="handWash" /></td>
    <td>55</td>
  </tr>
  <tr>
    <td>Cocunut Hair Oil</td>
    <td><input type="text" name="coconut" /></td>
    <td>60</td>
  </tr>
  <tr>
    <td>Bathing Soap</td>
    <td><input type="text" name="bathingsoap" /></td>
    <td>25</td>
  </tr>
</table>
    <input type="submit" name="buy" value="Buy" />
</form>
</body>
</html>