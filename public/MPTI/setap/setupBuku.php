<?php session_start();

if (isset($_SESSION['user_admin'])) {

    // koneksi terpusat
    include "../setap/koneksi.php";
    $username = $_SESSION['user_admin'];
    $level = $_SESSION['level'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['Tambah'])) {
            $nama_file = $_FILES['image']['name'];
            $lokasi_file = $_FILES['image']['tmp_name'];

            if (empty($nama_file)) {
                mysqli_query($koneksi, "INSERT INTO setup_buku (nama_buku, deskripsi, gambar, link)
                    VALUES ('$_POST[nama]', '$_POST[deskripsi]', '', '$_POST[link]')")
                    or die(mysqli_error($koneksi));
            } else {
                move_uploaded_file($lokasi_file, "../img/$nama_file");
                mysqli_query($koneksi, "INSERT INTO setup_buku (nama_buku, deskripsi, gambar, link)
                    VALUES ('$_POST[nama]', '$_POST[deskripsi]', '$nama_file', '$_POST[link]')")
                    or die(mysqli_error($koneksi));
            }

            // Redirect ke halaman yang sama untuk mencegah pengiriman ulang form
            header("Location: setupBuku.php");
            exit();
        }

        else if (isset($_POST['Edit'])) {
            $nama_file = $_FILES['image']['name'];
            $lokasi_file = $_FILES['image']['tmp_name'];

            if (empty($nama_file)) {
                mysqli_query($koneksi, "UPDATE setup_buku SET nama_buku ='$_POST[nama]', deskripsi ='$_POST[deskripsi]', link ='$_POST[link]' WHERE id_buku = '$_POST[id]'");
            } else {
                move_uploaded_file($lokasi_file, "../img/$nama_file");
                mysqli_query($koneksi, "UPDATE setup_buku SET nama_buku ='$_POST[nama]', deskripsi ='$_POST[deskripsi]', link ='$_POST[link]', gambar='$nama_file' WHERE id_buku = '$_POST[id]'");
            }

            // Redirect ke halaman yang sama untuk mencegah pengiriman ulang form
            header("Location: setupBuku.php");
            exit();
        }

        else if (isset($_POST['Delete'])) {
            mysqli_query($koneksi, "DELETE FROM setup_buku WHERE id_buku = '$_POST[id]'");

            // Redirect ke halaman yang sama untuk mencegah pengiriman ulang form
            header("Location: setupBuku.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Beranda</title>
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php
            if ($level == 'admin') {
                include "nav.php";
            } else if ($level == 'operator') {
                include "nav_operator.php";
            } else {
                echo "Anda tidak punya hak access!! Hayoo!! sapa Loe??";
            }
        ?>

        <div id="page-wrapper">
            <div class="row col-lg-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Setup Buku</h3></div>
                    <div class="panel-body">
                        <div class="row col-lg-10">
                            <form name="setupBuku" action="setupBuku.php" method="post" enctype="multipart/form-data">
                            <?php
                                if (isset($_GET['id'])) {
                                    $comot_id = mysqli_query($koneksi, "SELECT * FROM setup_buku WHERE id_buku=" . $_GET['id']);
                                    $ngisi = mysqli_fetch_assoc($comot_id);
                                } else {
                                    // Inisialisasi variabel $ngisi jika $_GET['id'] tidak diatur
                                    $ngisi = array("id_buku" => null, "nama_buku" => "", "deskripsi" => "", "gambar" => "", "link" => "");
                                }
                            ?>
                                <fieldset>
                                    <input name="id" type="hidden" value="<?php echo $ngisi['id_buku']; ?>">
                                    <div class="form-group">
                                        <label>Nama Buku</label>
                                        <input class="form-control" name="nama" type="text" placeholder="Input nama Buku" 
                                            value="<?php echo $ngisi['nama_buku']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Buku</label>
                                        <textarea class="form-control" name="deskripsi"><?php echo $ngisi['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar</label>
                                        <input class="form-control" type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>Link Buku</label>
                                        <input class="form-control" name="link" type="text" placeholder="Input link Buku" 
                                            value="<?php echo $ngisi['link']; ?>" required>
                                    </div>
                                    <?php
                                        if (isset($_GET['id'])) {
                                    ?>
                                    <div class="btn-group">
                                        <input name="Tambah" type="submit" value="Tambah" class="btn" disabled>
                                    </div>
                                    <div class="btn-group">
                                        <input name="Edit" type="submit" value="Ubah" class="btn btn-info" data-hint="Klik untuk Hapus Post">
                                        <input name="Delete" type="submit" value="Hapus" class="btn btn-danger" data-hint="Klik untuk Edit Post">
                                    </div>
                                    <?php
                                        } else {
                                    ?>
                                    <div class="btn-group">
                                        <input name="Tambah" type="submit" value="Tambah" class="btn btn-success" data-hint="Klik untuk Tambah Post">
                                    </div>
                                    <div class="btn-group">
                                        <input name="Edit" type="submit" value="Ubah" class="btn" disabled>
                                        <input name="Delete" type="submit" value="Hapus" class="btn" disabled>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        <div class="row col-lg-10">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-left">#</th>
                                        <th class="text-left">Buku</th>
                                        <th class="text-left">Deskripsi Buku</th>
                                        <th class="text-left">Gambar</th>
                                        <th class="text-left">Link</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php
                                    $no = 1;
                                    $comot = mysqli_query($koneksi, "SELECT * FROM setup_buku ORDER BY id_buku");
                                    while ($isi_tbl = mysqli_fetch_assoc($comot)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $isi_tbl['nama_buku']; ?></td>
                                        <td><?php $x = substr($isi_tbl['deskripsi'], 0, 150); echo "$x..."; ?></td>
                                        <td>
                                        <?php
                                        if ($isi_tbl['gambar'] == '') {
                                            echo "No Image!";
                                        } else {
                                        ?>
                                        <img src="../img/<?php echo $isi_tbl['gambar']; ?> " width="90">
                                        <?php } ?>
                                        </td>
                                        <td><?php echo $isi_tbl['link']; ?></td>
                                        <td class="place-right">
                                        <a href="setupBuku.php?id=<?php echo $isi_tbl['id_buku']; ?>"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-wrench"></i></button></a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    
                </div>
                <!--.panel end -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>
    <!-- tinyMCE-->
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
            selector: "textarea",
            plugins: [
                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
            ],
    
            toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
            toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
            toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
    
            menubar: false,
            toolbar_items_size: 'small',
            image_advtab: true,
            style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
    
            templates: [
                    {title: 'Test template 1', content: 'Test 1'},
                    {title: 'Test template 2', content: 'Test 2'}
            ]
    });
    </script>
</body>

</html>
<?php
} else {
    session_destroy();
    header('Location: index.php?status=Silahkan Login');
}
?>

