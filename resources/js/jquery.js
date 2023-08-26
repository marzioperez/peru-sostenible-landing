import 'slick-carousel';
import {all} from "axios";
$(document).ready(function(){

    let header = $('header');
    let menu_icon = $('header .menu-icon');
    let menu_side = $('.menu-side');
    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            header.addClass('header-fixed');
            if (!menu_side.hasClass('pt-12')) {
                menu_side.find('.menu-options').addClass('pt-12');
            }
        } else {
            header.removeClass('header-fixed');
            menu_icon.removeClass('active');
            if (!menu_side.hasClass('pt-12')) {
                menu_side.find('.menu-options').removeClass('pt-12');
            }
        }
    });

    menu_icon.on('click', function (){
        if (!header.hasClass('header-fixed') && !header.hasClass('with-bg')) {
            $(this).toggleClass('active');
        }
        menu_side.toggleClass('active');
    });

    $('.class-speaker-row').hover(function (){
        let $this = $(this);
        $('img.speaker-image').attr('src', $this.data('speaker-image-url'));
    });

    $('.slick-speakers').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $(".modal-close").on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('overflow-hidden');
        $(".modal").hide();
    });

    $('.panelist-group-header .show').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $(this).toggleClass('active');
        $('.panelist-group-detail.item-' + id).toggleClass('active');
    });

    $('.btn-change-day').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $('.btn-change-day').removeClass('active');
        $(this).toggleClass('active');
        $('div.schedule-day').removeClass('active');
        $('div.schedule-day.item-' + id).toggleClass('active');
    });

    $('.open-allie-modal').on('click', function () {
        let allie = $(this).data('allie');
        let modal_allie = $(".modal-allie");

        modal_allie.find('.modal-allie-name').text(allie['name']);
        modal_allie.find('.modal-allie-biography').html(allie['biography']);
        modal_allie.find('.modal-allie-image').css('background-image', 'url('+ allie['image_url'] +')');

        let modal_allie_social = modal_allie.find('.modal-allie-social');
        modal_allie_social.find('a').hide();
        if(allie['facebook_url']) {
            modal_allie_social.find('a.facebook').show().attr('href', allie['facebook_url']);
        }

        if(allie['linkedin_url']) {
            modal_allie_social.find('a.linkedin').show().attr('href', allie['linkedin_url']);
        }

        if(allie['instagram_url']) {
            modal_allie_social.find('a.instagram').show().attr('href', allie['instagram_url']);
        }

        if(allie['web_url']) {
            modal_allie_social.find('a.web').show().attr('href', allie['web_url']);
        }

        if(allie['twitter_x_url']) {
            modal_allie_social.find('a.twitter-x').show().attr('href', allie['twitter_x_url']);
        }

        modal_allie.find('.modal-allie-embed').hide().html('');
        if (allie['iframe']) {
            modal_allie.find('.modal-allie-embed').show().html(allie['iframe']);
        }

        $('body').toggleClass('overflow-hidden');
        modal_allie.show();
        console.log(allie);
    });

    $('.open-modal-speaker').on('click', function (){
        let speaker = $(this).data('speaker');
        let modal_speaker = $(".modal-speaker");

        modal_speaker.find('.modal-speaker-name').text(speaker['name']);
        modal_speaker.find('.modal-speaker-position').text(speaker['position']);
        modal_speaker.find('.modal-speaker-biography').html(speaker['biography']);
        modal_speaker.find('.modal-speaker-image').css('background-image', 'url('+ speaker['image_url'] +')');

        let modal_speaker_social = modal_speaker.find('.modal-speaker-social');
        modal_speaker_social.find('a').hide();
        if(speaker['facebook_url']) {
            modal_speaker_social.find('a.facebook').show().attr('href', speaker['facebook_url']);
        }

        if(speaker['linkedin_url']) {
            modal_speaker_social.find('a.linkedin').show().attr('href', speaker['linkedin_url']);
        }

        if(speaker['twitter_url']) {
            modal_speaker_social.find('a.twitter').show().attr('href', speaker['twitter_url']);
        }

        if(speaker['instagram_url']) {
            modal_speaker_social.find('a.instagram').show().attr('href', speaker['instagram_url']);
        }

        if(speaker['web_url']) {
            modal_speaker_social.find('a.web').show().attr('href', speaker['web_url']);
        }

        if (speaker['activities'].length > 0) {
            let modal_speaker_activities_list = modal_speaker.find('.modal-speaker-activities-list');
            $.each(speaker['activities'], function (index, item) {
                modal_speaker_activities_list.append(
                    '<div class="row">' +
                        '<div class="column column-1">' + item['title'] +'</div>' +
                        '<div class="column column-2">' + item['start'].slice(0, -3) +' a ' + item['end'].slice(0, -3) + '</div>' +
                        '<div class="column column-3"></div>' +
                    '</div>'
                );
            });
            modal_speaker_social.find('modal-speaker-activities').show();
        } else {
            modal_speaker_social.find('modal-speaker-activities').hide();
        }

        $('body').toggleClass('overflow-hidden');
        modal_speaker.show();
    });

    $(".open-modal").on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('overflow-hidden');
        $("#" + $(this).data('modal')).show();
    });
});
