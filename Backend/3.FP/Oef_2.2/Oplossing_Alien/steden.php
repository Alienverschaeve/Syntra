<?php
require_once "functions.php";
$title="Oef 2.2";
PrintHead();

?>

<body>
<div class="jumbotron text-center">
    <h1>Leuke Plekken in Europa</h1>
    <p>Resize this repsonsive page to see the effect</p>
</div>
<div class='container'>
    <div class= 'row'>
        <?php
        require_once "database.php";

        //we need data from the database, so...
        require_once "database.php";

        $rows = GetData( "select * from image" );

        //loop over de afbeeldingen
        foreach ( $rows as $row )
        {
            //de kolom met de titel en de afbeelding erin
            print '<div class="col-sm-4">';
            print '<h3>' . $row['img_title'] . '</h3>';
            print '<p>' .  $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';
            print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';

            $link_image = "../img/" . $row['img_filename']. ".jpg";
            print '<img class="img-fluid" src="' . $link_image . '">';
            print "<br>";

            print '</div>' ;
        }
        ?>
    </div>
</div>
</body>
</html>