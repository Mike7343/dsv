<?php
/* $type = 'editor';
 var_dump ($type);
echo "<br/>";
if($type == 'administrador'){
    echo "El $type puede configurar";
}else if ($type == 'redactor' || $type == 'editor'){
    echo "El $type puede publicar";
}else{
    echo "$type no existe";
}


switch ($type ){
    case 'administrador':
        echo "El $type puede configurar"; 
        break;
    case 'redactor':
    case 'editor':
        echo "El $type puede publicar";
        break;
    default:
        echo "$type no existe";
        break;
} */



$type = 'sjvsvr@gmail.com';
$domain = strstr($type, '@');
 var_dump ($type);
echo "<br/>";

/* if($type == 'gmail.com'){
    echo "Dominio: $type ==> Servicio: Gmail";
}else if ($type == 'outlook.com' || $type == 'hotmail.com'|| $type == 'office365.com'){
    echo "Dominio: $type ==> Servicio: Microsoft";
}else if ($type == 'me.com' || $type == 'apple.com'){
    echo "Dominio: $type ==> Servicio: Apple";
}else{
    echo "$type no existe";
} */


switch ($domain ){
    
    case '@gmail.com':
        echo "Dominio: $domain ==> Servicio: Gmail";
       
        break;
    case '@outlook.com':
    case '@hotmail.com':
    case '@office365.com':
        echo "Dominio: $domain ==> Servicio: Microsoft";
        break;
    case '@me.com':
    case '@apple.com':
        echo "Dominio: $domain ==> Servicio: Apple";
        break;
    default:
        echo "$type no existe";
        break;
}
?>