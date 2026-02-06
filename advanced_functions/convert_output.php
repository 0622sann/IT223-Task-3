<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONVERT Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Comic Price Conversion (Using CONVERT)</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Comic Title</th>
                    <th>Original Price (Numeric)</th>
                    <th>Converted Price (CHAR)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "SELECT comic_title, comic_price, CONVERT(comic_price, CHAR) AS price_as_text FROM comic";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['comic_title']."</td>";
                        echo "<td>".$row['comic_price']."</td>";
                        echo "<td>".$row['price_as_text']."</td>";
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
