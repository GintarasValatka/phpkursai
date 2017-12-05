<!DOCTYPE html>
<html>
    <head>
        <title>Demo 1</title>
        <meta charset="UTF-8">
    </head>
<body>
<?php 

$servername = 'localhost';
$dbname = 'auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Nepavyko prisjungti: ' . $conn->connect_error);
}

if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
} else {
    $offset = 0;
}

$sql = 'SELECT `number`, `distance`/`time` as `speed`, `date` FROM radars ORDER BY `number`, `date` DESC LIMIT 10 OFFSET '.$offset;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table>
        <tr>
            <th>Numeris</th>
            <th>Data</th>
            <th>Greitis</th>
        </tr>
    
    <?php
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['speed']; ?></td>
        </tr>
        <?php
    }
    echo '</table>';
} else {
    echo 'nėra duomenų';
}
$conn->close();

?>
</body>
</html>