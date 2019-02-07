<?php
    session_start();
        
    $num = htmlspecialchars($_POST['nameUser']);
    $nam = htmlspecialchars($_POST['userPhone']);
    $typ = htmlspecialchars($_POST['personType']);
    $typeText = "";
//    ##############################################################
//######################Поменять логин на свой#####################
    $login = "StigNelson11@gmail.com";
//################################################################
        
if($typ == 1){
    $typeText = " Выбрал 'Хочу научиться'";
}elseif ($typ == 2){
    $typeText = " Выбрал 'Умею играть'";
}elseif ($typ == 3){
    $typeText = " Выбрал 'Ищу зал'";
}elseif(strlen($typ) == 0){
    $typeText = " Ничего не выбрал";
}


        $error = false;
           if($num == ""){
                $error = true;
            }
            if(strlen($nam) == 0){
                $error = true;
            }
            //отправляем сообщение если нету ошибок
                if(!$error){
                    $subject = "Номер: ".$num.", Имя: ".$nam.", ".$typeText;
//                    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
                    $headers = "from: $login\r\nReply-to: $login\r\nContent-type:text/plain; charset=utf-8\r\n";
                    //отправляем
                    mail($login, $subject, $message, $headers);                         
        
                }
//    $typ = htmlspecialchars();
//        echo $num.", ".$nam;
        

?>