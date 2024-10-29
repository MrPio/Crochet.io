@props(['images'=>[], 'height'=>'30rem'])
@vite('resources/css/partials/carousel.css')

<!-- Slideshow container -->
<div class="slideshow-container">
    @foreach($images as $image)
        <div class="mySlides fade">
            <img src="{{asset('storage/'.$image)}}" alt="" style="height: {{$height}};margin: auto; border-radius: 2%">
        </div>
    @endforeach

    <!-- Next and previous buttons -->
    <a class="prev invisible" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next invisible" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- The dots/circles -->
<div style="text-align:center; margin-top: 1rem">
    @for($i=1;$i<=sizeof($images);$i++)
        <span class="dot" onclick="currentSlide({{$i}})"
              style="background-image: url('{{asset('storage/'.$images[$i-1])}}'); background-size: cover">
        </span>
    @endfor
</div>

<script >
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length)
            slideIndex = 1
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    // setTimeout(loop,10000)
    // function loop(){
    //     plusSlides(1)
    //     setTimeout(loop,10000)
    // }
</script>

<script type="module">
    $(()=>{
        $('.slideshow-container').hover(
            () => $('.next, .prev').removeClass('invisible'),
            () => $('.next, .prev').addClass('invisible')
        );
    })
</script>