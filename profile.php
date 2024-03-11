<?php 

$duck_is_live = false;

if(isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    require('./config/db.php');

    $sql = "SELECT id, name, favorite_foods, bio, img_src FROM ducks WHERE id =$id";
    $result = mysqli_query($conn, $sql);

    $duck = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);


    if(isset($duck["id"])) {
        $duck_is_live = true; 
    }

    $duck_is_live = true;
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
    <section>

        <?php if ($duck_is_live) : ?>
        <div class="profile-container">
            <img class="" src="<?php echo $duck['img_src']; ?>" alt="duck.">

            <h2> <?php echo $duck['name'];?> </h2>

            <p> <?php echo $duck['bio']; ?></p>
       
            <ul>
            <?php 
                $foods_list = explode(",", $duck["favorite_foods"]);
                // print_r($foods_list);
            ?>
            </ul>
            <ul class="favorite-foods">
         <?php foreach($foods_list as $food) : ?>
            <li> <?php echo $food ?></li>
            <?php endforeach ?>
            </ul>

            <p>Bio: Quackington is a friendly and curious duck who loves exploring ponds and interacting with other feathered friends. With a diet consisting of bread, seeds, and insects, Quackington leads a happy and quacktastic life!</p>
        </div>
    </section>

    <?php else : ?>

        <Section class="no-duck">
            <h1>Sorry, no duck.</h1>
        </Section>

    <?php endif ?>
<?php
include ('./components/footer.php');
?>
   
</body>
</html>
