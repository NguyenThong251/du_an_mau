<?php
// Load danh sách
// $select_html = '';
// foreach ($danhmuc_list as $item) {
//     $id = $item['id_danhmuc'];
//     $ten_dm = $item['ten']; // Renamed to avoid overwriting $name

//     $select_html .= '<option value="' . $id. '">' . $ten_dm . '</option>';
// }
// ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh mục</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Bình luận</li>
            </ol>
            <div class="card mb-4">

            </div>
            <div class="card mb-4">
                <?php
        if (isset($tb)) echo"<span class='px-3 fz-1 text-danger'>".$tb."</span>"
        ?>
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Danh sách bình luận
                </div>
                <div class="card-body">
                    <table id="customTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id bình luận</th>
                                <th>Nội dung</th>
                                <th>Ngày bình luận</th>
                                <th>Họ tên</th>
                                <th>Id user</th>
                                <th>Id sản phẩm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($binhluan_list as $item) {
                                    extract($item);
                                    $edit = "<a href='index.php?pg=updatecmt&id_cmt=" . $id_cmt . "' class='btn btn-primary'>Sửa</a>";

                                    $del = "<a href='index.php?pg=delcmt&id_cmt=" . $id_cmt . "' class='btn btn-danger'>Xóa</a>";

                                    echo '
                                    <tr >
                                        <td >' . $id_cmt . '</td>
                                    
                                        <td>' . $noi_dung . '</td>
                                        <td>' . $ngay_cmt. '</td>
                                        <td>' . $ho_ten . '</td>
                                        <td>' . $id_user . '</td>
                                        <td>' . $id_sp . '</td>
                                       
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
            <h3 class="add-catalog-title ">Thêm bình luân</h3>

            <form class="formmain row" action="index.php?pg=add_binhluan" method="post">
                <div class="form-group col-6">
                    <label class="fw-400" for="category-name ">ID cmt</label>
                    <input type="text" class="form-control" id="category-name" name="id_cmt">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Ngày cmt</label>
                    <input type="datetime-local" class="form-control" id="category-description" name="ngay_cmt">

                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">Họ và tên</label>
                    <input type="text" class="form-control" id="category-description" name="ho_ten">
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">ID user</label>
                    <select class="form-control" name="id_danhmuc">
                        <?=$select_html_user?>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label class="fw-400" for="category-description">ID sản phẩm</label>
                    <select class="form-control" name="id_danhmuc">
                        <?=$select_html_sp?>
                    </select>
                </div>
                <div class="form-group col-6 d-flex flex-column">
                    <label class="fw-400" for="category-description">Nội dung</label>

                    <textarea name="noi-dung" id="category-description" cols="30" rows="10"></textarea>
                </div>



                <div class="py-3">
                    <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                </div>
            </form>
        </div>

</div>
</main>
</div>