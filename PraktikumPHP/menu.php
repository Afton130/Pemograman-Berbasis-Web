<ul>
    <li><a href="?page=soal1">Soal 1 - Switch</a></li>
    <li><a href="?page=soal2">Soal 2 - For Loop</a></li>
    <li><a href="?page=soal3">Soal 3 - Foreach</a></li>
    <li><a href="?page=soal4">Soal 4 - Ternary</a></li>
</ul>

<hr>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'soal1':
            include "soal1.php";
            break;
        case 'soal2':
            include "soal2.php";
            break;
        case 'soal3':
            include "soal3.php";
            break;
        case 'soal4':
            include "soal4.php";
            break;
        default:
            echo "Halaman tidak ditemukan";
            break;
    }
} else {
    echo "Pilih menu di atas";
}
?>