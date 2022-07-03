<?php
include '../controller/view_hashtag.php';
if (isset($_POST['Submit'])) {
    include '../controller/post.php';
    // foreach ($_POST['hashtag'] as $selected) {
    //     echo $selected . "</br>";
    // }
    header("Location: list_news.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengumuman</title>
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
                        <form action="" method="post">
                            <table class="fl-table">
                                <tbody>
                                    <tr>
                                        <th>Judul</th>
                                        <th>:</th>
                                        <th><input type="text" name="judul" required maxlength="250" /></th>
                                    </tr>
                                    <tr>
                                        <th>Isi pengumuman</th>
                                        <th>:</th>
                                        <th><input type="text" name="isi" required /></th>
                                    </tr>
                                    <tr>
                                        <th>Hashtag</th>
                                        <th>:</th>
                                        <th style="text-align: left;">
                                            <?php foreach ($result as $data) : ?>
                                                <label>
                                                    <input type="checkbox" name="hashtag[]" value="<?= $data->nama_hashtag ?>">
                                                    <span><?= $data->nama_hashtag ?></span><br>
                                                </label>
                                            <?php endforeach; ?>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>
                                            <input class="waves-effect waves-light btn left" name="Submit" type="submit" value="Submit" />
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
                <?php include '../layout/boxnama.html' ?>
            </div>
        </div>
    </div>
</body>

</html>