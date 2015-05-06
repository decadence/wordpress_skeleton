$(function()
{
	// привязка обработчиков
});

/**
 * Выбор активного пункта меню
 * @param selector Селектор для меню
 */
function select_menu(selector){
    // выделение текущего URL
    var url = window.location.toString();
    var highlight_url = "";
    var current;

    $(selector + " li a").each(function () {
        var href = $(this).attr("href");

        if(url.indexOf(href) != -1 && href.length > highlight_url.length){
            highlight_url = href;
            current = this;
        }
    });

    $(current).parent().addClass("active");
}


