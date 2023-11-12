<?php

#Arquivos diretórios raízes



$PastaInterna="";



// Verifica se a requisição está usando HTTPS
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
// Concatena o protocolo ao domínio do site
$site_url = $protocol . $_SERVER['HTTP_HOST'];
// Define a constante DIRPAGE
define('DIRPAGE', "{$site_url}/{$PastaInterna}");

//define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");



if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){

    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");

}else{

    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");

}



#Diretórios Específicos

define('DIRIMG',DIRPAGE."public/img/");

define('DIRCSS',DIRPAGE."public/css/");

define('DIRJS',DIRPAGE."public/js/");

define('DIRDESIGN',DIRPAGE."public/design/");

define('DIRAUDIO',DIRPAGE."public/audio/");

define('DIRFONTES',DIRPAGE."public/fonts/");

define('DIRVIDEO',DIRPAGE."public/video/");

define('DIRADMIN',DIRPAGE."public/admin/");

define('DIRDOWN',DIRPAGE."public/downloads/");



#Acesso ao banco de dados

define('HOST',"");

define('DB',"");

define('USER',"");

define('PASS',"");