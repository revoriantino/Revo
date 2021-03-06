<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<link rel="stylesheet" href="../../css/vertical-layout-light/style.css">

<body ng-controller="loginController">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-5 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">

                                <img src="/images/download.png" style="display:block; margin:auto;">
                                <h2 align="center"> W E L C O M E</h2>
                                <form class="pt-3" method="post" action="/login/login">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg <?= ($validation->hasError("username")) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" placeholder="Username" name="username">
                                        <div class="invalid-feedback ml-2">
                                            <?= $validation->getError("username"); ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg <?= ($validation->hasError("password")) ? 'is-invalid' : '' ?>" id="exampleInputPassword1" placeholder="Password" name="password">
                                        <div class="invalid-feedback ml-2">
                                            <?= $validation->getError("password"); ?>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                            IN</button>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../js/off-canvas.js"></script>
        <script src="../../js/hoverable-collapse.js"></script>
        <script src="../../js/template.js"></script>
        <script src="../../js/settings.js"></script>
        <script src="../../js/todolist.js"></script>

        <script src="vendors/angular/angular.min.js"></script>
        <!-- <script>
        angular.module("appLogin", [])
            .controller("loginController", loginController);

        function loginController($scope, $http) {
            $scope.model = {};
            $scope.login = () => {
                $http({
                    method: "POST",
                    url: "http://10.10.20.204/api/v1/authentication",
                    data: $scope.model
                }).then(res => {
                    console.log(res.data);

                    $http({
                        method: "GET",
                        url: "http://10.10.20.204/api/v1/check",
                        headers: {
                            "Content-Type": "aplication/json",
                            "Authorization": res.data.data.token
                        }
                    }).then(x => {
                        console.log(x.data);
                    })
                })
            }
        }
        </script> -->
        <!-- endinject -->
</body>

</html>