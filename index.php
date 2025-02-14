<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Moderustic:wght@300..800&display=swap');
    body {
        background-color : #FFD460;
        font-family: "Moderustic", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
                <form method="post" class="border rounded bg-light p-2">
                    <label class="form-label">Harga Barang (Rp)</label>
                    <input type="number" name="harga" class="form-control" min="0" step="0.01" placeholder="Masukkan harga barang" autocomplete="off"
                     onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <label class="form-label">Diskon (%)</label>
                    <input type="text" name="diskon" class="form-control" maxlength="3" min="0" step="0.01" placeholder="Masukkan diskon 0-100" autocomplete="off"
                     onkeypress="return event.charCode >= 48 && event.charCode <= 57">

                    <button type="submit" class="btn btn-outline-warning w-100 mt-2" name="hitung">Hitung</button>
                    <button class="btn btn-outline-warning w-100 mt-2" name="reset">Reset</button>
                
                </form>

                <?php
                if(isset($_POST['hitung'])) {
                    $harga = $_POST['harga'];
                    $diskon = $_POST['diskon'];
                if ($harga < 0){
                    echo "<script>alert('Harga tidak boleh negatif!')</script>";
                }elseif ($diskon < 0 || $diskon > 100){
                    echo "<script>alert('Diskon harus di antara 0-100!')</script>";
                }else{
                    $nilai_diskon = $harga * ($diskon/100);
                    $total_harga = $harga - $nilai_diskon; ?>
                    <div class="border rounded bg-light p-2 mt-2" name="hapus">
                    <p>Harga : Rp. <b><?php echo number_format($harga,2,',','.') ?></b></p>
                    <p>Diskon <?php echo $diskon ?>% : Rp. <b><?php echo number_format($nilai_diskon,2,',','.') ?></b></p>
                    <p>Total harga setelah diskon : Rp. <b><?php echo number_format($total_harga,2,',','.') ?></b></p>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</div>
<p class="text-center"><marquee width="20%" direction="left" height="100px">&copy; UKK RPL | MUHAMMAD RAYYI RAMADHAN | XII</marquee></p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function reset() {
    var reset = document.getElementsByName['hapus'];
    hapus.remove();
}
</script>
</body>
</html>