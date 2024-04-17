
    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
            color: gold;
        }
    </style>
    <section class="containerfull">
        <div class="container">
            <div class="boxright my-2">
                <h1>ĐÁNH GIÁ SẢN PHẨM</h1><br>
                <div class="containerfull mr30">

<form action="" method="post">
    <input type="hidden" name="idpro" value="<?php echo $_GET["id"]; ?>">
    <label for="noidung">Nội dung đánh giá:</label><br>
    <textarea id="noidung" name="noidung" rows="4" cols="50"></textarea><br>
    <div class="rating">
        <span id="star5" class="fs-2" onclick="setRating(5)">&#9733;</span>
        <span id="star4" class="fs-2" onclick="setRating(4)">&#9733;</span>
        <span id="star3" class="fs-2" onclick="setRating(3)">&#9733;</span>
        <span id="star2" class="fs-2" onclick="setRating(2)">&#9733;</span>
        <span id="star1" class="fs-2" onclick="setRating(1)">&#9733;</span>
    </div>
    <input type="hidden" name="rating" id="rating" value="0">
    <br>
    <input type="submit" name="submitReviews" value="Gửi đánh giá">
</form>

<script>
    function setRating(stars) {
        document.getElementById("rating").value = stars;
        for (var i = 1; i <= 5; i++) {
            var star = document.getElementById("star" + i);
            if (i <= stars) {
                star.style.color = "gold";
            } else {
                star.style.color = "black";
            }
        }
    }
</script>

                </div>
            </div>


        </div>
    </section>
