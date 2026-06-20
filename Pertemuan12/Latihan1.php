<?php

include "koneksi.php";

$sql = "
UPDATE tbl_mhs
SET Age = 36
WHERE FirstName='Karina'
AND LastName='Suwandi'
";

if (mysqli_query($conn, $sql)) {

    echo "Data berhasil diupdate";

} else {

    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>