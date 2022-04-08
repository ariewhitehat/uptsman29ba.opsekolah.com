<?php 
    session_start();
    session_unset();
    session_destroy();
    # Unset Cookie
    setcookie('username', '', 0, '/');
    setcookie('nama_pd', '', 0, '/');
    setcookie('nis', '', 0, '/');
    setcookie('ttl', '', 0, '/');
    setcookie('jk', '', 0, '/');
    setcookie('nama_ortu', '', 0, '/');
    setcookie('kelas', '', 0, '/');
    setcookie('prodi', '', 0, '/');
    setcookie('nilai_rata_rata', '', 0, '/');
    setcookie('keterangan', '', 0, '/');
    setcookie('foto', '', 0, '/');
    setcookie('download', '', 0, '/');
    # Redirect page
    header('location:../index.php');
?>