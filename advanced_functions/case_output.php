<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASE Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Comic Stock Status Using CASE Function</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Comic</th>
                    <th>Stock</th>
                    <th>Stock Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "
                    SELECT 
                        comic_title,
                        comic_stock,
                        CASE
                            WHEN comic_stock <= 5 THEN 'Low Stock'
                            WHEN comic_stock BETWEEN 6 AND 15 THEN 'Medium Stock'
                            ELSE 'In Stock'
                        END AS stock_status
                    FROM comic
                ";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['comic_title']."</td>";
                        echo "<td>".$row['comic_stock']."</td>";
                        echo "<td>".$row['stock_status']."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' class='text-center'>No data found</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
