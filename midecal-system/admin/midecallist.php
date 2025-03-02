<?php
include("../config/condb.php"); // เชื่อมต่อฐานข้อมูล
$query = "SELECT mdc_id,mdc_name,mdc_surname,pst_name,mdc_phone,mdc_email,mdc_add,level FROM tbl_medical tm,tbl_position tb WHERE tb.pst_id=tm.pst_id ORDER BY tm.mdc_id; " or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
// echo $query;
// exit();


?>

<table id="example1" class="table table-bordered table-striped dataTable">
    <thead>
        <tr role="row" class="info">
            <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสบุคลากร</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ตำแหน่ง</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ-สกุล</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">เบอร์โทร-Email</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">ที่อยู่</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ระดับ</th>
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
                    <?php echo $row['mdc_id']; ?>
                </td>
                <td>
                    <?php echo $row['pst_name']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_name'] . " " . $row['mdc_surname']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_phone'] . " " . $row['mdc_email']; ?>
                </td>
                <td>
                    <?php echo $row['mdc_add']; ?>
                </td>
                <td>
                    <?php echo $row['level']; ?>
                </td>
                <td>
                    <a class="btn btn-warning btn-flat btn-sm" href="midecal_edit.php?act=edit&pst_id=<?php echo $row['pst_id']; ?>">
                        แก้ไข
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger btn-flat btn-sm" href="midecal_del.php?pst_id=<?= $row['pst_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                        ลบ
                    </a>
                </td>
            <?php } ?>
            </tr>
    </tbody>
</table>