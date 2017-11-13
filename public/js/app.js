$(document).ready(function() {

    // Carousel
    $("#carousel").owlCarousel({
        loop: true,
        items: 1,
        margin: 100,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX'
    });

    // Header
    $('#quality-sign').animate({opacity: 1}, 500).addClass("animated slideInDown");
    $('#top-contacts').animate({opacity: 1}, 500).addClass("animated slideInDown");
    $('#menu-left').animate({opacity: 1}, 500).addClass("animated slideInLeft");
    $('#logo').animate({opacity: 1}, 500).addClass("animated slideInRight");
    $('#menu-right').animate({opacity: 1}, 500).addClass("animated slideInRight");

    // Carousel
    $('#carousel').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated zoomIn") }, { offset: '90%' });

    // Enter text and blocks
    $('#enter-title').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated slideInDown") }, { offset: '80%' });
    $('#enter-text').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated slideInUp") }, { offset: '80%' });
    $('#enter-blocks').waypoint(function() {
        $('#enter-block-1').animate({opacity: 1}, 500).addClass("animated slideInUp");
        $('#enter-block-2').animate({opacity: 1}, 500).addClass("animated slideInUp");
        $('#enter-block-3').animate({opacity: 1}, 500).addClass("animated slideInUp");
    }, { offset: '80%' });

    // Wine Collections
    $('#wine-collection-title').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated slideInDown") }, { offset: '80%' });
    $('#wine-1').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated bounceIn")}, { offset: '80%' });
    $('#wine-2').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated bounceIn")}, { offset: '80%' });
    $('#wine-3').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated bounceIn")}, { offset: '80%' });
    $('#wine-4').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated bounceIn")}, { offset: '80%' });

    // Owner
    $('#owner-photo').waypoint(function() { $(this.element).animate({opacity: 1}, 500).addClass("animated fadeIn")}, { offset: '80%' });





















    if ($('#form_callback').length) {
        $('#form_callback').on('submit', function(e){
            ajaxFormSubmit(e, callbackSuccess);
        })
    }

    if ($('.popup-gallery').length) {
        $('.popup-gallery').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true
            },
            gallery: {
                enabled: true,
                preload: [1, 2],
                tPrev: 'Пердыдущая (клавиша влево)',
                tNext: 'Следующая (клавиша вправо)'
            },
            tLoading: 'Загрузка...'
        });
    }

    if ($('.popup-product').length) {
        $('.popup-product').magnificPopup({
            type: 'image',
            zoom: {
                enabled: true
            },
            tLoading: 'Загрузка...'
        });
    }

});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    // document.body.scrollTop = 0; // For Chrome, Safari and Opera
    // document.documentElement.scrollTop = 0; // For IE and Firefox

    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 500, 'swing');
}

function ajaxFormSubmit(e, successFunction)
{
    e.preventDefault();

    var form = e.target;

    // Место для отображения ошибок в форме
    var formStatus = $(form).find('.form-status');
    if (formStatus.length) {
        formStatus.html('');
    }

    // Анимированная кнопка при отправки формы
    var formButton = $(form).find('.form-button');
    if (formButton.length) {
        formButton.append(' <i class="fa fa-spinner fa-spin"></i>');
        formButton.prop('disabled', true);
    }

    $.ajax({
        method: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        success: function (data)
        {
            successFunction(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            if (formStatus.length && jqXHR.status == 422) // Если статус 422 (неправильные входные данные) то отображаем ошибки
            {
                var formStatusText = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><div class='text-uppercase'>" + (formStatus.data('errorText') ? formStatus.data('errorText') : 'Ошибка!') + "</div><ul>";

                $.each(jqXHR.responseJSON, function (index, value) {
                    formStatusText += "<li>" + value + "</li>";
                });

                formStatusText += "</ul></div>";
                formStatus.html(formStatusText);
                $('body').scrollTo(formStatus, 500);
            }
            else
            {
                sweetAlert("", "Ошибка при запросе к серсеру", 'error');
            }
        },
        complete: function (jqXHR, textStatus)
        {
            if (formButton.length)
            {
                formButton.find('i').remove();
                formButton.prop('disabled', false);
            }
        }
    });
}

function callbackSuccess(data)
{
    $('#callbackModal').modal('hide');
    showNoty(data.message, 'success');
}

function showNoty(message, type)
{
    noty({
        text: message,
        type: type,
        layout: 'topCenter',
        theme: 'relax',
        timeout: 5000,
        animation: {
            open: 'animated flipInX', // jQuery animate function property object
            close: 'animated flipOutX', // jQuery animate function property object
            easing: 'swing', // easing
            speed: 500 // opening & closing animation speed
        }
    });
}

function avatarSelected()
{
    startCropper($('#avatar_file')[0].files[0]);

    $('#avatar_cropper').show();
    $('#avatar_current').hide();
}

function startCropper(file)
{
    var $img = $('<img src="' + URL.createObjectURL(file) + '">');
    $('#avatar_wrapper').empty().html($img);

    $img.cropper({
        aspectRatio: 1,
        preview: $('.avatar-preview').selector,
        strict: true,
        guides: false,
        crop: function (e) {
            var json = [
                '{"x":' + e.x,
                '"y":' + e.y,
                '"height":' + e.height,
                '"width":' + e.width,
                '"rotate":' + e.rotate + '}'
            ].join();
            $('#avatar_data').val(json);
        }
    });
}

function cancelAvatarUpload()
{
    URL.revokeObjectURL($('#avatar_file')[0].files[0].url); // Revoke the old one

    $('#avatar_cropper').hide();
    $('#avatar_current').show();
}

function performSlideshow()
{
    var $slides = $('[data-slides]');

    if ($slides.length) {
        var current = 0;
        var images = $slides.data('slides');
        var count = images.length;
        var timer;

        if (count > 1) {
            var slideshow = function (imageIndex) {
                if (current >= count - 1) {
                    current = 0
                } else {
                    current++;
                }

                if (imageIndex) {
                    if (typeof timer !== "undefined") {
                        clearTimeout(timer);
                    }
                    current = imageIndex - 1;
                }

                $slides
                    .css('background-image', 'url("' + images[current] + '")')
                    .show(0, function () {
                        timer = setTimeout(slideshow, 10000);
                    });
            }

            if ($('.slider-controls').length) {
                for (var i = 0; i < count; i++) {
                    $('.slider-controls').append('<span data-index="' + (i+1) + '"></span>');
                }

                $('.slider-controls span').on('click', function () {
                    slideshow($(this).data('index'));
                })
            }

            slideshow(1);
        }
    }
}