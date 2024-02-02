<?php
$rentangNilai = 60;

if ($rentangNilai >= 85 && $rentangNilai <= 100) {
    echo "nilai anda A";
} elseif ($rentangNilai >= 75 && $rentangNilai <= 84) {
    echo "nilai anda B";
} elseif ($rentangNilai >= 60 && $rentangNilai <= 74) {
    echo "nilai anda C";
} elseif ($rentangNilai >= 50 && $rentangNilai <= 59) {
    echo "nilai anda D";
} else {
    echo "Nilai anda E";
}
?>

