<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

session_start();

$_SESSION['blabla'] = "Dit is blabla";

require_once "lib/pdo.php";
require_once "lib/html_functions.php";

PrintHead();
PrintJumbo( $title = "Leuke plekken in Europa" ,
                        $subtitle = "Tips voor citytrips voor vrolijke vakantiegangers!" );

//var_dump( $_SESSION['last_sql'] );
?>

<div class="container">
    <div class="row">

<?php
    //get data
    $data = GetData( "select * from image" );

    //get template
    $template = file_get_contents("templates/table_row_gemeenten.html");

    //merge
    $output = MergeViewWithData( $template, $data );
    print $output;
?>

    </div>
</div>

</body>
</html>