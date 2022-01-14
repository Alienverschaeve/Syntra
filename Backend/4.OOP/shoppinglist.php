<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require_once "lib/autoload.php";

PrintHead();
PrintJumbo();
?>

<div class="container">
    <div class="row">

        <?php

        if ( ! is_numeric( $_GET['img_id']) ) die("Ongeldig argument " . $_GET['img_id'] . " opgegeven");

        $rows = GetData( "select * from image where img_id=" . $_GET['img_id'] );

        //get template
        $template = file_get_contents("templates/column_full.html");

        //merge
        foreach ( $rows as $row )
        {
            $output = $template;

            foreach( array_keys($row) as $field )
            {
                $output = str_replace( "@$field@", $row["$field"], $output );
            }
            print $output;
        }

        ?>

        <?php
            if ( ! is_numeric( $_GET['det_id']) ) die("Ongeldig argument " . $_GET['det_id'] . " opgegeven");

            //get data (model)
            $data = GetData( "select * from gemeente where det_id=" . $_GET['det_id'] );

            //get template (view)
            $template = file_get_contents("templates/stad_form.html");

            $html_select_land = MakeSelect( $fieldname = "img_lan_id", $value=$data[0]["img_lan_id"], $sql = "select * from land", $list_fields = [ "lan_id", "lan_land" ] );

            //csrf token genereren
            $csrf_token = GenerateCSRF();

            //merge (controller)
            $output = MergeViewWithData( $template, $data );
            $output = str_replace( "@img_land_select@", $html_select_land, $output);
            $output = str_replace( "@csrf@", $csrf_token, $output);

            print $output ;


    </div>
</div>

</body>
</html>