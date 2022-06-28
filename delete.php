<?php 

require 'functions.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ) {
	echo "<script> 
      alert('data berhasil dihapus');
       </script>";
       header("Location: home.php");

} else {
	echo "<script> 
    alert('data gagal dihapus');
    document.location.href = home.php; 
    </script>";
}

?>