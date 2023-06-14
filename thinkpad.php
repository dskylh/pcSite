<?php
require_once 'header.php';
?>
    <div class="text-light rounded-2 text-center ana-sayfa">
        <a href="thinkpad.php"><img src="img/lenovo-laptop-thinkpad-logo.svg" alt="thinkpad logo"
                class="anasayfa-logo"></a>
        <hr style="height: 2px;">
        <h2 class="fw-light">Güvenilir Kalite</h2>
        <p class="anasayfa-yazi">ThinkPad sistemleri, dayanıklı olacak şekilde tasarlanmıştır. İşinizi sürdürmenizin
            bilgisayarınıza bağlı
            olduğunun farkındayız. Bu nedenle tüm ThinkPad’ler, dayanıklı olacak şekilde üretilmiştir.</p>
        <!-- <hr style="height: 2px;"> -->
        <video id="video_1" class="" src="video/lenovo-laptop-thinkpad-series-feature-2-mil-spec-video-v2.mp4" width="60%"
            controls autoplay loop>

        </video>
        <br>
        <div class="btn-group">

            <button class="btn btn-outline-light"
                onclick="yaziDegistir('button-vid-h1', 'button-vid-p1', MILSPEC_h, MILSPEC), videoChangemilspec()">MIL-SPEC</button>
            <button class="btn btn-outline-light"
                onclick="yaziDegistir('button-vid-h1', 'button-vid-p1', ybo_h, ybo_p), videoChangeYbo()">Yüksek Batarya Ömrü</button>
            <button class="btn btn-outline-light"
                onclick="yaziDegistir('button-vid-h1', 'button-vid-p1', kg_h, kg_p, videoChangeKg())">Kusuruz Güvenlik</button>
        </div>
        <h3 id="button-vid-h1" class="fw-light mt-2">Hayatın karşınıza çıkarabileceği her şeyin üstesinden gelebilir
        </h3>
        <p id="button-vid-p1" class="anasayfa-yazi">Sistem kesinti süresi için hiç kimsenin zamanı yok. Tam da bu
            nedenle ThinkPad dizüstü bilgisayarlarımız, dayanıklılık sağlamak üzere sıkı MIL-SPEC testlerinden ve
            yüzlerce kalite kontrol testinden geçer. Kutupların vahşi doğasından çöllerdeki kum fırtınalarına, sıfır yer
            çekiminden dökülmelere ve düşmelere kadar yaşamın karşınıza çıkarabileceği her durumda onlara
            güvenebilirsiniz.</p>
    </div>
    <div class="container-fluid  ">
        <div class="row">

            <div class="card bg-dark text-center mx-auto " style="width: 18rem; margin-top: 10px; margin-right: 10px;">
                <img src="img/lenovo-laptop-thinkpad-x1-subseries-thumbnail.webp" class="card-img-top" alt="x1 serisi thumbnail">
                <div class="card-body">
                    <h5 class="card-title text-light text-center">X1 Serisi</h5>
                    <p class="card-text text-light">Ultra hafif ve birinci sınıf cihazlarımızda son nokta</p>
                    <a href="x1.php" class="btn btn-light ">Serilere Göz Atın</a>
                </div>
            </div>
            <div class="card bg-dark text-center mx-auto " style="width: 18rem; margin-top: 10px; margin-right: 10px;">
                <img src="img/lenovo-laptop-thinkpad-x-subseries-thumbnail.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-light text-center">X Serisi</h5>
                    <p class="card-text text-light">Sınırsız mobilite ve rakipsiz pil ömrü için ultra ince ve yüksek
                        performanslı</p>
                    <a href="x.php" class="btn btn-light ">Serilere Göz Atın</a>
                </div>
            </div>
            <div class="card bg-dark text-center mx-auto " style="width: 18rem; margin-top: 10px; margin-right: 10px;">
                <img src="img/lenovo-laptop-thinkpad-t-subseries-thumbnail.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-light text-center">T Serisi</h5>
                    <p class="card-text text-light">Üstün performans, dayanıklılık ve mobilite</p>
                    <a href="t.php" class="btn btn-light ">Serilere Göz Atın</a>
                </div>
            </div>
            <div class="card bg-dark text-center mx-auto" style="width: 18rem; margin-top: 10px; margin-right: 10px;">
                <img src="img/lenovo-laptop-thinkpad-p-subseries-thumbnail.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-light text-center">P Serisi</h5>
                    <p class="card-text text-light">İş istasyonunun gücü ThinkPad'in taşınılabilirliğiyle buluştu</p>
                    <a href="p.php" class="btn btn-light ">Serilere Göz Atın</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        var MILSPEC_h = "Hayatın karşınıza çıkarabileceği her şeyin üstesinden gelebilir";
        var MILSPEC =
            "Sistem kesinti süresi için hiç kimsenin zamanı yok. Tam da bu nedenle ThinkPad dizüstü bilgisayarlarımız, dayanıklılık sağlamak üzere sıkı MIL-SPEC testlerinden ve yüzlerce kalite kontrol testinden geçer. Kutupların vahşi doğasından çöllerdeki kum fırtınalarına, sıfır yer çekiminden dökülmelere ve düşmelere kadar yaşamın karşınıza çıkarabileceği her durumda onlara güvenebilirsiniz.";
        var ybo_h = "Mobilitenin ustaları";
        var ybo_p =
            "Her şeyden önemlisi, özellikle de hareket halindeyken cihazınıza güvenebilmeniz gerekir. Kimin priz aramak için zamanı var? Cihazlarımız tam da bu nedenle efsanevi pil ömrüyle bilinir. Ancak, daha da çok eğlenmek istediğinizde, Hızlı Şarj özelliği sayesinde öğle yemeği arasından dönünce cihazınızın %80 dolmuş olduğunu göreceksiniz.";
        var kg_h = "Kesintisiz güvenlik";
        var kg_p =
            "Sisteminiz ve varlıklarınız için kesintisiz güvenlik sunan entegre güvenlik özelliklerinden oluşan ThinkShield paketini tam da bu nedenle oluşturduk. Meraklı gözlere karşı sizi uyaran bir ekran, girmeniz oturum açmanız için gereken biyometri verileri, kablosuz ağ sahtekarlıklarını veya verilerinizi şifreleyen sabit yazılımları algılama gibi her türlü görev ve konuda bize güvenebilirsiniz.";

        function yaziDegistir(id_h, id_p, yazi_h, yazi_p) {
            document.getElementById(id_h).innerHTML = yazi_h;

            document.getElementById(id_p).innerHTML = yazi_p;
        }
        function videoChangemilspec() {
            document.getElementById("video_1").src="video/lenovo-laptop-thinkpad-series-feature-2-mil-spec-video-v2.mp4"; 
            
        }
 

        function videoChangeYbo() {
            document.getElementById("video_1").src="video/lenovo-laptop-thinkpad-series-feature-2-battery-life-video-v2.mp4"; 
            
        }
        function videoChangeKg() {
            document.getElementById("video_1").src="video/lenovo-laptop-thinkpad-series-feature-2-seamless-security-video-v2.mp4"; 
            
        }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>