<h3>Soal 3 - Daftar Hewan (Dinamis)</h3>

<form method="post">
    Masukkan nama hewan (pisahkan dengan koma):<br>
    <input type="text" name="hewan" placeholder="Contoh: Kucing, Anjing, Sapi" size="40">
    <br><br>
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['hewan'])) {
    $input = $_POST['hewan'];

    $hewanArray = explode(",", $input);

    echo "<h4>Daftar Hewan:</h4>";

    foreach ($hewanArray as $h) {
        echo trim($h) . "<br>";
    }
}
?>