<?php
// Check if the message parameter is set
if (isset($_POST['message'])) {
  // Get the message from the request
  $message = $_POST['message'];
  
  // Save the message to the database or send it via email
  // ...
  
  // Return a success response
  header('Content-Type: application/json');
  echo json_encode(['success' => true]);
} else {
  // Return an error response
  header('Content-Type: application/json');
  echo json_encode(['success' => false, 'error' => 'Message parameter not set']);
}
