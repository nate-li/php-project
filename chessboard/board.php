<?php
/**
 * Created by PhpStorm.
 * User: nal64753
 * Date: 1/15/16
 * Time: 1:26 PM
 */

require_once '/Users/nal64753/desktop/workspace/php-project/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/Users/nal64753/desktop/workspace/php-project/twig');
$twig = new Twig_Environment($loader);
$html = $twig->render('board.html', array(
    'color_array' => $color_array
));

echo $html;