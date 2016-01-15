<?php
/**
 * Created by PhpStorm.
 * User: nal64753
 * Date: 1/15/16
 * Time: 1:26 PM
 */

require_once '/Users/nal64753/desktop/workspace/php-project/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/nal64753/desktop/workspace/php-project/twig');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addExtension(new Twig_Extension_Debug());



$color_array = array();



for($i = 0; $i < 8; $i++){
    for($j = 0; $j < 8; $j++){
        //assigns val of '1' to denote shaded space
        if(($i % 2 === 0 && $j % 2 === 0) || ($i % 2 === 1 && $j % 2 === 1)){
            $color_array[$i][$j] = 1;
        }
        //otherwise assigns '0; for empty space
        else {
            $color_array[$i][$j] = 0;
        }
        echo $color_array[$i][$j] . " ";
    }
    echo "<br />";
}

echo "hey world" . "<br />";

$html = $twig->render('board.html', array(
    'color_array' => $color_array
));
echo $html;

?>