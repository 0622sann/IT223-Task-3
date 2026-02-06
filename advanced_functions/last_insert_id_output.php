<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAST_INSERT_ID Function Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3"><b>Last Inserted Comic ID (Using LAST_INSERT_ID)</b></h4>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th>Last Inserted ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../dbconn.php';

                //Insert a new comic
                $insert_sql = "INSERT INTO comic (genre_id, comic_title, comic_description, comic_stock, comic_price) 
                               VALUES (4, 'Batman', 'Batman is a comic book hero from Gotham City who fights crime without superpowers, using his intelligence, combat skills, and advanced gadgets.', 2, 199.50)";
                mysqli_query($conn, $insert_sql);

                //last inserted ID
                $result = mysqli_query($conn, "SELECT LAST_INSERT_ID() AS last_id");

                if($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row['last_id']."</td></tr>";
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
