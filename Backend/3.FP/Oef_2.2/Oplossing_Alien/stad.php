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

        if ( ! is_numeric($_GET['img_id'] ) ) {
            die("Foutieve GET parameter!");
        };

        $rows = GetData( 'SELECT * FROM image where img_id=' . $_GET['img_id'] );
        //$row = $rows[0];

        foreach( $rows as $row )
        {
            //de kolom met de titel en de afbeelding erin
            print '<div class="col-sm-12">';

            //title, filename, pixels
            print '<h3>' . $row['img_title'] . '</h3>';
            print '<p>filename: ' .  $row['img_filename'] . '</p>';
            print '<p>' .  $row['img_width'] . " x " . $row['img_height'] . ' pixels</p>';

            //afbeelding
            $link_image = "../img/" . $row['img_filename'].".jpg";
            print '<img class="img-fluid" style="width: 75%;" src="' . $link_image . '">';
            print "<br>";
            //hyperlink
            print '<p></p>';
            print '<p><a href=steden2.php>Terug naar overzicht</a></p>';

            print '</div>' ;
        }
        ?>

    </div>

</div>
</body>
</html>