<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/lity.js"></script>    
<script src="js/jquery.magnific-popup.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/jquery-backToTop.js"></script>
<script src="js/jquery-modal-video.min.js"></script>
<script>
    
</script>
<script>
  var Swipes = new Swiper('.swiper-container', {
    loop: true,
    autoplay: true,
    speed: 800,
    arrows:true,
    effect: 'slide',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    console.log(window.innerWidth);
  const productSwiper = new Swiper('.product-swiper', {
    loop: false,
    speed: 500,
    spaceBetween: 10,
    slidesPerView: 5,
    slidesPerGroup: 5, 
    navigation: {
      nextEl: '.product-button-next',
      prevEl: '.product-button-prev',
    },
    pagination: {
      el: '.product-pagination',
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        slidesPerGroup: 1
      },
      576: {
        slidesPerView: 2,
        slidesPerGroup: 2
      },
      768: {
        slidesPerView: 3,
        slidesPerGroup: 3
      },
      1200: {
        slidesPerView: 5,
        slidesPerGroup: 5
      }
    }
  });
});

</script>

<script>
  // Set target date to July 1st of the current or next year
  const today = new Date();
  const currentYear = today.getFullYear();
  const saleEnd = new Date(`${currentYear}-07-01T23:59:59`);

  // If today is already after July 1st, target next year's July 1st
  if (today > saleEnd) {
    saleEnd.setFullYear(currentYear + 1);
  }

  const countdownEl = document.getElementById("countdown");

  const updateCountdown = setInterval(() => {
    const now = new Date().getTime();
    const distance = saleEnd.getTime() - now;

    if (distance < 0) {
      clearInterval(updateCountdown);
      countdownEl.innerHTML = "Sale Ended!";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdownEl.innerHTML = `${hours} hours : ${minutes} mins : ${seconds} secs`;
  }, 1000);
</script>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#staticBackdrop').modal('show');
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#notify-addss').modal('show');
    });
</script>

</body>
</html>
