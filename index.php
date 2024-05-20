<?php
echo 'Comment ça va ??';
echo '<br/>';
echo '<br/>';

$servername = getenv('SERVER_NAME');
$username = getenv('USER');
$password = getenv('PASSWORD');
$dbname = getenv('DB_NAME');
$testEnv = getenv('TEST_ENV');

echo '--------';
echo '<br/>';
echo 'servername = ' . $servername;
echo '<br/>';
echo '$username = ' . $username;
echo '<br/>';
echo 'password = ' . $password;
echo '<br/>';
echo 'dbname = ' . $dbname;
echo '<br/>';
echo '--------';
echo '<br/>';
echo 'TEST_ENV = ' . $testEnv;
echo '<br/>';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Execute the query
    $stmt = $conn->prepare("SELECT id, message, date FROM test");
    $stmt->execute();

    // Step 3: Fetch the results
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $rows = $stmt->fetchAll();

    // Step 4: Display the results
    echo 'Reading from DB....';
    echo '<br/>';
    foreach ($rows as $row) {
        echo "Message: " . $row["message"] . " - Date: " . $row["date"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close the connection
$conn = null;

