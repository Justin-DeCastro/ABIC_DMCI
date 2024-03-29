$(window).load(function() {

    var TIME_PER_SLIDE = 8000;
    var SLIDES_PER_PAGE = 4;

    var $slider = $('#cycle-slider');
    var $carousel = $('#cycle-carousel');
    var $controls = $('#cycle-controls');

    var totalSlides = 0;
    var currentIndex = 0;
    var timer = null;


    function getSliderSlide(index) {
        return $('#cycle-slider a[index=' + index + ']');
    }

    function getCarouselSlide(index) {
        return $('#cycle-carousel div[index=' + index + ']');
    }

    function goToSlide(index) {
        index = parseInt(index);
        getCarouselSlide(currentIndex).removeClass('active-carousel-slide');
        getCarouselSlide(index).addClass('active-carousel-slide');
        $carousel.cycle('goto', Math.floor(index / SLIDES_PER_PAGE));
        $slider.cycle('goto', index);
        currentIndex = index;
    }

    function nextSlide() {
        var nextIndex = currentIndex + 1;
        if (nextIndex % SLIDES_PER_PAGE === 0) {
            nextPage();
        } else {
            goToSlide(nextIndex % totalSlides);
        }
    }

    function prevPage() {
        $carousel.cycle('prev');
    }

    function nextPage() {
        $carousel.cycle('next');
    }

    function updateCurrentRange() {
        var currentSet = $('#cycle-carousel > .cycle-slide-active > div');
        var currentRange =
            ( parseInt(currentSet.first().attr('index')) + 1 ) +
            '-' +
            ( parseInt(currentSet.last().attr('index')) + 1 );
        $('#cycle-current-range').html(currentRange);
    }

    function play() {
        if (!timer) {
            timer = setInterval(nextSlide, TIME_PER_SLIDE);
        }
    }

    function pause() {
        if (timer) {
            clearInterval(timer);
            timer = null;
        }
    }


    // organize slides
    var $thumbnails = $('#cycle-carousel img');
    totalSlides = $thumbnails.length;
    $controls.html(' of ' + totalSlides);
    for (var i = 0; i < totalSlides; i += SLIDES_PER_PAGE) {
        $thumbnails.slice(i, i + SLIDES_PER_PAGE).wrapAll('<div>');
    }
    $thumbnails.wrap('<div class="carousel-slide">');
    $('#cycle-carousel .carousel-slide').each(function(index) {
        $(this).attr('index', index);
        var $img = $(this).find('img');
        $(this).append('<p>' + $img.attr('title') + '</p>');
        $img.removeAttr('title');
    });
    $('#cycle-slider a').each(function(index) {
        $(this).attr('index', index);
    });

    // initialize slider
    $slider.cycle({
        slides: '> a',
        log: false,
        timeout: 0
    });

    // initialize carousel
    $carousel.cycle({
        slides: '> div',
        log: false,
        timeout: 0,
        fx: 'scrollHorz'
    });

    // initialize controls
    $controls.prepend('<span id="cycle-current-range"></span>');
    $controls.prepend('<img id="cycle-prev-page" src="assets-v2/images/prev.png">');
    $controls.prepend('<img id="cycle-next-page" src="assets-v2/images/next.png">');
    updateCurrentRange();
    $carousel.on('cycle-after', function(event, options, outgoingSlide, incomingSlide) {
        goToSlide($(incomingSlide).find('.carousel-slide').first().attr('index'));
        updateCurrentRange();
    });
    $('#cycle-prev-page').click(prevPage);
    $('#cycle-next-page').click(nextPage);
    $carousel.hover(pause, play);
    $('#cycle-carousel .carousel-slide').mouseenter(function() {
        goToSlide($(this).attr('index'));
    });
    $('#cycle-carousel .carousel-slide').click(function() {
        window.location.href = getSliderSlide($(this).attr('index')).attr('href');
    });

    // start auto mode
    goToSlide(0);
    play();

    // load all remaining images
    var img = null;
    var src = null;
    for (var i = 0; i < totalSlides; i++) {
        img = getCarouselSlide(i).find('img');
        src = img.attr('data-src');
        if (src) {
            img.attr('src', src);
        }
        img = getSliderSlide(i).find('img');
        src = img.attr('data-src');
        if (src) {
            img.attr('src', src);
        }
    }

});
