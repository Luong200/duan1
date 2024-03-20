
</style>
<?php
    $html_dssp_new=showsp($dssp_new);
    $html_dssp_best=showsp($dssp_best);
    $html_dssp_view=showsp($dssp_view);
?>
<div class="containerfull">
        <!-- <img src="layout/images/banner.png" alt="" height="350" > -->
        <div class="slideshow-container" >
            <div class="mySlides fade">       
                <img src="./layout/images/slide1.jpg" style="height: 400px; object-fit: cover;" >      
            </div>
            <div class="mySlides fade">        
                <img src="./layout/images/slide2.jpg" style="height: 400px; object-fit: cover;" >         
            </div>
            <div class="mySlides fade">           
                <img src="./layout/images/slide3.jpg" style="height: 400px; object-fit: cover;" >          
            </div>
        </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
    </div>

    <section class="containerfull">
        <div class="container">
            <h1>SẢN PHẨM HOT</h1><br>
            <div class="containerfull">
                <div class="box50 mr15">
                    <img src="layout/images/banner2.jpg" alt="">
                </div>
                <?=$html_dssp_best?>
            </div>
            
            <div class="containerfull mr30">
                <h1>SẢN PHẨM MỚI</h1><br>
                <?=$html_dssp_new;?>
            </div>
            
            <div class="containerfull mr30">
                <h1>SẢN PHẨM NHIỀU NGƯỜI XEM</h1><br>
                <?=$html_dssp_view?>
            </div>

        </div>
    </section>

    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
