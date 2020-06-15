<!DOCTYPE html>
<html>
<head>
    <style>
        th,td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
    $tensp = ["Dien Thoai","Laptop","Kindle"];
    $giasp = [1000, 1999.50, 90.48];
    $nsx = ["Da Nang", "Singapore", "New York"];
?>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ten</th>
                <th>Gia</th>
                <th>NSX</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $tensp[0] ; ?></td>
                <td><?php echo $giasp[0] ; ?></td>
                <td><?php echo $nsx[0] ; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php echo $tensp[1] ; ?></td>
                <td><?php echo $giasp[1] ; ?></td>
                <td><?php echo $nsx[1] ; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $tensp[2] ; ?></td>
                <td><?php echo $giasp[2] ; ?></td>
                <td><?php echo $nsx[2] ; ?></td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>