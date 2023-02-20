<?php


function teste(string $nome):void 
{//heredoc funciona como ""

     $string_gmail=<<<TEST
    olá,$nome
    bem vindo ao teste do heredoc!!!!
    TEST;
    echo $string_gmail.PHP_EOL;

}


function teste2(string $nome):void 
{//nowdoc funciona como ''
    
     $string_gmail=<<<'TEST'
    olá,$nome
    bem vindo ao teste do nowdoc!!!!
    TEST;
    echo $string_gmail;

}

teste('usuario');
teste2('usuario');