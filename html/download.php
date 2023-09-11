<?php
include("../include/config.php"); // Include your database connection

if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Fetching the file data from the database based on the file ID
    $query = "SELECT filename, filedata FROM list WHERE id = $fileId";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $filename = $row['filename'];
        $filedata = $row['filedata'];

        // Sending appropriate headers for download
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Length: " . strlen($filedata));

        echo $filedata; // Output the file content
        exit;
    } else {
        echo "File not found.";
    }
}

if (isset($_GET['ids'])) {
    $fileId = $_GET['ids'];

    // Fetching the file data from the database based on the file ID
    $query = "SELECT filename, filedata FROM library WHERE id = $fileId";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $filename = $row['filename'];
        $filedata = $row['filedata'];

        // Sending appropriate headers for download
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Length: " . strlen($filedata));

        echo $filedata; // Output the file content
        exit;
    } else {
        echo "File not found.";
    }
}
?>
