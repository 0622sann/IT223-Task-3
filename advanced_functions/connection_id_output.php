<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNECTION_ID Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Database Connection ID (Using CONNECTION_ID)</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Current Connection ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "SELECT CONNECTION_ID() AS connection_id";
                $result = mysqli_query($conn, $sql);

                if($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$row['connection_id']."</td>";
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
