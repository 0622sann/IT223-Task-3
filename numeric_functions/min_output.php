<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIN Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Cheapest Comic (Using MIN)</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Cheapest Comic</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "SELECT comic_title, comic_price FROM comic WHERE comic_price = ( SELECT MIN(comic_price) FROM comic )";
                $result = mysqli_query($conn, $sql);

                if($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['comic_title']."</td>";
                    echo "<td>₱ ".number_format($row['comic_price'], 2)."</td>";
                    echo "</tr>";
                } else {
                    echo "<tr><td class='text-center'>No data found</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
