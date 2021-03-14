<?php
    $data = '[
        {"id":"1","name":"Choldcroft","email":"dcroft@hibu.com"},
        {"id":"2","name":"Levi","email":"wlevi1@hibu.com"},
        {"id":"3","name":"Axcell","email":"laxcellct@hibu.com"},
    ]';
    
    echo $_GET["callback"]."(".$data.")";
?>