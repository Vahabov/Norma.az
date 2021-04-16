$(document).ready(function () {
    $('.main-slider .owl-carousel').owlCarousel({
        loop: true,
        dost: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 7000,
        items: 1,
        responsive: {
            0: {
                stagePadding: 20
            },
            768: {
                stagePadding: 0
            }
        }
    });

    $('.selectpicker').selectpicker();

    $('.last-news .owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        responsiveClass: true,
        items: 3,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            700: {
                items: 2,
                dots: true
            },
            1000: {
                items: 3,
                dots: false
            }
        }
    });

    $(".logo-slide .owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        autoplayTimeout: 3000,
        smartSpeed: 3000,
        animateIn: 'linear',
        animateOut: 'linear',
        responsive: {
            0: {
                items: 2
            },
            500: {
                items: 2
            },
            700: {
                items: 3
            },
            1000: {
                items: 4
            },
            1300: {
                items: 5
            },
            2000: {
                items: 5
            }
        }
    });

    $('.navbar-toggle').click(function () {
        $('.collapse-menu').toggle();
        $('.overlay-menu').toggle();
    });

    $('.close-menu').click(function () {
        $('.navbar-toggle').trigger('click');
    });

    $('.overlay-menu').click(function () {
        $('.navbar-toggle').trigger('click');
    });

    $('[data-toggle="tooltip"]').tooltip();


    function append_data() {
        var i,
            resultData = ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'İyun', 'İyul', 'Avqust', 'Sentyabr', 'Oktyabr', 'Noyabr', 'Dekabr'];
        $.each(resultData, function (index, key) {
            $('#month').append($('<option></option>').val(++index).html(key));
        });
        for (i = 1; i < 31; i++) {
            $('#day').append($('<option>', {
                value: i,
                text: i
            }));
        }
        for (i = 1900; i < 2018; i++) {
            $('#year').append($('<option>', {
                value: i,
                text: i
            }));
        }
        $('.selectpicker').selectpicker('refresh');
    }

    append_data();

    if ($('div').hasClass('panel-mobile')) {
        $(window).scroll(function () {
            if ($(this).width() < 991) {
                var window_top = $(window).scrollTop();
                var footer_top = $("footer").offset().top;
                var div_height = $(".content .left-side.block").innerHeight();
                if (window_top + div_height > footer_top)
                    $('.content .left-side.block').removeClass('fixed');
                else if ($(window).scrollTop() > 190) {
                    $('.content .left-side.block').addClass('fixed');
                } else {
                    $('.content .left-side.block').removeClass('fixed');
                }
            }
        });
    }
    if ($('section').hasClass('fixed-class')) {
        $('.right-top,.right-bottom').wrapAll('<div class="childDiv"></div>');
        if (window.matchMedia('(min-width: 991px)').matches) {
            var el = $('.childDiv'),
                rightCol_width = $('.fixed-right').width(),
                stickyTop = $('.childDiv').offset().top,
                stickyHeight = $('.childDiv').height();

            $(window).scroll(function () {
                var limit = $('footer#main-footer').offset().top - stickyHeight - 20;
                var windowTop = $(window).scrollTop();

                if (stickyTop < windowTop) {
                    el.css({
                        position: 'fixed',
                        top: 0,
                        width: rightCol_width
                    });
                } else {
                    el.css('position', 'static');
                }
                if (limit < windowTop) {
                    var diff = limit - windowTop;
                    el.css({
                        top: diff
                    });
                }

            });
        }
    }

    $('.rules .panel').on("click", function () {
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
        $(this).siblings().removeClass('remove-shadow');
        if ($(this).hasClass('active')) {
            $(this).prev().addClass('remove-shadow');

        }
    });

    if ($('window').width() < 767) {
        $('.offer-quiz .active').on("click", function () {
            $('.quiz.properties .col-md-8').css({
                'right': '0',
                'left': '0'
            });
        });

        $('.quiz-right span').on("click", function () {
            $('.quiz.properties .col-md-8').css({
                'right': '-2000px',
                'left': 'auto'
            });
        });
    }

    $("#fileinput").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });

    function imageIsLoaded(e) {
        var picture = '<img src="' + e.target.result + '"  class="img-responsive">';
        $(".preview").empty().append(picture);
    }

    $('.video-modal').on('hidden.bs.modal', function () {
        var src = $(this).find('iframe').attr('src');
        $(this).find('iframe').attr('src', '');
        $(this).find('iframe').attr('src', src);
    });
    /* $('.video-modal .modal-header .close').click(function(e) {
         e.preventDefault();
         $(this).parents('.video-modal').find('.modal-body iframe').attr('src', '');
     });*/

    var checked = false;
    $('#checkbox1').on('click', function () {
        checked = !checked;
        $('#acceptRegister').attr('disabled', !checked);
    });

    $opened = localStorage.getItem('shown');
    if ($opened && $opened !== '') {

    } else {
        setTimeout(function () {
            $('#exampleModal').modal('show');
        }, 2500);
        localStorage.setItem('shown', 'true');
    }

    $("#phoneInput").inputmask({ "mask": "(099)999-99-99" });



    // NEW JS CODE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    SVGInject(document.querySelectorAll("img.injectable"));


    $(document).on('click', '.btnTab', function () {
        let thisDataId = $(this).attr('data-id');
        $(".tab_law").hide();
        $(".tab_law").removeClass('active');
        $('.btnTab').removeClass('active')
        $(this).addClass('active');
        $(`#${thisDataId}`).show();
    })

});