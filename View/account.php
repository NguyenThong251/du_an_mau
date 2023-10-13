<?php
 if (isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
 }
?>
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body flex-center flex-column">
                        <img src="./View/layout/images/th2.jpg" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 150px;" class="flex-center">
                        <h5 class="my-3 text-dark"><?=$username?></h5>
                        <p class="text-muted mb-1 text-dark">Full Stack Developer</p>
                        <p class="text-muted mb-4 text-dark">Bay Area, San Francisco, CA</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Follow</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg text-dark"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg text-dark"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg text-dark"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg text-dark"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <form action="index.php?pg=updateuser" method="post" class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-3">
                                <p class="mb-0 text-dark fz-1">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="text-muted mb-0 text-dark fz-1 border-0" name="username"
                                    value="<?=$username?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row  d-flex align-items-center">
                            <div class="col-sm-3 text-dark fz-1">
                                <p class="mb-0 text-dark fz-1">Email</p>
                            </div>
                            <div class="col-sm-9 text-dark fz-1">
                                <input class="text-muted mb-0 text-dark fz-1 border-0" name="email" value="<?=$email?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row  d-flex align-items-center">
                            <div class="col-sm-3">
                                <p class="mb-0 text-dark fz-1">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="text-muted mb-0 text-dark fz-1 border-0" name="sdt" value="<?=$sdt?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row  d-flex align-items-center">
                            <div class="col-sm-3 text-dark fz-1">
                                <p class="mb-0 text-dark fz-1">Password</p>
                            </div>
                            <div class="col-sm-9">
                                <input type="password" class="text-muted mb-0 text-dark fz-1 border-0" name="password"
                                    value="<?=$password?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row  d-flex align-items-center pb-3 ">
                            <div class="col-sm-3">
                                <p class="mb-0 text-dark fz-1">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <input class="text-muted mb-0 text-dark fz-1 border-0" name="address"
                                    value="<?=$dia_chi?>">
                            </div>
                        </div>
                        <input type="hidden" name="id_user" value="<?=$id_user?>">
                        <input type="submit" name="capnhat" class="btn button-app " value="Cập nhật ">
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project
                                    Status
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project
                                    Status
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>