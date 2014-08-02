    <?php

    $e_mail = 'mgerasim.mail@gmail.com'; // Здесь необходимо прописать адрес, куда будет отправлено письмо (можно несколько через запятую)

    $send_mail_subject = "C вашего сайта testsite.test был сделан заказ на ".$HTTP_POST_VARS['tovar'].""; // Тема письма, в которой будет отображено название заказанного товара

    //определение переданных значений от формы заказа, их можно добавить при необходимости
    $send_tovar=$HTTP_POST_VARS['tovar'];
    $send_name=$HTTP_POST_VARS['name'];
    $send_phone=$HTTP_POST_VARS['phone'];;
    $send_sity=$HTTP_POST_VARS['sity'];
    $send_index=$HTTP_POST_VARS['index'];
    $send_adress=$HTTP_POST_VARS['adress'];
    $send_komment=$HTTP_POST_VARS['komment'];





    //ниже отображено тело письма, которое придет на указанные адреса почты
    $send_mail_text = "
    Товар - $send_tovar
    ФИО заказчика - $send_name
    Телефон заказчика - $send_phone
    Емайл заказчика - $send_e.mail
    Город доставки - $send_sity
    Почтовый индекс покупателя - $send_index
    Адресс доставки - $send_adress
    Пожелание покупателя - $send_komment " ;
    //Ковычки и Точка с запятой в конце тела письма обязательны!!!

    // отправка письма с определенными значениями
    mail("$e_mail", "$send_mail_subject", "$send_mail_text");

    
    
    ?>


