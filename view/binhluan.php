<?php
ob_start();
session_start();
include "../dao/pdo.php";
include "../dao/binh-luan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../layout/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../layout/assets/css/fontawesome.css">
    <link rel="stylesheet" href="../layout/assets/css/animate.css">
    <link rel="stylesheet" href="../layout/assets/css/metisMenu.css">
    <link rel="stylesheet" href="../layout/assets/css/uikit.min.css">
    <link rel="stylesheet" href="../layout/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="../layout/assets/css/slick.css">
    <link rel="stylesheet" href="../layout/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../layout/assets/css/main.css">
    <!-- <style>
        body {
            margin: 0;
        }

        * {
            font-size: 1.5vw;
            color: #333;
        }

        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style> -->
</head>

<body>
    <div class="row mt-10">
        <div class="col-lg-6 col-sm-12 col-xs-12">
            <?php foreach ($dsbl as $bl) {
                extract($bl);
                // var_dump($bl);
                // die();
            ?>
                <div class="client-rv">
                    <div class="client-pic">
                        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" style="width: 20px" alt>
                    </div>
                    <div class="details">
                        <div class="name-rating-time">
                            <h3><?php echo $ten_nguoidung ?></h3>
                            <div class="time">
                                <span><?php echo $ngaybinhluan ?></span>
                            </div>
                        </div>
                        <div class="review-body">
                            <p><?php echo $noidung ?></p>
                        </div>
                    </div>
                </div>
            <?php
            } ?>





        </div> <!-- end col -->

        <div class="col-lg-6 col-sm-12 col-xs-12 review-form-wrapper">
            <div class="review-form">
                <h4>Here you can review the item</h4>
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div>
                        <input type="hidden" name="idpro" value="<?= $idpro ?>">


                    </div>

                    <div>
                        <textarea class="form-control" placeholder="Review *" name="noidung"></textarea>
                    </div>
                    <div class="rating-wrapper">

                        <div class="submit">
                            <input name="guibinhluan" class="thm-btn thm-btn__2 no-icon" type="submit" value="Gửi bình luận">
                                
                        </div>
                    </div>
                </form>
                <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['s_user']['id'];
            // $iduser = 5;
            $ngaybinhluan = date('Y-m-d H:i:s');;
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
            </div>
        </div>
    </div>
    
</body>

</html>
<?php ob_end_flush(); ?>