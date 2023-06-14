    <?php
        include_once 'header.php';
    ?>
    <section class="h-100 h-custom rounded-2 mt-2" style="background-color: #212529;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo"> -->
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Kayıt Ol</h3>

                            <form class="px-md-2" action="includes/register.inc.php" method="post">
                                <input type="text" class="form-control my-3" name="name" placeholder="İsim" />
                                <input type="text" class="form-control my-3" name="email" placeholder="E-mail">
                                <input type="text" class="form-control my-3" name="uid" placeholder="Kullanıcı Adı" >
                                <input type="password" class="form-control my-3"name ="password" placeholder="Şifre" />
                                <input type="password" class="form-control my-3"name ="password-rpt" placeholder="Şifre Tekrar" />
                                <button type="submit" name="submit" class="btn btn-dark mb-1">Kayıt Ol</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyInput"){
                echo "<script>alert('Lütfen tüm alanları doldurun.')</script>";
            }
            else if ($_GET["error"] == "invalidEmail"){
                echo "<script>alert('Lütfen geçerli bir e-mail adresi girin.')</script>";
            }
            else if ($_GET["error"] == "invalidUid"){
                echo "<script>alert('Lütfen geçerli bir kullanıcı adı girin.')</script>";
            }
            else if($_GET["error"] == "pwdNotMatch"){
                echo "<script>alert('Şifreler uyuşmuyor.')</script>";
            }
            else if($_GET["error"] == "usernameTaken"){
                echo "<script>alert('Bu kullanıcı adı kullanılıyor.')</script>";
            }
            else if($_GET["error"] == "none"){
                echo "<script>alert('Başarıyla kayıt oldunuz.')</script>";
            }
             
        }
    ?>
</body>

</html>