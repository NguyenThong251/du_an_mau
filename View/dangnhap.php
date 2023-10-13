<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<section class="form-header container">
    <div class="row">
        <div class="col flex-center">
            <h3 class="text-center text-danger">
                <?php
                if (isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")){
                    echo $_SESSION['tb_dangnhap']; 
                    unset($_SESSION['tb_dangnhap']);
                } 
                ?>
            </h3>
        </div>
        <div class="col form-header-title">
            <div class="form-header-title text-dark p-5">
                <h3 class="flex-center fw-600">Đăng nhập </h3><span
                    class="px-5 flex-center fz-12 fw-500 text-center lh-base">Hãy đăng nhập để được hưởng đặc quyền
                    riêng dành cho bạn </span>
            </div>
        </div>
    </div>
</section>
<section class="form-body container">
    <div class="row">
        <div class="form-left col"><img class="rounded-5" src="./View/layout/images/img-pr-3.jpg" alt="alt"></div>
        <div class="form-right col">
            <div class="form-content">
                <form class="row fw-500 text-dark" action="index.php?pg=login" method="post">
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="account">Tài Khoản </label>
                        <input class="form-control" type="text" name="username" id="lastName" required
                            placeholder="Nhập tài khoản">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="password">Mật khẩu</label>
                        <div class="input-pass d-flex align-items-center border bg-white rounded">
                            <input class="form-control border-0" type="text" name="password" id="password" required
                                placeholder="Nhập tài khoản">
                            <ion-icon class="fz-12 px-3 pointer" name="eye-outline"></ion-icon>
                        </div>
                    </div>
            </div>
            <div class="form-check d-flex align-items-center fz-1 text-dark gap-2 py-3">
                <input class="form-check-input" type="checkbox" name=""><span>Lưu tài khoản</span>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập" class="form-button btn button-secondary col-md-12">
            </form>
            <div class="form-forget py-3"> <a class="fz-1 text-dark unlink" href="">Quên mật khẩu?</a></div>
            <div class="form-social flex-center gap-2 fz-1 fw-500 py-3"><img src="./View/layout/images/gg.svg" alt=""><a
                    class="unlink text-dark" href=""> Google</a></div>
            <div class="form-social flex-center gap-2 fz-1 fw-500 py-3"><img src="./View/layout/images/fb.svg" alt=""><a
                    class="unlink text-dark" href=""> Facebook</a></div>
            <div class="form-question flex-center text-dark fz-1 gap-2 py-3"> <span>Bạn chưa có tài khoản Anna?</span><a
                    href="index.php?pg=dangky">Đăng kí ngay </a></div>
        </div>
    </div>
</section>