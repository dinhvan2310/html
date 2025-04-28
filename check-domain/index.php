<?php
// Set response headers to JSON
header('Content-Type: application/json');

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Prepare success response
    $response = [
        'status' => 'success',
        'message' => 'Server is running',
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    // Return 200 OK status code
    http_response_code(200);
} else {
    // If not a GET request, return method not allowed
    $response = [
        'status' => 'error',
        'message' => 'Method not allowed',
    ];
    
    // Return 405 Method Not Allowed status code
    http_response_code(405);
}

// Output the response as JSON
echo json_encode($response);
?>