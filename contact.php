<?php
include_once 'header.php';
?>

    <div class="text-light rounded-2 text-center about ">

        <style>
            form>input,
            form>textarea,
            form>label {
                display: block;
                margin-bottom: 5px;
            }
        </style>
        <div class=" col-15 text-start p-5">
            <!-- iletisim icin formspree.io-->
            <form name="contact" method="POST" action="https://formspree.io/f/mdoblyzb">
                <label for="isim" class="h4 fw-light">İsim</label>
                <input id="isim" type="text" name="isim" class="form-control" />
                <label for="konu" class="h4 fw-light">Konu</label>
                <input id="konu" type="text" name="konu" class="form-control" />
                <label for="email" class="h4 fw-light">E-Mail</label>
                <input id="email" type="text" name="email" class="form-control">
                <label for="message" class="h4 fw-light">Mesaj</label>
                <textarea name="message" class="form-control"></textarea>

                <input type="submit" name="send" class="btn btn-outline-light mt-2" value="Send" />
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>