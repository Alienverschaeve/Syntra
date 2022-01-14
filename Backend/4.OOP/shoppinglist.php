<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";
require_once"models.shoppinglist.php";

PrintHead();
PrintJumbo($title="We gaan shoppen");
?>

<div class="container">
    <div class="row">

        <?php
#$sl is een objectvariable, maar ook een instance van de class Shoppinglist
         $vandaag=new DateTime();

        $sl=new Shoppinglist();
        $sl->shop="Zeeman";
        $sl->$date=$vandaag
        $sl->$items=["onderbroeken","sokken","muts"];

        var_dump($sl);
        print "<br>";




        <?php
        .

    </div>
</div>

</body>
</html>