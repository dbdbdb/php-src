--TEST--
openssl_x509_parse() basic test
--SKIPIF--
<?php if (!extension_loaded("openssl")) print "skip"; ?>
--FILE--
<?php
$cert = "file://" . dirname(__FILE__) . "/cert.crt";

var_dump(openssl_x509_parse($cert));
var_dump(openssl_x509_parse($cert, false));
?>
--EXPECTF--
array(12) {
  ["name"]=>
  string(96) "/C=BR/ST=Rio Grande do Sul/L=Porto Alegre/CN=Henrique do N. Angelo/emailAddress=hnangelo@php.net"
  ["subject"]=>
  array(5) {
    ["C"]=>
    string(2) "BR"
    ["ST"]=>
    string(17) "Rio Grande do Sul"
    ["L"]=>
    string(12) "Porto Alegre"
    ["CN"]=>
    string(21) "Henrique do N. Angelo"
    ["emailAddress"]=>
    string(16) "hnangelo@php.net"
  }
  ["hash"]=>
  string(8) "%s"
  ["issuer"]=>
  array(5) {
    ["C"]=>
    string(2) "BR"
    ["ST"]=>
    string(17) "Rio Grande do Sul"
    ["L"]=>
    string(12) "Porto Alegre"
    ["CN"]=>
    string(21) "Henrique do N. Angelo"
    ["emailAddress"]=>
    string(16) "hnangelo@php.net"
  }
  ["version"]=>
  int(2)
  ["serialNumber"]=>
  string(20) "12593567369101004962"
  ["validFrom"]=>
  string(13) "080630102843Z"
  ["validTo"]=>
  string(13) "080730102843Z"
  ["validFrom_time_t"]=>
  int(1214821723)
  ["validTo_time_t"]=>
  int(1217413723)
  ["purposes"]=>
  array(9) {
    [1]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(9) "sslclient"
    }
    [2]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(9) "sslserver"
    }
    [3]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(11) "nssslserver"
    }
    [4]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(9) "smimesign"
    }
    [5]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(12) "smimeencrypt"
    }
    [6]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(7) "crlsign"
    }
    [7]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(3) "any"
    }
    [8]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(10) "ocsphelper"
    }
    [9]=>
    array(3) {
      [0]=>
      bool(false)
      [1]=>
      bool(true)
      [2]=>
      string(13) "timestampsign"
    }
  }
  ["extensions"]=>
  array(3) {
    ["subjectKeyIdentifier"]=>
    string(59) "DB:7E:40:72:BD:5C:35:85:EC:29:29:81:12:E8:62:68:6A:B7:3F:7D"
    ["authorityKeyIdentifier"]=>
    string(202) "keyid:DB:7E:40:72:BD:5C:35:85:EC:29:29:81:12:E8:62:68:6A:B7:3F:7D
DirName:/C=BR/ST=Rio Grande do Sul/L=Porto Alegre/CN=Henrique do N. Angelo/emailAddress=hnangelo@php.net
serial:AE:C5:56:CC:72:37:50:A2
"
    ["basicConstraints"]=>
    string(7) "CA:TRUE"
  }
}
array(12) {
  ["name"]=>
  string(96) "/C=BR/ST=Rio Grande do Sul/L=Porto Alegre/CN=Henrique do N. Angelo/emailAddress=hnangelo@php.net"
  ["subject"]=>
  array(5) {
    ["countryName"]=>
    string(2) "BR"
    ["stateOrProvinceName"]=>
    string(17) "Rio Grande do Sul"
    ["localityName"]=>
    string(12) "Porto Alegre"
    ["commonName"]=>
    string(21) "Henrique do N. Angelo"
    ["emailAddress"]=>
    string(16) "hnangelo@php.net"
  }
  ["hash"]=>
  string(8) "%s"
  ["issuer"]=>
  array(5) {
    ["countryName"]=>
    string(2) "BR"
    ["stateOrProvinceName"]=>
    string(17) "Rio Grande do Sul"
    ["localityName"]=>
    string(12) "Porto Alegre"
    ["commonName"]=>
    string(21) "Henrique do N. Angelo"
    ["emailAddress"]=>
    string(16) "hnangelo@php.net"
  }
  ["version"]=>
  int(2)
  ["serialNumber"]=>
  string(20) "12593567369101004962"
  ["validFrom"]=>
  string(13) "080630102843Z"
  ["validTo"]=>
  string(13) "080730102843Z"
  ["validFrom_time_t"]=>
  int(1214821723)
  ["validTo_time_t"]=>
  int(1217413723)
  ["purposes"]=>
  array(9) {
    [1]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(10) "SSL client"
    }
    [2]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(10) "SSL server"
    }
    [3]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(19) "Netscape SSL server"
    }
    [4]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(14) "S/MIME signing"
    }
    [5]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(17) "S/MIME encryption"
    }
    [6]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(11) "CRL signing"
    }
    [7]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(11) "Any Purpose"
    }
    [8]=>
    array(3) {
      [0]=>
      bool(true)
      [1]=>
      bool(true)
      [2]=>
      string(11) "OCSP helper"
    }
    [9]=>
    array(3) {
      [0]=>
      bool(false)
      [1]=>
      bool(true)
      [2]=>
      string(18) "Time Stamp signing"
    }
  }
  ["extensions"]=>
  array(3) {
    ["subjectKeyIdentifier"]=>
    string(59) "DB:7E:40:72:BD:5C:35:85:EC:29:29:81:12:E8:62:68:6A:B7:3F:7D"
    ["authorityKeyIdentifier"]=>
    string(202) "keyid:DB:7E:40:72:BD:5C:35:85:EC:29:29:81:12:E8:62:68:6A:B7:3F:7D
DirName:/C=BR/ST=Rio Grande do Sul/L=Porto Alegre/CN=Henrique do N. Angelo/emailAddress=hnangelo@php.net
serial:AE:C5:56:CC:72:37:50:A2
"
    ["basicConstraints"]=>
    string(7) "CA:TRUE"
  }
}
