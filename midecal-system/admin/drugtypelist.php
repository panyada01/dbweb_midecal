<?php
include("../config/condb.php"); // เชื่อมต่อฐานข้อมูล
$query = "SELECT * From tbl_drugtype order by dt_id " or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
// echo $query;
// exit();
?>
<table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
        <tr role="row" class="info">
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสรูปแบบยา</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ชื่อรูปแบบยา</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">วิธีการใช้ยา</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row) /*$i = 1; */ { ?>
            <tr>
                <td>
                    <?php echo ++$i; ?>
                </td>
                <td>
                    <?php echo $row['dt_id']; ?>
                </td>
                <td>
                    <?php echo $row['dt_name']; ?>
                </td>
                <td>
                    <?php echo $row['dt_use']; ?>
                </td>
               

                <td>
                    <a class="btn btn-warning btn-flat btn-sm" href="position_edit.php?act=edit&pst_id=<?php echo $row['pst_id']; ?>">
                        แก้ไข
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger btn-flat btn-sm" href="position_del.php?pst_id=<?= $row['pst_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                        ลบ
                    </a>
                </td>
            <?php } ?>
            </tr>
    </tbody>
</table>