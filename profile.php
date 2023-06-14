<?php
require_once 'header.php';
?>
<div class="text-light rounded-2 text-center ana-sayfa">
    <?php
    if (isset($_SESSION['userId'])) {
        echo "<h3 class='fw-light'>Merhaba " . $_SESSION["userName"] . "</h3>";
        echo "<hr>";
        echo "<div class=''>";
        echo "<h4 class='fw-light mb-4'>Kullanıcı Bilgileri:</h4>";
        echo "<p>Kullanıcı Adı: " . $_SESSION["userUid"] . "</p>";
        echo "<p>E-posta: " . $_SESSION["userEmail"] . "</p>";
        echo "</div>";
    } else {
        header("Location: login.php");
    }

    ?>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>

</html>