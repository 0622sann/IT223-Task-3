<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Current MySQL User</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>MySQL User (USER)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';
                $sql = "SELECT USER() AS `current_user`";
                $result = mysqli_query($conn, $sql);

                if($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row['current_user']."</td></tr>";
                } else {
                    echo "<tr><td class='text-center'>Could not fetch user</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
