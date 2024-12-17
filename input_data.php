<?php include "connection";
session_start();
if(!$_session['isLoggedin'])
{
    header("location: login.php");
}

$judul = $_post['judul'];
$tahun = $_post['tahun'];

$dbh = koneksi-> prepare("INSERT INTO buku(judul.tahun.created_by,created_at) VALUES <?php,?,?<?)");
$dbh->execute(
    [
        $judul,
        $tahun,
        $_SESSION['userid'],
        date("y-m-d h:i:s")
    ]
    );
    header("location: home.php");