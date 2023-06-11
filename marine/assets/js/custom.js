$(document).ready(function(){

    // Scrollify
    if ($(window).width() > 992) {
        $(function() {
                $.scrollify({
                    section : ".sections",
                    // sectionName : "name",
                    interstitialSection:"footer",
                    easing: "easeOutExpo",
                    scrollSpeed: 200,
                    // offset : 0,
                    // scrollbars: false,
                    // standardScrollElements: "",
                    // setHeights: true,
                    // overflowScroll: true,
                    // updateHash: true,
                    // touchScroll:true,
                    // afterResize:function(){
                    //   location.reload();
                    // }
                    // afterResize: function() {
                    //     if( $(window).width() > 769) {
                    //         $.scrollify.disable()
                    //     }else{
                    //         $.scrollify.enable()
                    //     }
                    // }
                });
            });
        }
    

    // Countdown
    var count = 10; // set count value
    var timerId; // set variable for setInterval method

    function startCountdown() {
        document.getElementById("start-btn").style.display = "none"; // hide start button
        document.getElementById("launch-btn").style.display = "block"; // show launch button
        timerId = setInterval(function() { // start countdown
            count--;
            document.getElementById("timer").innerHTML = count;
            if (count == 0) { // when timer reaches 0, stop countdown
                clearInterval(timerId);
                document.getElementById("timer").style.display = "none"; // hide the count down text
            }
        }, 1000);
    }


    // Video slider
    $('.content-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        speed: 2000,
        arrows: false,
        dots: true,
        infinite: false,
        vertical: true,
        verticalSwiping: true,
        mouseDrag  : false,
    });

    const slider = $(".content-slider");

    slider.on('wheel', (function(e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
    $(this).slick('slickNext');
    } else {
    $(this).slick('slickPrev');
    }

    }));


    // Services slider
    $('.service-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        speed: 1500,
        arrows: true,
        dots: false,
        infinite: true,
    });

    


  


});
