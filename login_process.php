<?php
// login_process.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "config.php";

$email    = trim($_POST['email']    ?? '');
$password = trim($_POST['password'] ?? '');

// Empty field check
if (empty($email) || empty($password)) {
    header("Location: login.php?error=empty_fields");
    exit();
}

// Fetch user by email
$sql  = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // Works for BOTH plain-text AND hashed passwords
    $plain_ok = ($password === $row['password']);
    $hash_ok  = password_verify($password, $row['password']);

    if ($plain_ok || $hash_ok) {
        // ✅ Login success — set session
        $_SESSION['logged_in']  = true;
        $_SESSION['user_id']    = $row['id'];
        $_SESSION['user_email'] = $row['email'];

        // Try all common name column names
        $_SESSION['user_name'] =
            $row['name']      ??
            $row['username']  ??
            $row['full_name'] ??
            $row['email'];

        header("Location: index.php");
        exit();

    } else {
        header("Location: login.php?error=wrong_password");
        exit();
    }

} else {
    header("Location: login.php?error=user_not_found");
    exit();
}
?>