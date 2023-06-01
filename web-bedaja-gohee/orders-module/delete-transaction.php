<?php
if (isset($_POST['delete'])) {
    $id = $_POST['ord_id'];

    $deleteSql = "DELETE FROM `tbl_orders` WHERE `ord_id`";
    if (mysqli_query($conn, $deleteSql)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>