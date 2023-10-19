<div class="header_title container-fluid bg-dark">
    <div class="header_title-content container py-3">
        <div class="header_title-text d-flex justify-content-center align-item-center fz-1 text-white fw-200">SEE BETTER
            THAN YESTERDAY - ANNA LOVE YOU!</div>
    </div>
</div>
<section class="form-header container">
    <div class="row">
        <div class="col"> </div>
        <div class="col form-header-title">
            <div class="form-header-title text-dark p-5">
                <h3 class="flex-center fw-600">Đăng ký</h3><span
                    class="px-5 flex-center fz-12 fw-500 text-center lh-base">Hãy đăng ký để được hưởng nhiều đặc quyền
                    riêng dành cho bạn</span>
            </div>
        </div>
    </div>
</section>
<section class="form-body container">
    <div class="row">
        <div class="form-left col"><img class="rounded-5" src="./View/layout/images/img-pr-4.jpg" alt="alt"></div>
        <div class="form-right col">
            <div class="form-content">
                <form class="row fw-500 text-dark" action="index.php?pg=adduser" method="post">
                    <div class="col-md-6 pt-3">
                        <label class="form-label fz-12" for="lastName">Last name </label>
                        <input class="form-control" type="text" name="" id="lastName" required
                            placeholder="Nhập họ của bạn">
                    </div>
                    <div class="col-md-6 pt-3">
                        <label class="form-label fz-12" for="fistName">Fist name </label>
                        <input class="form-control" type="text" name="" id="fistName" required
                            placeholder="Nhập tên của bạn">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="account">Tài Khoản </label>
                        <input class="form-control" type="text" name="username" id="account" required
                            placeholder="Nhập tài khoản">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" required
                            placeholder="Nhập email">
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="password">Mật khẩu</label>
                        <div class="input-pass d-flex align-items-center border bg-white rounded">
                            <input class="form-control border-0" type="password" name="password" id="password" required
                                placeholder="Nhập  mật khẩu">
                            <ion-icon class="fz-12 px-3 pointer" id="eye-icon" name="eye-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="col-md-12 pt-3">
                        <label class="form-label fz-12 pb-2" for="re-password">Nhập lại mật khẩu</label>
                        <div class="input-pass d-flex align-items-center border bg-white rounded">
                            <input class="form-control border-0" type="password" name="" id="re-password" required
                                placeholder="Nhập lại mật khẩu">
                            <ion-icon class="fz-12 px-3 pointer" id="eye-icon2" name="eye-outline"></ion-icon>
                        </div>
                    </div>
                    <div class="form-check d-flex align-items-center fz-1 text-dark gap-2 py-3">
                        <input class="form-check-input" type="checkbox" name=""><span>Chập nhận chính sách của
                            Anna</span>
                    </div>
                    <input value="Đăng kí ngay" type="submit" name="dangky"
                        class="form-button btn button-secondary col-md-12">
                </form>
            </div>
            <div class="form-forget py-3 flex-center"> <span class="text-dark fz-1">Hoặc</span></div>
            <div class="form-social flex-center gap-2 fz-1 fw-500 py-3"><img src="./View/layout/images/gg.svg" alt=""><a
                    class="unlink text-dark" href=""> Google</a></div>
            <div class="form-social flex-center gap-2 fz-1 fw-500 py-3"><img src="./View/layout/images/fb.svg" alt=""><a
                    class="unlink text-dark" href=""> Facebook</a></div>
            <div class="form-question flex-center text-dark fz-1 gap-2 py-3"> <span>Bạn đã có tài khoản Anna?</span><a
                    href="index.php?pg=dangnhap">Đăng nhập ngay </a></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lấy các phần tử và biến cần thiết

    var passwordInput = document.getElementById('password');
    var confirmPasswordInput = document.getElementById('re-password');
    var eyeIcon1 = document.getElementById('eye-icon');
    var eyeIcon2 = document.getElementById('eye-icon2');

    // Bắt sự kiện khi người dùng nhấn vào biểu tượng mắt 1
    eyeIcon1.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon1.setAttribute('name', 'eye-off-outline'); // Thay đổi giá trị của thuộc tính name
        } else {
            passwordInput.type = 'password';
            eyeIcon1.setAttribute('name', 'eye-outline');
        }
    });

    // Bắt sự kiện khi người dùng nhấn vào biểu tượng mắt 2
    eyeIcon2.addEventListener('click', function() {
        if (confirmPasswordInput.type === 'password') {
            confirmPasswordInput.type = 'text';
            eyeIcon2.setAttribute('name', 'eye-off-outline');
        } else {
            confirmPasswordInput.type = 'password';
            eyeIcon2.setAttribute('name', 'eye-outline');
        }
    });

    // Bắt sự kiện khi người dùng gửi form
    var form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        var password = passwordInput.value;
        var confirmPassword = confirmPasswordInput.value;

        if (password !== confirmPassword) {
            e.preventDefault(); // Ngăn chặn gửi form
            alert('Mật khẩu không khớp. Vui lòng nhập lại.');
        }
    });
});
</script>