<!DOCTYPE html>
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
  </head>
<?php
$cidr   = $_POST['cidr'];
$ip		= $_POST['ip'];
echo $ip;
class cidr
{
    // convert cidr to netmask
    // e.g. 21 = 255.255.248.0
    public function cidr2netmask($cidr)
    {
        for( $i = 1; $i <= 32; $i++ )
        $bin .= $cidr >= $i ? '1' : '0';

        $netmask = long2ip(bindec($bin));

        if ( $netmask == "0.0.0.0")
        return false;

    return $netmask;
    }

    // get network address from cidr subnet
    // e.g. 10.0.2.56/21 = 10.0.0.0
    public function cidr2network($ip, $cidr)
    {
        $network = long2ip((ip2long($ip)) & ((-1 << (32 - (int)$cidr))));

    return $network;
    }

    // convert netmask to cidr
    // e.g. 255.255.255.128 = 25
    public function netmask2cidr($netmask)
    {
        $bits = 0;
        $netmask = explode(".", $netmask);

        foreach($netmask as $octect)
        $bits += strlen(str_replace("0", "", decbin($octect)));

    return $bits;
    }

    // is ip in subnet
    // e.g. is 10.5.21.30 in 10.5.16.0/20 == true
    //      is 192.168.50.2 in 192.168.30.0/23 == false
    public function cidr_match($ip, $network, $cidr)
    {
        if ((ip2long($ip) & ~((1 << (32 - $cidr)) - 1) ) == ip2long($network))
        {
            return true;
        }

    return false;
    }
}
?>