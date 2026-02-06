<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFNULL Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Customer Address Check (Using IFNULL Function)</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Customer Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "SELECT customer_name, IFNULL(address, 'No address provided') AS final_address FROM customers";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$row['customer_name']."</td>";
                        echo "<td>".$row['final_address']."</td>";
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
