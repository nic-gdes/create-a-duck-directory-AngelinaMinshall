<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>

<body>

<?php
include 'nav.php';
?>

<?php
    // PHP code to handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve form data
        $duckName = $_POST["duckName"] ?? "";
        $favoriteFoods = $_POST["favoriteFoods"] ?? "";
        $biography = $_POST["biography"] ?? "";

        // Display submitted data (for testing purposes)
        echo "<div style='margin: 20px auto; max-width: 600px;'>";
        echo "<h2>Submitted Duck Information</h2>";
        echo "<p><strong>Duck Name:</strong> $duckName</p>";
        echo "<p><strong>Favorite Foods:</strong> $favoriteFoods</p>";
        echo "<p><strong>Biography:</strong> $biography</p>";
        echo "</div>";
    }
    ?>

<form action="create-duck.php" method="POST" enctype="multipart/form-data">
        <label for="duckName">Duck Name:</label>
        <input type="text" id="duckName" name="duckName" required>

        <label for="favoriteFoods">Favorite Foods:</label>
        <input type="text" id="favoriteFoods" name="favoriteFoods" required>

        <label for="duckImage">Duck Image:</label>
        <input type="file" id="duckImage" name="duckImage" accept="image/*" required>

        <label for="biography">Biography:</label>
        <textarea id="biography" name="biography" rows="4" required></textarea>

        <button type="submit">Create Duck</button>
    </form>

<?php
include 'footer.php';
?>
   
</body>
</html>
