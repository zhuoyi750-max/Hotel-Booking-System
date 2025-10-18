$sql = "SELECT * FROM Hotel_Rooms;";

    try{
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {
        echo "<br> <h1> Here's the List of Hotel Rooms</h1>";
        echo "<table>";

        while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Room_Name"] . "</td>";
        echo "</tr>";
        }

        echo "</table>";
    }
}