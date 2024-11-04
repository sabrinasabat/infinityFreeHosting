<!DOCTYPE html>
<html>
<body>
<?php
function descobrirNavegador($navegador){

    $version="";
    $versionActual = "";
    if (preg_match('/Edg/i',$navegador)) {
        preg_match('/Edg\/([\d\.]+)/i',$navegador,$version);
        $versionActual = $version[1];
        return 'Tu navegador es el: EDGE.'."<br><br>".'La versión actual es: '.$versionActual;
    } else if (preg_match('/Chrome/i',$navegador)) {
        preg_match('/Chrome\/([\d\.]+)/i',$navegador,$version);
        $versionActual = $version[1];
        return 'Tu navegador es el: Chrome.'."<br><br>".'La versión actual es: '.$versionActual;
    } else if (preg_match('/Opera/i', $navegador) || preg_match('/OPR/i', $navegador)) {
        preg_match('/Opera\/([\d\.]+)/i',$navegador,$version);
        $versionActual = $version[1];
        return 'Tu navegador es el: Opera.'."<br><br>".'La versión actual es: '.$versionActual;
    } else if (preg_match('/Safari/i',$navegador)) {
        preg_match('/Safari\/([\d\.]+)/i',$navegador,$version);
        $versionActual = $version[1];
        return 'Tu navegador es el: Safari.'."<br><br>".'La versión actual es: '.$versionActual;
    } else if (preg_match('/Firefox/i', $navegador)) {
        preg_match('/Firefox\/([\d\.]+)/i',$navegador,$version);
        $versionActual = $version[1];
        return 'Tu navegador es el: FireFox.'."<br><br>".'La versión actual es: '.$versionActual;
    } else{
        return 'No fue posible detectar el navegador';
    }
}

echo descobrirNavegador($_SERVER['HTTP_USER_AGENT']);

?>

</body>
</html>


