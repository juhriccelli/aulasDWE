<?php include 'calculadora.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
    <head>
        <title>Página 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
    </head>
    <body>

        <section>
            <h1 align="center">-- Calculadora de IP --</h1>

            <form align="center" method="POST">
                <b style="color: red">IP/Mascara de sub rede</b> <small>(Ex.: 192.168.0.1/24)</small> <br> 
                <input type="text" name="ip" value="<?php echo @$_POST['ip']; ?>">
                <input type="submit" value="Calcular">
            </form>

            <div align="center">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['ip'])) {
                $ip = new calc_ipv4($_POST['ip']);

                if ($ip->valida_endereco()) {
                    echo '<h2>Configurações de rede para <span style="color: green;">' . $_POST['ip'] . '</span> </h2>';
                    echo "<pre class='resultado'>";

                    echo "<b>Endereço/Rede: </b>" . $ip->endereco_completo() . '<br>';
                    echo "<b>Endereço: </b>" . $ip->endereco() . '<br>';
                    echo "<b>Prefixo CIDR: </b>/" . $ip->cidr() . '<br>';
                    echo "<b>Máscara de sub-rede: </b>" . $ip->mascara() . '<br>';
                    echo "<b>IP da Rede: </b>" . $ip->rede() . '/' . $ip->cidr() . '<br>';
                    echo "<b>Broadcast da Rede: </b>" . $ip->broadcast() . '<br>';
                    echo "<b>Primeiro Host: </b>" . $ip->primeiro_ip() . '<br>';
                    echo "<b>Último Host: </b>" . $ip->ultimo_ip() . '<br>';
                    echo "<b>Total de IPs:  </b>" . $ip->total_ips() . '<br>';
                    echo "<b>Hosts: </b>" . $ip->ips_rede();
                    echo "</pre>";
                } else {
                    echo 'Endereço IPv4 inválido!';
                }
            }
            ?>
            </div>
        </section>
    </body>
</html>

