<?php
if (isset($_POST['submit'])) {
    // if (isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['attend']) && 
    //     isset($_POST['totalAttend']) && isset($_POST['guest1']) && isset($_POST['guest2'])  &&
    //     isset($_POST['guest3']) && isset($_POST['guest4']) && isset($_POST['guest5']) &&
    //     isset($_POST['wish'])) {
        
    //     $username = $_POST['username']; 
    //     $phone = $_POST['phone'];
    //     $attend = $_POST['attend'];
    //     $totalAttend = $_POST['totalAttend'];
    //     $guest1 = $_POST['guest1'];
    //     $guest2 = $_POST['guest2'];
    //     $guest3 = $_POST['guest3'];
    //     $guest4 = $_POST['guest4'];
    //     $guest5 = $_POST['guest5'];
    //     $wish = $_POST['wish'];
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $attend = isset($_POST['attend']) ? $_POST['attend'] : '';
    $totalAttend = isset($_POST['totalAttend']) ? $_POST['totalAttend'] : '';
    $guest1 = isset($_POST['guest1']) ? $_POST['guest1'] : '';
    $guest2 = isset($_POST['guest2']) ? $_POST['guest2'] : '';
    $guest3 = isset($_POST['guest3']) ? $_POST['guest3'] : '';
    $guest4 = isset($_POST['guest4']) ? $_POST['guest4'] : '';
    $guest5 = isset($_POST['guest5']) ? $_POST['guest5'] : '';
    $wish = isset($_POST['wish']) ? $_POST['wish'] : '';

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "savethedate";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT username FROM rsvp WHERE username = ? LIMIT 0";
            $Insert = "INSERT INTO rsvp(username, phone, attend, totalAttend, guest1, guest2, guest3, guest4, guest5, wish) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sisissssss", $username, $phone, $attend, $totalAttend, $guest1, $guest2, $guest3, $guest4, $guest5, $wish);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this name.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    // else {
    //     echo "All field are required.";
    //     die();
    // }
// }
else {
    echo "Submit button is not set";
}
?>