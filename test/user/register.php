<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    if ($password === $confirm_password) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Database connection
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "user_auth"; // Replace with your database name

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Gebruikersnaam of e-mail bestaat al.";
        } else {
            // Insert new user
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);
            if ($stmt->execute()) {
                echo "Registratie succesvol. <a href='login.html'>Log hier in</a>.";
            } else {
                echo "Er is een fout opgetreden bij het registreren van uw account.";
            }
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Wachtwoorden komen niet overeen.";
    }
} else {
    echo "Ongeldige verzoeksmethode.";
}
?>
