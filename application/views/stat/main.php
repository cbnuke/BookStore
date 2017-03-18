<!-- Page header -->
<div class="page-header">
    <h3>ส่วนหลักการซื้อขาย</h3>
</div>

<!-- Define row of columns -->
<div class="row">

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    รายการวันนี้
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>หนังสือ</th>
                            <th>สมาชิก</th>
                            <th>ส่วนลด</th>
                            <th>วันที่</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($selltoday_list as $row) { ?>
                            <tr>
                                <td>
                                    <dl>
                                        <dt>รหัส</dt>
                                        <dd><?= $row['id_books'] ?></dd>
                                        <dt>ชื่อ</dt>
                                        <dd><?= $row['books_name'] ?></dd>
                                    </dl>
                                </td>
                                <td>
                                    <dl>
                                        <dt>รหัส</dt>
                                        <dd><?= $row['id_members'] ?></dd>
                                        <dt>ชื่อ</dt>
                                        <dd><?= $row['members_name'] ?></dd>
                                    </dl>
                                </td>
                                <td><?= $row['discount'] ?></td>
                                <td><?= nice_date($row['create_date'], 'd/m/Y H:s') ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    รายการขายย้อนหลัง 7 วัน
                </h3>
            </div>
            <div class="panel-body">

            </div>
        </div>
    </div>

</div>