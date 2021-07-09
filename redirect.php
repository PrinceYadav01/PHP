<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
</head>
<body>
<table style="border:1px solid black" >
  <tr>
    <th style="border:1px solid black">Label </th>
    <th style="border:1px solid black">Control (For Quantity) </th>
    <th style="border:1px solid black">Price (As Label)</th>
    <th style="border:1px solid black">Total</th>
  </tr>
  <?php 
  function writeMsg($pname, $pprice, $pquantity) {
    $total = $pprice*$pquantity;
    echo "<tr>";
    echo "<td style='border:1px solid black'>$pname</td>";
    echo "<td style='border:1px solid black'>$pquantity</td>";
    echo "<td style='border:1px solid black'>$pprice</td>";
    echo "<td style='border:1px solid black'>$total</td>";
    echo "</tr>";
  }
  define("product", [
    "Tooth Brush",
    "Tooth Paste",
    "Hand wash",
    "Cocunut Hair Oil",
    "Bathing Soap"
  ]);
  define("price", [
    40,
    60,
    55,
    50,
    25
  ]);
  define("quantity", [
    $_POST["toothBrush"],
    $_POST["toothPaste"],
    $_POST["handWash"],
    $_POST["coconut"],
    $_POST["bathingsoap"]
  ]);
  $finalTotal = 0;
  for($i =0; $i <= 4 ; $i++){
  try{
  if(quantity[$i]>0){
  $total = price[$i]*quantity[$i];
  $finalTotal += $total;
  writeMsg(product[$i], price[$i], quantity[$i]);
  }
  }
  catch(Exception $e) {
    //   echo 'Message: ' .$e->getMessage();
  }
  }
  echo "<tr>";
  echo "<td style='border:1px solid black'>Total</td>";
  echo "<td style='border:1px solid black'></td>";
  echo "<td style='border:1px solid black'></td>";
  echo "<td style='border:1px solid black'>$finalTotal</td>";
  echo "</tr>";
  

    ?>
</table>
</body>
</html>