<?php
// Load danh sách

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh mục</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Danh mục</li>
            </ol>
            <div class="card mb-4">

            </div>
            <div class="card mb-4">
                <?php
        if (isset($tb)) echo"<span class='px-3 fz-1 text-danger'>".$tb."</span>"
        ?>
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách danh mục
                </div>
                <div class="card-body">
                    <table id="customTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID đơn hàng</th>
                                <th>Địa chỉ ND</th>
                                <th>Mã DH</th>
                                <th>Sdt ND</th>
                                <th>Tổng tiền</th>

                                <!-- <th>Password</th> -->

                                <th>Pttt</th>
                                <!-- <th>Username</th> -->
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($bill_list as $item) {
                                    extract($item);
                                    $edit = "<a href='index.php?pg=update_bill&id_sp=" . $id_don_hang. "' class='btn btn-primary'>Sửa</a>";

                                    $del = "<a href='index.php?pg=del_bill&id_sp=" . $id_don_hang . "' class='btn btn-danger'>Xóa</a>";

                                    echo '
                                    <tr >
                                        <td >' . $id_don_hang . '</td>
                                        <td>' . $dia_chi_ND . '</td>
                                        <td>' . $ma_donhang . '</td>
                                        <td>' . $sdt_ND . '</td>
                                        <td>' . $tongthanhtoan. '</td>
                                        <td>' . $pttt. '</td>
                                        <td class="d-flex gap-2">
                                            ' . $edit . $del . '
                                        </td>
                                    </tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="add-catalog container px-4 fz-1">
            <h3 class="add-catalog-title ">Thêm sản phẩm</h3>

            <form class="formmain row" action="index.php?pg=add_sanpham" method="post">
                <div class="form-group col-6">
                    <label class="fw-400" for="category-name ">ID đơn hàng</label>
                    <input type="number" class="form-control" id="category-name" name="id_don_hang">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Địa chỉ ND</label>
                    <input type="text" class="form-control" id="category-description" name="dia_chi_ND">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Mã ĐH</label>
                    <input type="email" class="form-control" id="category-description" name="ma_DH">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Sdt_ND</label>
                    <input type="number" class="form-control" id="category-description" name="sdt">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Tổng tiền</label>
                    <input type="number" class="form-control" id="category-description" name="tongthanhtoan">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Pttt</label>
                    <select class="form-control" name="pttt" id="" class="col-12">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="py-3">
                    <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                </div>
            </form>
        </div>

</div>
</main>
</div>