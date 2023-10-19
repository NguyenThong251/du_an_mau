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
                                <th>ID user</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>

                                <!-- <th>Password</th> -->

                                <th>Vai trò</th>
                                <!-- <th>Username</th> -->
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($user_list as $item) {
                                    extract($item);
                                    $edit = "<a href='index.php?pg=update_user&id_sp=" . $id_user . "' class='btn btn-primary'>Sửa</a>";

                                    $del = "<a href='index.php?pg=del_user&id_sp=" . $id_user . "' class='btn btn-danger'>Xóa</a>";

                                    echo '
                                    <tr >
                                        <td >' . $id_user . '</td>
                                        <td>' . $ho_ten . '</td>
                                        <td>' . $sdt . '</td>
                                        <td>' . $email . '</td>
                                        <td>' . $dia_chi . '</td>

                                        
                                    
                                        <td>' . $vai_tro . '</td>
                                      
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
                    <label class="fw-400" for="category-name ">ID user</label>
                    <input type="number" class="form-control" id="category-name" name="id_sp">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Họ tên</label>
                    <select class="form-control" name="id_danhmuc">
                        <?=$select_html?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Số điện thoại</label>
                    <input type="number" class="form-control" id="category-description" name="sdt">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Email</label>
                    <input type="email" class="form-control" id="category-description" name="email">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Địa chỉ</label>
                    <input type="text" class="form-control" id="category-description" name="dia_chi">
                </div>
                <div class="py-3">
                    <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                </div>
            </form>
        </div>

</div>
</main>
</div>