<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET ['page']) {
    case 'add':
        $content="views/motor/tambah.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id_motor=$_SESSION['login']['id'];
            if(!empty($_POST['id_motor'])){
                $sql = "UPDATE motor SET nama_motor = '$_POST[nama_motor]', nomor_polisi ='$_POST[nomor_polisi]',
                harga_sewa = '$_POST[harga_sewa]', status = '$_POST[status]' WHERE md5(id_motor)='$_POST[id_motor]'";
            } else {
                $sql="INSERT INTO motor (nama_motor, nomor_polisi, harga_sewa, status)
                VALUES ('$_POST[nama_motor]','$_POST[nomor_polisi]','$_POST[harga_sewa]','$_POST[status]')";
            }
            if($conn->query($sql)==TRUE) {
                header('Location: '.$con->site_url().'/admin/index.php?mod=motor');
            } else {
                $err['msg']="Error: ". $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg']="Tidak diijinkan";
        }
        if (isset($err)){
            $content="views/motor/tambah.php";
            include_once 'views/template.php';
        break;
        }
        break;
    case 'edit':
        $motor="SELECT* FROM motor WHERE md5(id_motor)='$_GET[id]'";
        $motor=$conn->query($motor);
        $_POST=$motor->fetch_assoc();
        $_POST['id_motor']=md5($_POST['id_motor']);
        $content="views/motor/tambah.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $motor ="DELETE FROM motor WHERE md5(id_motor)='$_GET[id]'";
        $motor=$conn->query($motor);
        header('Location: '.$con->site_url().'/admin/index.php?mod=motor');
        break;
    default:
        $sql="SELECT* FROM motor";
        $motor=$conn->query($sql);
        $conn->close();
        $content="views/motor/tampil.php";
        include_once 'views/template.php';
}
?>