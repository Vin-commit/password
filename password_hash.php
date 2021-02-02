<?php 
ECHO nl2br("<b>" .password_hash("rasmuslerdorf",  PASSWORD_DEFAULT) . "</b> (valeur à stocker même si elle change avec le temps)\n");

if (password_verify('rasmuslerdorf', password_hash("rasmuslerdorf",  PASSWORD_DEFAULT))) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>
