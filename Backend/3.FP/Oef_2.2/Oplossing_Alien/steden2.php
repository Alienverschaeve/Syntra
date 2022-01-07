<?php
require_once "functions.php";
$title="Oef2.2";
PrintHead();
Printbody();
PrintJumbo( $title = "Erg leuke plekken in Europa (steden2.php)",
    $subtitle = "Je kan deze pagina resizen om het responsive karakter in werking te zien");
?>
?>
<div class='container'>
    <div class= 'row'>
        <?php
        require_once "database.php";

        //we need data from the database, so...
        require_once "database.php";
        //we need data from the database, so...
        require_once "database.php";

        //alle records ophalen
        $rows = GetData( "select * from image" );

        //loop over de afbeeldingen
        foreach ( $rows as $row ) {
            //de kolom met de titel en de afbeelding erin
            print '<div class="col-sm-4">';
            print '<h3>' . $row['img_title'] . '</h3>';
            print '<p>' . $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';
            print '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>';

            $link_image = "../img/" . $row['img_filename'] . ".jpg";
            print '<img class="img-fluid" src="' . $link_image . '">';
            print "<br>";

            //hyperlink
            print "<a href=stad.php?img_id=" . $row["img_id"] . ">Meer info....</a>";
            print"</div>";
        }?>

    </div>

</div>
<?php
PrintEndOfPage();
?>
