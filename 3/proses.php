<h1>Halaman Proses</h1> <?php
if (isset ($_POST["submit"])) {
echo "Nama:".$_POST["nama"]. "<br>";
echo "Email:".$_POST["email"]. "<br>";
if (isset($_POST ["belajar"])) {
echo "Belajar:".$_POST[ "belajar"]. "<br>";
}}
else {
echo "Halaman ini hanya bisa diakses dari form!";
}?>