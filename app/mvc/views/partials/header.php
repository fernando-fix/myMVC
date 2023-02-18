<h1>Olá eu sou um header de um partial</h1>
<?php
$variaveis = get_defined_vars();
print_r($variaveis);


if (isset($nome)) {
    echo $nome;
}

?>