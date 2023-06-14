    <?php
        include_once 'header.php';
    ?>
    <section class="h-100 h-custom rounded-2 mt-2" style="background-color: #212529;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Giriş Yap</h3>
                            
                            <form class="px-md-2" action="includes/login.inc.php" method="post">
                                <input type="text" class="form-control my-3" name="uid" placeholder="Kullanıcı Adı/E-mail" />
                                <input type="password" class="form-control my-3"name ="password" placeholder="Şifre" />
                                <button type="submit" name="submit" class="btn btn-dark mb-1">Giriş Yap</button>
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
            else if ($_GET["error"] == "wronglogin"){
                echo "<script>alert('Kullanıcı adı veya şifre hatalı.')</script>";
            }
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>