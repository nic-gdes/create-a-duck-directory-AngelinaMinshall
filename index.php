<?php
include('./config/db.php');

$sql = "SELECT name,favorite_foods,img_src FROM ducks";

$result = mysqli_query($conn, $sql);
$ducks = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);                                       

?>

<!DOCTYPE html>
<html lang="en">

<?php include ('./components/head.php');
?>

<body>

<?php
include ('./components/nav.php');
?>


    <section>
        <h2>Welcome to our Duck World!</h2>
    </section>

    <div class="grid-container">

<?php foreach($ducks as $duck) : ?>
        <div class="duck-container">
            <img class="duck-image" src="<?php echo $duck["img_src"]; ?>" alt="Duck 1 Image">
            <h3><?php echo $duck["name"];?></h3>
            <p>Favorite Foods:</p>
            <?php 
                $foods_list = explode(",", $duck["favorite_foods"]);
                // print_r($foods_list);
            ?>
            <ul class="favorite-foods">
         <?php foreach($foods_list as $food) : ?>
            <li> <?php echo $food ?></li>
            <?php endforeach ?>
            </ul>
        </div>
<?php endforeach ?>

        <!-- <div class="duck-container">
            <img class="duck-image" src="./assets/manderian.jpg" alt="Duck 2 Image">
            <h3>Manderian Duck</h3>
            <p>Favorite Foods:</p>
            <ul>
                <li>Fish</li>
                <li>Vegetables</li>
                <li>Snails</li>
            </ul>
        </div>

        <div class="duck-container">
            <img class="duck-image" src="./assets/redhead.jpeg" alt="Duck 3 Image">
            <h3>Red Head Duck</h3>
            <p>Favorite Foods:</p>
            <ul>
                <li>Grains</li>
                <li>Small Fish</li>
                <li>Algae</li>
            </ul>
        </div>
    </div> -->
    
<?php
include ('./components/footer.php');
?>
   
</body>
</html>

