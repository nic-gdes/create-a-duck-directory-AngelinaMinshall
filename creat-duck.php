<?php 
   

    if(isset($_POST['submit'])){
       

        $errors = array(
            "name" => "",
            "favorite_foods" => "",
            "bio" => ""
        );  
    

        $name = htmlspecialchars($_POST["duck_name"]);
        $favorite_foods = htmlspecialchars($_POST["favorite_foods"]);
        $bio = htmlspecialchars($_POST["biography"]);

        echo $name . $favorite_foods . $bio;

if(empty($name)) {
    $errors['name'] = "A name is required";
} else {
    if(!preg_match('/^[a-z\s]+$/i', $name)) {
        $errors["name"] = "The name has illegal characters";
    }
}

if(empty($favorite_foods)) {
    $errors['favorite_foods'] = " comma required";
} else {
    if(!preg_match('/^[a-z,\s]+$/i', $favorite_foods)) {
        $errors["favorite_foods"] = "need comma";
    }
}

if(empty($bio)) {
    $errors['biography'] = "A bio is required";
} 

        // print_r($errors); 

       if(!array_filter($errors))  {
        require('./config/db.php');

        $sql = "INSERT INTO ducks (name, favorite_foods, bio) VALUES ('$name', '$favorite_foods', '$bio')";


        mysqli_query($conn, $sql);

        echo "Query is successful. Added: ". $name . " to database.";

    //     header("Location: ./index.php");
       } else {
            print_r($errors);
       }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<?php
include ('./components/head.php');
?>

<body>

<?php
include ('./components/nav.php');
?>

<form action="./creat-duck.php" method="POST" id="creat-duck" enctype="multipart/form-data">
        <label for="duck_name">Duck Name:</label>

        <?php if (isset($errors['name'])) { echo "<div class='error'>" . $errors["name"] . "</div>";
        } ?>

        <input type="text" id="duck_name" name="duck_name" value="<?php if (isset($name)) {echo $name;} ?>" required>

        <label for="favorite_foods">Favorite Foods:</label>
        <input type="text" id="favorite_foods" name="favorite_foods" value="<?php if (isset($favorite_foods)) {echo $favorite_foods;} ?>">

        <label for="duck_image">Duck Image:</label>
        <input type="file" id="duck_image" name="duck_image" accept="image/*">

        <label for="biography">Biography:</label>
        <textarea id="biography" name="biography" rows="4"> <?php if (isset($biography)) {echo $biography;} ?></textarea>

        <button type="submit" value="submit" name = "submit">Create Duck</button>
    </form>

<?php
include ('./components/footer.php');
?>
   
</body>
</html>
