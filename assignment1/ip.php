<?php
$client_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
echo "Client IP Address: " . htmlspecialchars($client_ip, ENT_QUOTES, 'UTF-8');
?>