<?php
include '../shared/database.php';

// Connect to the database
$database = connectToDatabase();

// Fetch all update methods that are enabled for this device.
$result = $database->query("SELECT um.id, um.english_name, um.dutch_name, um.recommended_for_non_rooted_device AS recommended FROM update_method um WHERE um.enabled = 1");

// Return the output as JSON
header('Content-type: application/json');
echo (json_encode($result->fetchAll(PDO::FETCH_ASSOC)));

// Disconnect from the database
$database = null;
