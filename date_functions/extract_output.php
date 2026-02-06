<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXTRACT Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h4 class="mb-3"><b>Extract Year, Month, Day from Comic Added (Using EXTRACT)</b></h4>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Comic Name</th>
                    <th>Created At</th>
                    <th>Year</th>
                    <th>Month</th>
                    <th>Day</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';

                $sql = "SELECT comic_title, created_at, 
                               EXTRACT(YEAR FROM created_at) AS year,
                               EXTRACT(MONTH FROM created_at) AS month,
                               EXTRACT(DAY FROM created_at) AS day
                        FROM comic";

                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['comic_title']."</td>";
                        echo "<td>".$row['created_at']."</td>";
                        echo "<td>".$row['year']."</td>";
                        echo "<td>".$row['month']."</td>";
                        echo "<td>".$row['day']."</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No comics available</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
