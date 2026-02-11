<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        hearder("Location: index.php");
        exit();
    }
?>

<form action="logout.php" method="POST" class="login-email">
    <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    <div class="input-group">
        <button type="submit" class="btn">Logout</button>
    </div>
</form>