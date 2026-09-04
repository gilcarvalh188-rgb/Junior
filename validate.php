<?php
// PAINEL VIP - endpoint da licença.
// Hospede este arquivo em HTTPS e altere o valor da chave abaixo.
// Uma única Key DEUS é aceita.
header('Content-Type: text/plain; charset=UTF-8');

$MASTER_KEY = 'DEUS-VIP-2026-ULTRA';
$EXPIRES_AT = '2099-12-31T23:59:59Z';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit("INVALID");
}

$key = isset($_POST['key']) ? trim($_POST['key']) : '';

if ($key === '' || !hash_equals($MASTER_KEY, $key)) {
    http_response_code(403);
    exit("INVALID");
}

if (time() > strtotime($EXPIRES_AT)) {
    http_response_code(403);
    exit("INVALID");
}

echo "OK";
?>
