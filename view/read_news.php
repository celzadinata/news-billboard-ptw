<?php include '../controller/read.php'; ?>

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
                                        <th scope="col">ID Pengumuman</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div style="width: 100%;">
                        <table class="fl-table">
                            <tbody>
                                <?php
                                if ($result != null) {
                                    foreach ($result as $key => $data) {
                                        echo '<form action="../controller/read.php" method="get">';
                                        echo '<tr>';
                                        echo '<th>' . $data->id . '</th>';
                                        echo '<input name="id" type="hidden" value="' . $data->id . '"/>';
                                        echo '<th>' . $data->judul . '</th>';
                                        echo '<th>' . $data->isi . '</th>';
                                        echo '<th><input class="waves-effect waves-light btn" type="submit" value="Update" /></th>';
                                        echo '</tr>';
                                        echo '</form>';
                                    }
                                } else {
                                    echo '<script>alert("Pengumuman tidak ditemukan")</script>';
                                }
                                ?>
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