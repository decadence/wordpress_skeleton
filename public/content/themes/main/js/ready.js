$(function()
{
	// привязка обработчиков

    // AJAX отправка почты
    $("#sender").click(function(){
        $(this).parent().submit();
    });

    $(document).on("submit", ".feed", function(){
        var form = this;

        if(!form.checkValidity()){
            alert('Не все обязательные поля заполнены или email имеет неверный формат');
            return false;
        }

        $.fancybox.showLoading();
        $("#sender").hide();
        
        $.ajax({
            url: "/sender/",
            type: "POST",
            dataType: "json",
            data: $(this).serialize(),
            success: function(data){
                $("#mail-status").html(data.message);

                if(data.status == 200){
                    form.reset();
                }

                $.fancybox.hideLoading();
                $("#sender").show();
            }
        });

        return false;
    });

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


