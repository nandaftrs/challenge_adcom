<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $food = htmlspecialchars($_POST['food']);
    $quantity = intval($_POST['quantity']);

    // Menampilkan data yang diterima
    echo "<div class='container mx-auto mt-10'>";
    echo "<h1 class='text-2xl font-bold text-center mb-6'>Detail Pemesanan</h1>";
    echo "<div class='bg-white p-6 rounded-lg shadow-md'>";
    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Makanan:</strong> $food</p>";
    echo "<p><strong>Jumlah:</strong> $quantity</p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "Invalid request.";
}
?>