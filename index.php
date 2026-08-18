<?php
    error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $age = $_POST["age"];

    $sql = "INSERT INTO users (name, age, status) VALUES (?, ?, 0)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Management</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>User Management</h1>

        <form method="POST">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <button type="submit">Submit</button>

        </form>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $result = $conn->query("SELECT * FROM users");

                while ($row = $result->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $row["id"]; ?></td>

                        <td><?php echo htmlspecialchars($row["name"]); ?></td>

                        <td><?php echo $row["age"]; ?></td>

                        <td><?php echo $row["status"]; ?></td>

                        <td>
                            <button type="button"
                                    class="toggle-btn"
                                    data-id="<?php echo $row["id"]; ?>">
                                Toggle
                            </button>
                        </td>
                    </tr>

                <?php
                }
                ?>

            </tbody>

        </table>

    </div>

    <script src="script.js"></script>

</body>
</html>