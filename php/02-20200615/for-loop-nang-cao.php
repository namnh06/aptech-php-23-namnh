<head> <style>
        th,td {
            border: 1px solid black;
        }
    </style></head>

<?php
    $products = [
        [
            "Samsung Note 10",
            18950000,
            "Bac Ninh, Viet Nam"
        ],
        [
            "iPhone 11 Max Pro",
            25000000,
            "QuangChau, China"
        ]
            ];
            ?>
 <table>
        <thead>
            <tr>
                <th>Ten</th>
                <th>Gia</th>
                <th>NSX</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for($i = 0; $i < count($products); $i++){ ?>
            <tr>
            <?php for($n = 0;$n < count($products[$i]); $n++){ ?>
                <td><?php echo $products[$i][$n]; ?></td>
            <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
</table>
