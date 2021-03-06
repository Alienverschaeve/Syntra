<!doctype html>
<!--Werkt enkel vanaf een andere pagina of via localhost!-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oef 1.2</title>
    <!--CSS Bootstrap template van de opgave 1.2-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

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