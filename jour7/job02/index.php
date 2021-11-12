<!DOCTYPE html >
< html  lang =" fr " >

< tête >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < titre > Document </ titre >
</ tête >

< corps >


    <?php
    
    if ( isset ( $_GET [ 'reset' ]) == true ) {
        unset( $_COOKIE [ 'nbvisites' ]);
        echo "0" ;
    } autre {

        if (! isset ( $_COOKIE ) == vrai ) {
            $ i = 1 ;
        } autre {
            $ i = $_COOKIE [ 'nbvisites' ] + 1 ;
        }

        setcookie ( 'nbvisites' , $ i );
        echo  $_COOKIE [ 'nbvisites' ];
    }


    var_dump ( $ _COOKIE );
    ?>

    < form  action =" index.php " method =" get " >
        < type d' entrée  =" soumettre " valeur =" réinitialiser " nom =" réinitialiser " >
    </ formulaire >

</ corps >

</ html >