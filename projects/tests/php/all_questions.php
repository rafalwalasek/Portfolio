<?php
    // Połączenie z bazą danych
    include('connect.php');

    // Zapytanie SQL do pobrania wszystkich pytań
    $sql = "SELECT * FROM pytania";
    $result = $conn->query($sql);

    // Sprawdzenie, czy są jakieś wyniki
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Treść pytania</th>
                    <th>Odpowiedź A</th>
                    <th>Odpowiedź B</th>
                    <th>Odpowiedź C</th>
                    <th>Odpowiedź D</th>
                    <th>Poprawna odpowiedź</th>
                    <th>Kategoria</th>
                </tr>";

        // Wyświetlanie wyników w tabeli
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['tresc'] . "</td>
                    <td>" . $row['odpa'] . "</td>
                    <td>" . $row['odpb'] . "</td>
                    <td>" . $row['odpc'] . "</td>
                    <td>" . $row['odpd'] . "</td>
                    <td>" . $row['odpowiedz'] . "</td>
                    <td>" . $row['kategoria'] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Brak pytań w bazie danych.";
    }

    // Zamknięcie połączenia
    $conn->close();
?>