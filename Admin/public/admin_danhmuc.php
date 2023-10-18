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
                                <th>Danh mục</th>
                                <th>Mô tả</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                            foreach ($danhmuc_list as $item) {
                                extract($item);
                                $edit = "<a href='index.php?pg=updatedm&id_danhmuc=".$id_danhmuc."' class='btn btn-primary'>Sửa</a>";
                            
                                $del="<a  href='index.php?pg=delcatalog&id_danhmuc=".$id_danhmuc ."' class='btn btn-danger'>Xóa</a>";
                                echo '
                                <tr>
                                    <td>'.$id_danhmuc.'</td>
                                    <td>'.$ten.'</td>
                                    <td>'.$mo_ta.'</td>
                                    <td class="d-flex gap-2 ">
                                    '.$edit.$del.'
                                    </td>
                                </tr>
                                ';
                               
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="add-catalog container px-4 fz-1">
            <h3 class="add-catalog-title">Thêm danh mục</h3>

            <form class="formmain" action="index.php?pg=add_danhmuc" method="post">
                <div class="form-group">
                    <label for="category-name">Tên danh mục:</label>
                    <input type="text" class="form-control" id="category-name" name="ten" required>
                </div>

                <div class="form-group">
                    <label for="category-description">Mô tả:</label>
                    <input type="text" class="form-control" id="category-description" name="mo_ta">
                </div>

                <input type="hidden" name="id" value="<?=$id_danhmuc?>">
                <div class="py-3">
                    <input type="submit" class="btn btn-primary" name="btn-add" value="Thêm">
                </div>
            </form>
        </div>

</div>
</main>
</div>