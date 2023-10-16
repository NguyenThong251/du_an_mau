<?php
session_start();
include"../Dao/pdo.php";
include"../Dao/binhluan.php";
if(isset($_GET['id_sp'])) {
//    echo($_GET['id_sp']);
 $id_sp = $_GET['id_sp'];
}
if (isset($_POST['guibinhluan'])) {
    $id_sp = $_POST['id_sp'];
    $noi_dung = $_POST['noi_dung'];
    $ngay_cmt = date('H:i:s d/m/Y');
    $id_user=$_SESSION['s_user']['id_user'];
    $ho_ten=$_SESSION['s_user']['ho_ten'];
    binhluan_insert($id_user,$noi_dung,$ngay_cmt,$ho_ten,$id_sp);
}
$dsbl = binhluan_select_all();
$html_cmt="";
foreach ($dsbl as $cmt) {
    extract($cmt);
    $html_cmt .='<div class="card-body">
    <div class="d-flex flex-start align-items-center"><img
            class="rounded-circle shadow-1-strong me-3 img-04"
            src="../View/layout/images/th2.jpg" alt="avatar">
        <div>
            <h6 class="fw-bold text-primary mb-1 text-dark fz-1">'.$ho_ten.'</h6>
            <p class="text-muted small mb-0 fz-08">'.$ngay_cmt.'</p>
        </div>
    </div>
    <p class="mt-3 mb-4 pb-2 fz-8 text-dark lh-base fz-1">'.$noi_dung.'</p>
    <div class="small d-flex justify-content-start"><a
            class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
            <ion-icon class="fz-1" name="heart-outline"></ion-icon>
            <p class="mb-0 fz-1">Yêu thích</p>
        </a><a class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
            <ion-icon class="fz-1" name="chatbox-ellipses-outline"></ion-icon>
            <p class="mb-0 fz-1">Comment</p>
        </a><a class="d-flex align-items-center me-3 unlink gap-2 text-dark" href="#!">
            <ion-icon class="fz-1" name="share-outline"></ion-icon>
            <p class="mb-0 fz-1"> Share</p>
        </a></div>
</div>';
};
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="../View/layout/assets/css/app.css">
<h3 class="text-dark fz-14 fw-500 pt-5">Bình luận</h3>
<?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)) {


?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="hidden" name="id_sp" value="<?php echo $id_sp; ?>">
    <section>
        <div class="py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100"><img class="rounded-circle shadow-1-strong me-3 img-03"
                                    src="../View/layout/images/th2.jpg" alt="avatar">
                                <div class="form-outline w-100">
                                    <textarea name="noi_dung" class="form-control" id="textAreaExample" rows="4"
                                        style="background: #fff;"></textarea>
                                    <label class="form-label" for="textAreaExample">Message</label>
                                </div>
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="submit" name="guibinhluan" class="btn button-app btn-sm"
                                    type="button">Post comment</button>

                            </div>
                            <?=$html_cmt?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>
<?php 
}else{
$_SESSION['trang']="sanphamchitiet";
$_SESSION['id_sp']=$_GET['id_sp'];
echo"<a class='fz-1 fw-400' href='../index.php?pg=dangnhap' target='_parent'>Đăng nhập để bình luận</a>";
}?>


<!-- <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
    <div class="d-flex flex-start w-100">
        <div class="form-outline w-100">
            <textarea name="noidung" class="form-control" id="textAreaExample" rows="4"
                style="background: #fff; width:100%"></textarea>
        </div>
    </div>
    <div class="float-end mt-2 pt-1" style="padding-top: 2rem">
        <button class="btn button-app btn-sm" type="submit" name="guibinhluan">Post comment</button>
    </div>
</div> -->