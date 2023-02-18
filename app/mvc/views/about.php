<!DOCTYPE html>
<html lang="en">

<head>
    <title>About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h1>About</h1>
    <p>
        Página sobre
        <?php
        echo "<pre>";
        echo "<hr>"; // ------------------------------------------------

        $this->partial('header');

        echo "<hr>"; // ------------------------------------------------

        $this->partial('header', [
            'nome' => "Fernando",
            'idade' => 33
        ]);

        echo "<hr>"; // ------------------------------------------------

        $variaveis = get_defined_vars();
        print_r($variaveis);
        ?>
    </p>
</body>

</html>