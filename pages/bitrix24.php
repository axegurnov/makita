<?php
$myCurl = curl_init();
curl_setopt_array($myCurl, [
    CURLOPT_URL => 'https://b24-68ihn2.bitrix24.ru/rest/1/swgqubz7n559e8jk/crm.lead.add',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query([
        'fields'=>[
            "NAME"=>$_POST['name'],
            "PHONE"=>[
                $_POST['cellphone'],'WORK'
            ],
            "COMMENTS"=>$_POST['comment']
    ]])
]);
$response = curl_exec($myCurl);
curl_close($myCurl);
echo $response;