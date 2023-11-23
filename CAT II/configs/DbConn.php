<?php
 
require_once "constants.php";

$dbConn = new mysqli ($hostname,$username,$userpass,$dbname);

if ($dbConn -> connect_error){
    die ("Connection Failed: " . dbConn -> connect_error);
} else {
    print "The Connection was a success !!!";
}

?>
