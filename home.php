<?php
session_start();
if(!$_SESSION['isLoggedin'])
{
    header("location : login.php");
}
echo "selamat datang,",$_SESSION['username'],"-",$_SESSION ['userid'];

include "connection.php";
?>
<a href="logout.php">logout</a>
<?php
    $dbh = $koneksi->query("SELECT * FROM buku where isdel= 0");
?>

<table border="1">
<tr>
    <th>no</th>
    <th>judul</th>
    <th>tahun terbit</th>
    <th>aksi</th>
</tr>
<?php
    $no =1;
    while($bukus = $dbh->fetch(PDO::FETCH_ASSOC))
    {
?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $bukus['judul']?></td>
            <td><?php echo $bukus['tahun']?></td>
            <td></td>
            <td><a href="edit.php?id=<?php echo $bukus[id]"
        </tr>
    <?php
    $no++;
    }
    ?>
    </table>