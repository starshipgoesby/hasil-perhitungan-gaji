<?php
// function numerik($input) {
//     return is_numeric($input);
// }

// function nonNegative($input) {
//     return $input >= 0;
// }
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

$gajiPokok = $_POST['gajiPokok'];
$tunjangan = $_POST['tunjangan'];

$gajiBruto = $gajiPokok + $tunjangan;
$pajak = ($gajiBruto * 10) / 100;
$asuransi = ($gajiBruto * 5) / 100;
$gajiBersih = $gajiBruto - $pajak - $asuransi;

    if (!is_numeric($gajiPokok) || $gajiPokok < 0 || !is_numeric($tunjangan) || $tunjangan < 0) {
        echo "Input Tidak Valid";
    } else {
        echo "Gaji Bruto: " . rupiah($gajiBruto) . "<br>";
        echo "Pajak Penghasilan: " . rupiah($pajak) . "<br>";
        echo "Asuransi Kesehatan: " . rupiah($asuransi) . "<br>";
        echo "Gaji Bersih: " . rupiah($gajiBersih) . "<br>";
    }
?> 

docker run -d --name sql_server -e 'ACCEPT_EULA=Y' -e 'SA_PASSWORD=dockerStrongPwd123' -p 1433:1433 mcr.microsoft.com/mssql/server:2022-latest