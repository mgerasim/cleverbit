    <?php

	$vars = get_defined_vars();
foreach ($vars as $var) {
     echo "<br><b>{$var}</b>";
     var_dump($$var);
}
	
    $e_mail = 'mgerasim.mail@gmail.com'; // Здесь необходимо прописать адрес, куда будет отправлено письмо (можно несколько через запятую)

    $send_mail_subject = "C вашего сайта testsite.test был сделан заказ на ".$_POST["name"].""; // Тема письма, в которой будет отображено название заказанного товара

    //определение переданных значений от формы заказа, их можно добавить при необходимости
    
    //$send_name=$_POST["name"];
	$send_name=$_REQUEST['name'];
	$send_email=$_POST["email"];;    
    $send_komment=$_POST["text"];


	




    //ниже отображено тело письма, которое придет на указанные адреса почты
    $send_mail_text = "        
	ФИО заказчика - $send_name
    Емайл заказчика - $send_email    
    Пожелание покупателя - $send_komment " ;
    //Ковычки и Точка с запятой в конце тела письма обязательны!!!

    // отправка письма с определенными значениями
    mail("$e_mail", "$send_mail_subject", "$send_mail_text");

    
    
    ?>


