<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color:pink;
            padding:20px;
            margin:0px ;
            display: flex;
            justify-content:center;
            align-items:center;
            height:92vh;
            border: 25px dotted #fd86b2;
        }
        table{
            border : 10px dotted #e461bd;
            margin: 15px;
            background: rgba(255,255,255,0.8);
            border-radius:50px;
        }
        td , tr{
            padding:25px;
            border: 2px solid #71CCE3;
            border-radius:50px;
        }
        .table-container{
    background-image:url('flower.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px;
    border-radius: 50px;
        }
        </style>
    <title>Shopping Cart</title>
</head>
<body>
    <div class="table-container">
    <form method="POST" action="">
        <table>
        <tr>
            <td><b>Product</b></td>
            <td><b>Price</b></td>
            <td><b>Quantity</b></td>
  </tr>
        <tr>
            <td>Product A</td>
            <td>100 </td>
            <td><input type="number" name="quantity1" placeholder="0"></td>
</tr>
        <tr>
            <td>Product B</td>
            <td>200 </td>
            <td><input type="number" name="quantity2" placeholder="0"></td>
</tr>
        <tr>
            <td>Product C</td>
            <td>300 </td>
            <td><input type="number" name="quantity3" placeholder="0"></td>
</tr>
        <tr>
            <td>
             <input type="submit" name="submit" value="Calculate Total">
</td>
</tr>
<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

    $q1 = $_POST['quantity1'];
    $q2 = $_POST['quantity2'];
    $q3 = $_POST['quantity3'];

    $total = ($q1 * 100) + ($q2 * 200) + ($q3 * 300);
    
    echo "<h2>Total Amount: ₹ $total</h2>";
}
?>
</table>
</form>
</body>
</html>


        