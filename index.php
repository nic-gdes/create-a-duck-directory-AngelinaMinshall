
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
        <div class="duck-container">
            <img class="duck-image" src="./assets/harteman.jpeg" alt="Duck 1 Image">
            <h3>Harteman Duck</h3>
            <p>Favorite Foods:</p>
            <ul>
                <li>Bread</li>
                <li>Seeds</li>
                <li>Insects</li>
            </ul>
        </div>

        <div class="duck-container">
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
    </div>
    
<?php
include ('./components/footer.php');
?>
   
</body>
</html>

