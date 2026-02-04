<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .kalkulator {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="kalkulator">
    <h2>Kalkulator PHP</h2>

    <form method="POST">
        <input type="number" name="angka1" placeholder="Angka Pertama" required>
        <input type="number" name="angka2" placeholder="Angka Kedua" required>

        <select name="operator">
            <option value="+">Tambah (+)</option>
            <option value="-">Kurang (-)</option>
            <option value="*">Kali (×)</option>
            <option value="/">Bagi (÷)</option>
        </select>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $a = $_POST['angka1'];
        $b = $_POST['angka2'];
        $op = $_POST['operator'];
        $hasil = 0;

        switch ($op) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                if ($b != 0) {
                    $hasil = $a / $b;
                } else {
                    echo "<p>Tidak bisa dibagi 0!</p>";
                    exit;
                }
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</div>

</body>
</html>
