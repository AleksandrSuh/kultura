/**
 * Created by Сана on 18.10.2018.
 */
$(function () {
    $(document).on('click','#bigeye', function () {
       window.location = '?alt=1';
    });

    $('#horizontal-multilevel-menu>li').hover(function () {
        if(!$(this).find('ul').length) return;
        //console.log(obPage.asynchrony);
        if (obPage.asynchrony) return false;
        $(this).find('ul').slideDown(500, function () {
            obPage.asynchrony = false;
        });
        obPage.asynchrony = true;
    }, function () {
        if(!$(this).find('ul').length) return;
        $(this).find('ul').slideUp(200, function () {
            obPage.asynchrony = false;
        });
    });

    if($('.h_block').length)
    {
        var mh = 0,
            $blocks = $(".h_block");
        $blocks.each(function () {
            var h_block = parseInt($(this).height());
            if(h_block > mh) {
                mh = h_block;
            };
        });
        $blocks.height(mh);
    }



    $('.det_text table').removeAttr('style');
    $('.det_text table').attr('cellspacing','2');
    $('.det_text table tr:eq(0) td').attr('valign','top');
    $('.det_text td, .det_text th, .det_text td span, .det_text th span').removeAttr('style').removeAttr('class').removeAttr('width');
})

$(document).on('click', '.api-rules-label', function () {
    var $chb = $(this).prev();
    if($chb.is(':checked'))
    {
        $chb.removeAttr('checked');
    }
    else
    {
        $chb.attr('checked','checked');
    }
});