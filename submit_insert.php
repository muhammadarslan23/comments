<?php

    include "head.html";   
    ini_set('display_errors', 1);    


    $servername = "localhost";

    $username = "root";

    $password = "root"; // removed in this example

    $dbname = "comments";

    

    // Create connection

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection

    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);

    }

    

    $company1 = $_POST['company1'];

    $agencysegment = $_POST['agencysegment'];

    $mediasegment = $_POST['mediasegment'];

    $comment = $_POST['comment'];

    $username = $_POST['username'];


    

    $company1 = $conn->escape_string($company1);

    $agencysegment = $conn->escape_string($agencysegment);

    $mediasegment = $conn->escape_string($mediasegment);


    $comment = $conn->escape_string($comment);

    $username = $conn->escape_string($username);


    

    echo "Category: $company1<br>";

    echo "Segment: $agencysegment<br>";

    echo "Year: $mediasegment<br>";


    echo "Comment: $comment<br>";

    echo "Submitting comment as: $username ($comment)<br>";

    echo "<br>";

    

    // A better statement that will replace when necessary (assuming the keys are correctly defined)

    $sql = "INSERT INTO `comments_rollup` (`company1`, `agencysegment`, `mediasegment`, `comment`, `username`, `insert_timestamp`) VALUES ('$company1', '$agencysegment', '$mediasegment', '$comment', '$username', now()) ON DUPLICATE KEY UPDATE `comment`='$comment', `username`='$username', `insert_timestamp`=now()";

    if ($conn->query($sql) === TRUE) {

        echo "<p style='font-weight: bold'>Comment saved successfully.</p>";

    } else {

        echo "<p style='font-weight: bold; font-color: #990000'>Error: " . $sql . "<br>" . $conn->error . "</p>";

    }    $conn->close();

    

    include "foot.html";

    

?>