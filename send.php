    <?php

    $e_mail = 'mgerasim.mail@gmail.com'; // Здесь необходимо прописать адрес, куда будет отправлено письмо (можно несколько через запятую)

    $send_mail_subject = "C вашего сайта testsite.test был сделан заказ на ".$HTTP_POST_VARS['tovar'].""; // Тема письма, в которой будет отображено название заказанного товара

    //определение переданных значений от формы заказа, их можно добавить при необходимости
    
    $send_name=$HTTP_POST_VARS['name'];
	$send_email=$HTTP_POST_VARS['email'];;    
    $send_komment=$HTTP_POST_VARS['text'];





    //ниже отображено тело письма, которое придет на указанные адреса почты
    $send_mail_text = "    
    ФИО заказчика - $send_name
    Емайл заказчика - $send_email    
    Пожелание покупателя - $send_komment " ;
    //Ковычки и Точка с запятой в конце тела письма обязательны!!!

    // отправка письма с определенными значениями
    mail("$e_mail", "$send_mail_subject", "$send_mail_text");

    
    
    ?>


