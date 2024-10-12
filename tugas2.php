<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mata Kuliah</title>
    <style>
        body {
            font-family: 'Times New Roman';
            background: #e8e8e8;
        }
        .container {
            background-color: #E6E6FA;
            width: 400px;
            height: 250px;
            margin: 0 auto;
            padding: 20px;
            border: 3px solid #ccc;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            font-size: 150%;
        }
        button {
            background-color: #34495e;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 10px;
            font-size: 16px;
            font-family: 'Times New Roman';
            font-weight: bold;
            cursor: pointer;
        }
        button:hover{
            background-color: #2c3e50;
        }    
        input {
            width: 30%;
            height: 30px;
            font-size: 15px;
            font-family: 'Verdana';
            font-weight: bold;
        }
        .result {
            background-color: #E6E6FA;
            width: 400px;
            height: 150px;
            margin: 0 auto;
            padding: 20px;
            border: 3px solid #ccc;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            font-size: 150%;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <center>
    <h2>Hitung Rata-Rata Nilai dan Status Kelulusan</h2>
    <div class="container">
    <form method="POST" action="">
        <label for="nilai1">Nilai Mata Kuliah 1:</label>
        <input type="number" name="nilai1" id="nilai1" min="0" max="100" required><br><br>

        <label for="nilai2">Nilai Mata Kuliah 2:</label>
        <input type="number" name="nilai2" id="nilai2" min="0" max="100" required><br><br>

        <label for="nilai3">Nilai Mata Kuliah 3:</label>
        <input type="number" name="nilai3" id="nilai3" min="0" max="100" required><br><br>

        <button type="submit" name="submit">Hitung</button>
    </form>
    </center>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        $status = $rata_rata >= 60 ? "Lulus" : "Tidak Lulus";

        echo "<center>";
        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status: " . $status . "<br>";
        echo "</div>";
        echo "</center>";
    }
    ?>
    </div>
</body>
</html>