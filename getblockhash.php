<?php 
//*desc: Gets a block hash at the specified height
//*hash: Block height to search for
require_once('./lib/config.php');
require_once('./lib/helper.php');

$params = array(
    "height" => $_GET["height"]
);

$json = send_request(HOST, PORT, "on_get_block_hash", $params);
echo $json;
?>