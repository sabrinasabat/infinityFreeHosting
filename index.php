<!DOCTYPE html>
<html>
<body>
<?php

/*function nombre_navegador($navegador)
{
    if (strpos($navegador, 'Opera') || strpos($navegador, 'OPR/')) return 'Opera';
    elseif (strpos($navegador, 'Edg')) return 'Edge';
    elseif (strpos($navegador, 'Chrome')) return 'Chrome';
    elseif (strpos($navegador, 'Safari')) return 'Safari';
    elseif (strpos($navegador, 'Firefox')) return 'Firefox';
    elseif (strpos($navegador, 'MSIE') || strpos($navegador, 'Trident/7')) return 'Internet Explorer';

    return 'Other';
}

echo nombre_navegador($_SERVER['HTTP_USER_AGENT']);*/

echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

$navegador = get_browser(null, true);
print_r($navegador);


?>
</body>
</html>


