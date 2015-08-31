<?php
echo "Komentar : ".@$_POST['komentar']."<br>";
echo "Artikel ini ".@$_POST['berguna']." bagi anda"."<br>";
?>
<button onclick="goBack()">Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>