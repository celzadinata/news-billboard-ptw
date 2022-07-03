<?php
if (isset($_GET['update'])) {
    include '../controller/getOne.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pengumuman</title>
    <link rel="stylesheet" type="text/css" href="../static/css/create.css">
    <link rel="stylesheet" type="text/css" href="../static/css/view.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="wrapper">
        <?php include '../layout/sidebar.html' ?>
        <div class="main_content">
            <div class="header">PESBUK</div>
            <div class="button">
                <li><a href="#"><i></i>SHARE</a></li>
                <li><a href="#"><i></i>PRAKTIKUM TEKNOLOGI WEB</a></li>
            </div>
            <div class="info">
                <div class="frame1">
                    <div style="width: 100%;">
                        <form action="" method="get">
                            <table class="fl-table">
                                <tbody>
                                    <tr>
                                        <th>Masukan ID Pengumuman</th>
                                        <th>:</th>
                                        <th><input type="text" name="id" required></th>
                                        <th><input class="waves-effect waves-light btn" name="update" type="submit" value="Cari" /></th>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div style="width: 100%;">
                        <table class="fl-table">
                            <thead>
                                <tr class="center">
                                    <th>ID Pengumuman</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="../controller/edit.php" method="POST">
                                    <tr>
                                        <?php
                                        if (isset($_GET['update'])) {
                                            if ($result != null) {
                                                echo '<th>' . $result->id . '</th>';
                                                echo '<input name="id" type="hidden" value="' . $result->id . '"/>';
                                                echo '<th> <input name="judul" type="text" value="' . $result->judul . '"/></th>';
                                                echo '<th> <input name="isi" type="text" value="' . $result->isi . '"/></th>';
                                                echo '<th><input class="waves-effect waves-light btn" type="submit" value="Update" /></th>';
                                            } else {
                                                echo '<script>alert("Pengumuman tidak ditemukan")</script>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php include '../layout/boxnama.html' ?>
            </div>
        </div>
    </div>
</body>

</html>