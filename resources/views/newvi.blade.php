
<?php
//$sotr иерархический массив
//print_r($sotr);



//echo $sotr[0][0]['id'];
//print_r($sotr);
$s=json_encode($sotr);

$s=str_replace("name", "text", $s);

//echo $s;

?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/themes/default/style.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.3/jstree.min.js"></script>

<div id="container"></div>

<script>

    var b= <?=$s?>;
    var a='asda';
    //var a=JSON.parse(b);
    $(function() {
        $('#container').jstree({
            'core' : {
                "check_callback" : true,
             'data': b



            },
            "plugins" : [ "contextmenu" ,"dnd", "wholerow" ]
        });
    });



</script>



<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.10.17
 * Time: 19:12
 */
//print_r($sotr);
//echo $sotr[0]['name'];
/*
foreach ($sotr as $value){
    echo $value.'<br>';

}
*/

/*
$traverse  =  function ( $categories, $prefix  =  ' + ' ) use ( & $traverse ) {
    foreach ($categories as $category ) {

        echo PHP_EOL.'<br>'. $prefix . ' ' . $category -> name;


        $traverse( $category->children, $prefix . ' - - ');
    }
};

$traverse ($sotr);
*/