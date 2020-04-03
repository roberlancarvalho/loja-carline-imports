<?php

Class Config{

    //INFORMAÇÕES BÁSICAS DO SITE:
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "lojaCarline";
    const SITE_NOME = "Carline Imports";
    const SITE_EMAIL_ADM = "admin@carlineimports.com";
     

    //INFORMAÇÕES DO BANCO DE DADOS:
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "carlineimports",
          BD_PREFIX = "";


    //INFORMAÇÕES PARA PHP MAILLER:
    const EMAIL_HOST = "mail.carlineimports.com";
    const EMAIL_USER = "admin@carlineimports.com";
    const EMAIL_NOME = "Admin";
    const EMAIL_SENHA = "carlineloja";
    const EMAIL_PORTA = "587";
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "admin@carlineimports.com";

     
}


?>