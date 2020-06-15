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
            <?php for($i = 0; $i < count($tensp); $i++ ){?>
                <tr>
                    <td><?php echo ($i + 1); ?></td>
                    <td><?php echo $tensp[$i]; ?></td>
                    <td><?php echo $giasp[$i]; ?></td>
                    <td><?php echo $nsx[$i]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    
</body>
</html>