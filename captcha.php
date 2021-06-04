<?php
$siteKey = 'FCMJTUM63G0R50SI';
$secretKey = 'A1KHAALF3K00QKLMBCRASUF85S4KKOVL7C57FLSOUQJPEK0UDLHLE6C49A';

$postData = $statusMsg = '';
$status = 'error';
if (isset($_POST['envoyer'])) {
    $postData = $_POST;


    if (!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['tel']) && !empty($_POST['msg'])) {

        if (!empty($_POST['frc-captcha-solution'])) {
            $verifyURL = 'https://friendlycaptcha.com/api/v1/siteverify';

            $token = $_POST['frc-captcha-solution'];

            $data = array(
                'secret' => $secretKey,
                'solution' => $token,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );

            $curlConfig = array(
                CURLOPT_URL => $verifyURL,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => $data
            );
            $ch = curl_init();
            curl_setopt_array($ch, $curlConfig);
            $response = curl_exec($ch);
            curl_close($ch);

            $responseData = json_decode($response);

            if ($responseData->success) {
                $nomCap = !empty($_POST['nom']) ? $_POST['nom'] : '';
                $mailCap = !empty($_POST['mail']) ? $_POST['mail'] : '';
                $telCap = !empty($_POST['tel']) ? $_POST['tel'] : '';
                $msgCap = !empty($_POST['msg']) ? $_POST['msg'] : '';

                $status = 'success';
                $statusMsg = 'Votre message à été envoyé avec succès.';
                $postData = '';
            } else {
                $statusMsg = 'La vérification à échouer, veuillez réessayer';
            }
        } else {
            $statusMsg = 'Veuillez répondre au captcha';
        }
    } else {
        $statusMsg = 'Veuillez remplir tout les champs';
    }
}
