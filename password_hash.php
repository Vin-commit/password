<?php 
ECHO nl2br("<b>" .password_hash("rasmuslerdorf",  PASSWORD_DEFAULT) . "</b> (valeur à stocker même si elle change avec le temps)\n");

if (password_verify('rasmuslerdorf', '$2y$10$/rKg11J7VD7JgebwnrIhzud9jdKqTN6ICTnmCAoxiJsAPa4FF76HS')) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>
