<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById("myModal1");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var a = document.getElementById("SizeChart");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
    modal.style.display = "none";
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id05');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('sizechartmodal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script src="{{asset('assets/js/login.js')}}"></>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('assets/css/bootstrap-4.1.2/popper.js')}}"></script>

<script src="{{asset('assets/css/bootstrap-4.1.2/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>

<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>

<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>

<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>

<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>

<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>

<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>

<script src="{{asset('assets/plugins/progressbar/progressbar.min.js')}}"></script>

<script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>

<script src="{{asset('assets/js/category.js')}}"></script>

<script src="{{asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('assets/plugins/Isotope/fitcolumns.js')}}"></script>

<script src="{{asset('assets/plugins/flexslider/jquery.flexslider-min.js')}}"></script>

<script src="{{asset('assets/js/product.js')}}"></script>