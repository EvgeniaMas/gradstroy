var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;
var count = 1;
var current_fs = $('.question');
var base_question = $('.double_section');

$("#previous").click(function() {
    var previous_fs = $(current_fs).prev();
    $(current_fs).removeClass('question');
    previous_fs.addClass('question');
    current_fs.hide('slow');
    previous_fs.fadeIn(800);
    current_fs = previous_fs;
    count--;
    if (count == 1) {
        $('#previous').hide('slow');
    }
    if (count < 2) {
        $('#previous').hide('slow');
    }         
    
});


$('#close_test_form').click(function() {
$('#blindLayer').css('display', 'none');    
$(current_fs).hide('fast');
$(base_question).show('fast');
$('.count').css('opacity', 1);
current_fs= base_question;
count = 1;

}
);



$('.checked_answer').click(function() {
    var next_fs = current_fs.next();
    $(current_fs).removeClass('question');
    next_fs.addClass('question');
    current_fs.hide('slow');
    next_fs.fadeIn(800);
    count++;
    if (count > 1) {
        $('#previous').css('display', 'inline-block');
        $('#previous').fadeIn(800);
        $('.count').css('opacity', 0);
    }
    if (count > 4) {       
        $('#previous').hide('fast');
        $('#blindLayer').css('display', 'block');      
    }
 
    current_fs = next_fs;
});
$(document).ready(function() {
    $('.get_offer').click(function() {
        var scroll_el = $(this).attr('href');
        if ($(scroll_el).length != 0) {
            $('html, body').animate({
                scrollTop: $(scroll_el).offset().top
            }, 2000);
        }
        return false;
    });
});
$(document).ready(function() {
    function a() {
        $("body").scrollspy({
            target: ".scroll-nav",
            offset: 100
        })
    }
    $(function() {
        $(window).scroll(a), a()
    })
}), $(document).ready(function() {
    $("body").on("click", '[href*="#"]', function(a) {
        var b = 100;
        $("html,body").stop().animate({
            scrollTop: $(this.hash).offset().top - b
        }, 1e3), a.preventDefault()
    })
})