<?php
include ("config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enteries</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <script src="./assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <table>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Query = "SELECT * FROM `registration-table`";
                    $result = mysqli_query($conn, $Query);
                    if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <tr>
                                <th scope="row">
                                    <?php echo $row['id']; ?>
                                </th>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['contactno']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo 'Data Not FOund';
                    }
                    ?>
                </tbody>
            </table>
        </table>
    </div>
</body>

</html>