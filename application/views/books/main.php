<!-- Page header -->
<div class="page-header">
    <h3>ส่วนหลักการจัดการหนังสือ</h3>
</div>

<!-- Define row of columns -->
<div class="row">

    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    รายชื่อหนังสือ
                </h3>
                <div class="pull-right">
                    <a href="<?= base_url('books/add') ?>" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-plus"></span> เพิ่มหนังสือ
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>รหัสหนังสือ</th>
                            <th>รูป</th>
                            <th>หนังสือ</th>
                            <th>หมวด</th>
                            <th>ราคา</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books_list as $row) { ?>
                            <tr>
                                <td><?= $row['id_books'] ?></td>
                                <td><img src="<?= $row['books_img'] ?>" width="80"></td>
                                <td>
                                    <dl>
                                        <dt>ชื่อ</dt>
                                        <dd><?= $row['books_name'] ?></dd>
                                        <dt>รายละเอียด</dt>
                                        <dd><?= $row['books_des'] ?></dd>
                                    </dl>
                                </td>
                                <td><?= $row['type_name'] ?></td>
                                <td>
                                    <span class="label label-primary">รับ <?= $row['books_import_price'] ?></span>
                                    <span class="label label-success">ขาย <?= $row['books_sell_price'] ?></span>
                                    <span class="label label-warning">คะแนน <?= $row['books_point'] ?></span>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="<?= base_url('books/edit/' . $row['id_books']) ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> แก้ไข
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('books/delete/' . $row['id_books']) ?>">
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

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left" style="padding-top: 7px;">
                    รายชื่อหมวดหนังสือ
                </h3>
                <div class="pull-right">
                    <a href="<?= base_url('books/add_type') ?>" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-plus"></span> เพิ่มหมวด
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>รหัสหมวด</th>
                            <th>ชื่อ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookstype_list as $row) { ?>
                            <tr>
                                <td><?= $row['id_type'] ?></td>
                                <td><?= $row['type_name'] ?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="<?= base_url('books/edit_type/' . $row['id_type']) ?>">
                                        <span class="glyphicon glyphicon-pencil"></span> แก้ไข
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="<?= base_url('books/delete_type/' . $row['id_type']) ?>">
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