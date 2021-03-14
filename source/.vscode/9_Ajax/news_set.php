<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증 확인 여부
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return 정보 확인 여부
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL,
    "http://newsplus.chosun.com/hitdata/xml/newsplus/index/index.xml");
    $url_source = curl_exec($ch);
    curl_close($ch);

    echo $url_source;
?>