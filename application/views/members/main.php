<!-- Page header -->
<div class="page-header">
    <h3>ส่วนหลักการจัดการสมาชิก</h3>
</div>

<!-- Define row of columns -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    รายชื่อสมาชิก
                </h3>
                <div class="pull-right">
                    <a href="<?= base_url('members/add') ?>" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-plus"></span> เพิ่มสมาชิก
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>รหัสสมาชิก</th>
                            <th>ชื่อ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>คะแนนสะสม</th>
                            <th>วันที่สมัคร</th>
                            <th>วันที่แก้ไข</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members_list as $row) { ?>
                            <tr>
                                <td><?= $row['id_members'] ?></td>
                                <td><?= $row['members_name'] ?></td>
                                <td><?= $row['members_phone'] ?></td>
                                <td><?= $row['members_point'] ?></td>
                                <td><?= nice_date($row['create_date'], 'd/m/Y H:s') ?></td>
                                <td><?= nice_date($row['update_date'], 'd/m/Y H:s') ?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="<?= base_url('members/edit/' . $row['id_members']) ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> แก้ไข
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('members/delete/' . $row['id_members']) ?>">
                                        <span class="glyphicon glyphicon-trash"></span> ลบ
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>