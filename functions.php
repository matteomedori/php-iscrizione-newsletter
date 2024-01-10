<?php

if($user_email !== '' && str_contains($user_email,'@') && str_contains($user_email,'.')){
    $show_alert = true;
    $alert_class = 'alert-success';
    $alert_message = 'Hai inserito una mail corretta!';
} elseif($user_email !== '') {
    $show_alert = true;
    $alert_class = 'alert-warning';
    $alert_message = 'Attenzione! Hai inserito una mail sbagliata! La mail non contiene un . e una @';
}

?>