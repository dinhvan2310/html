<?php
header('Content-Type: application/json');
$id = isset($_GET['id']) ? $_GET['id'] : '';
if (empty($id)) {
    echo json_encode([
        'error_msg' => 'Missing required ID parameter',
        'author' => 'Van Tan IT',
        'api_info' => 'Api Check Id No Proxy No Blocked',
        'contact' => 'Zalo 0876251357'
    ]);
    exit();
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://shop.garena.my/api/auth/player_id_login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
    'Connection: keep-alive',
    'Origin: https://shop.garena.my',
    'Referer: https://shop.garena.my/app',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1',
    'accept: application/json',
    'content-type: application/json',
    'x-datadome-clientid: RejgkCgZ7K3SHwXVZ9uXxeT1C3vsW~WFltrW2_feW6X45tdNGSvK_WddISiy2NwgKXZM~XwL4T43hiVvs~XDAoDszQoWgb_CW6LhlaC3SnwVn7u8rdHJROmvN7Lol2~n',
]);
curl_setopt($ch, CURLOPT_COOKIE, 'mspid2=84be19a26c76cc79abca0f0a523d9992; _ga_TQTJ3WQFKV=GS1.1.1719767410.1.1.1719768340.0.0.0; source=pc; _ga=GA1.2.1211792097.1719767391; _gid=GA1.2.350939286.1720023028; _gat_gtag_UA_137597827_5=1; session_key=c0f14v2jzbm4so30gyax3t0v9hu0cb22; datadome=NEtgI0dAGQoEE~JqRdXn5RWHyGjVTzr_xp~J5aUHP5NbP3Vc4065sC1Xt8tAnLOLK4ZR0FQe64~Cq2a2RVO2LfH9_OhaALFUpSfhhYa7L1pbk7PvWTuW97VqH7nlywzG; _ga_76GMJR9HMM=GS1.1.1720023027.2.1.1720023042.0.0.0');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['app_id' => 100067, 'login_id' => $id, 'app_server_id' => 0]));

$response = curl_exec($ch);
$response_data = json_decode($response, true);

$author_info = [
    'author' => 'Van Tan IT',
    'api_info' => 'Api Check Id No Proxy No Blocked',
    'contact' => 'Zalo 0876251357'
];

if (isset($response_data['error']) && $response_data['error'] == 'invalid_id') {
    echo json_encode(array_merge(['error_msg' => 'ID bạn đã nhập không tồn tại'], $author_info));
} elseif (isset($response_data['error_msg'])) {
    echo json_encode(array_merge(['error_msg' => $response_data['error_msg']], $author_info));
} else {
    echo json_encode(array_merge($response_data, $author_info));
}
?>
