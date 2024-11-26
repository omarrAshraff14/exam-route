<?php
$backgroundColor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
if (isset($_POST['color'])) {
    $backgroundColor = $_POST['color'];
    setcookie('bgcolor', $backgroundColor, time() + (86400 * 30)); 
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?= htmlspecialchars($backgroundColor); ?>;">

    <h1>Choose a Background Color</h1>
    <form method="post" action="">
        <label for="color">Select Color:</label>
        <select name="color" id="color">
            <option value="white" <?= $backgroundColor == 'white' ? 'selected' : ''; ?>>White</option>
            <option value="lightblue" <?= $backgroundColor == 'lightblue' ? 'selected' : ''; ?>>Light Blue</option>
            <option value="lightgreen" <?= $backgroundColor == 'lightgreen' ? 'selected' : ''; ?>>Light Green</option>
            <option value="yellow" <?= $backgroundColor == 'yellow' ? 'selected' : ''; ?>>Yellow</option>
            <option value="pink" <?= $backgroundColor == 'pink' ? 'selected' : ''; ?>>Pink</option>
        </select>
        <button type="submit">Change Color</button>
    </form>

</body>
</html>
