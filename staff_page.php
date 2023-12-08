<?php

// Assuming $_SESSION['login_name'] contains the user's login name

// Check if the login name is 'staff'
if ($_SESSION['login_name'] === 'staff') {
    $welcomeMessage = "Welcome back staff";
} else {
    // If not staff, you can handle it accordingly
    $welcomeMessage = "Welcome back " . $_SESSION['login_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>

<div>
    <?php echo $welcomeMessage; ?>
</div>

</body>
</html>
