<?php

include "koneksi.php";

$sql = "
DELETE FROM tbl_mhs
WHERE LastName='Prabowo'
";

if (mysqli_query($conn, $sql)) {

    echo "Data berhasil dihapus";

} else {

    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>