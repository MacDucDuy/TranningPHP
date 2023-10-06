<script>
    $('.slider').slick({
        slidesToShow: 4, // Hiển thị 3 slide cùng lúc
        slidesToScroll: 1, // Duyệt slide mỗi lần
        autoplay: true, // Tự động chuyển slide
        autoplaySpeed: 2000,

        responsive: [
        {
            breakpoint: 1400, // Kích thước màn hình dưới 1400px
            settings: {
                slidesToShow: 1 
            }
        }
    ]
    });
</script>