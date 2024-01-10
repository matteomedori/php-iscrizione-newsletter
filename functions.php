<?php
function showAlert($user_email){
    if($user_email !== '' && str_contains($user_email,'@') && str_contains($user_email,'.')){
        // $show_alert = true;
        // $alert_class = 'alert-success';
        // $alert_message = 'Hai inserito una mail corretta!';
        // return [$show_alert,$alert_class,$alert_message];
        header('Location: thank-you.php');
    } elseif($user_email !== '') {
        $show_alert = true;
        $alert_class = 'alert-warning';
        $alert_message = 'Attenzione! Hai inserito una mail sbagliata! La mail non contiene un . e una @';
        return [$show_alert,$alert_class,$alert_message];
    }
}
?>