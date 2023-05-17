<?php
// Assuming you have established a database connection
// Replace the placeholders with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "savethedate";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
$count = 1; 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT username, phone, attend, totalAttend, guest1, guest2, guest3, guest4, guest5, wish FROM rsvp";
$result = $conn->query($sql);
?>

<style>
  /* Style the table */
  table {
    width: 100%;
    border-collapse: collapse;
  }

  /* Style the table headers */
  th {
    background-color: #F9E8D9;
    text-align: center;
    border: 1px solid #E2A169;
    padding: 8px;
    color: #4D3B33;
  }

  /* Style the table cells */
  td {
    padding: 8px;
    border: 1px solid #E2A169;
    color: #4D3B33;
  }

  /* Alternate row background color */
  tr:nth-child(even) {
    background-color: #F9E8D9;
  }
</style>

<!-- HTML table to display the data -->
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Attend</th>
            <th>Total Attend</th>
            <th>Guest 1</th>
            <th>Guest 2</th>
            <th>Guest 3</th>
            <th>Guest 4</th>
            <th>Guest 5</th>
            <th>Wish</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Iterate through each row of data and display it in the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $count . ".</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>0" . $row["phone"] . "</td>";
                echo "<td>" . $row["attend"] . "</td>";
                echo "<td>" . $row["totalAttend"] . "</td>";
                echo "<td>" . $row["guest1"] . "</td>";
                echo "<td>" . $row["guest2"] . "</td>";
                echo "<td>" . $row["guest3"] . "</td>";
                echo "<td>" . $row["guest4"] . "</td>";
                echo "<td>" . $row["guest5"] . "</td>";
                echo "<td>" . $row["wish"] . "</td>";
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='10'>No data found</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </tbody>
</table>
