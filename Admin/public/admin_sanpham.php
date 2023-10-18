<?php
// Load danh sách
$select_html = '';
foreach ($danhmuc_list as $item) {
    $id = $item['id_danhmuc'];
    $ten_dm = $item['ten']; // Renamed to avoid overwriting $name

    $select_html .= '<option value="' . $id. '">' . $ten_dm . '</option>';
}
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
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Danh muc</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Giảm giá</th>
                                <th>Sale</th>
                                <th>New</th>
                                <th>View</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($sanpham_list as $item) {
                                    extract($item);
                                    $edit = "<a href='index.php?pg=updatesp&id_sp=" . $id_sp . "' class='btn btn-primary'>Sửa</a>";

                                    $del = "<a href='index.php?pg=delsp&id_sp=" . $id_sp . "' class='btn btn-danger'>Xóa</a>";

                                    echo '
                                    <tr >
                                        <td >' . $id_sp . '</td>
                                        <td><img class ="w-25" src="../View/layout/images/' . $hinh . '" alt="Sản phẩm"></td>
                                        <td>' . $id_danhmuc . '</td>
                                        <td>' . $ten_sp . '</td>
                                        <td>' . $gia . '</td>
                                        <td>' . $giam_gia . '</td>
                                        <td>' . $sale . '</td>
                                        <td>' . $new . '</td>
                                        <td>' . $so_luot_xem . '</td>
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

            <form class="formmain row" action="index.php?pg=add_sanpham" method="post" enctype="multipart/form-data">
                <div class="form-group col-6">
                    <label class="fw-400" for="hinh">Hình ảnh</label>
                    <input type="file" class="hinh" id="hinh" name="hinh" required>
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-name ">ID sản phẩm</label>
                    <input type="text" class="form-control" id="category-name" name="id_sp">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">ID danh mục</label>
                    <select class="form-control" name="id_danhmuc">
                        <?=$select_html?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="category-description" name="ten_sp">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Giá</label>
                    <input type="number" class="form-control" id="category-description" name="gia">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Giảm giá</label>
                    <input type="number" class="form-control" id="category-description" name="giam_gia">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Sale</label>
                    <input type="number" class="form-control" id="category-description" name="sale">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">New</label>
                    <select class="form-control" name="new" id="" class="col-12">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Số lượt xem</label>
                    <input type="number" class="form-control" id="category-description" name="so_luot_xem">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Mô tả</label>
                    <input type="text" class="form-control" id="category-description" name="mo_ta">
                </div>



                <div class="py-3">
                    <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                </div>
            </form>
        </div>

</div>
</main>
</div>