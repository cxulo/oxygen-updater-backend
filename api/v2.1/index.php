<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    include '../shared/database.php';

    $database = connectToDatabase();

    $query = $database->query("SELECT status, latest_app_version FROM server_status");
    $result = $query->fetch(PDO::FETCH_ASSOC);

    echo "API version: 2.1 <br/>";
    echo "Server status: ".$result["status"]." <br/>";
    echo "Latest app version: ".$result["latest_app_version"]." <br/>";
?>

</body>
</html>
