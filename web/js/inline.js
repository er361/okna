/**
 * Created by Erbol on 22.09.2016.
 */
function zsheight(div) { $(function() {
    var h = 0;
    $(div).each(function() {
        if ($(this).height() > h) {
            h = $(this).height();
        } });
    $(div).height(h);
}); }

$(document).ready(function() {
    zsheight('.our-wok-body');
});

$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});