$(document).ready( function() {
    $(".quiz_button").click(function(e) {
        e.preventDefault();
        let current_active = $(".quiz-slide-active");
        let next_active = current_active.next();
        if(next_active.length) {
            current_active.removeClass("quiz-slide-active");
            next_active.addClass("quiz-slide-active");
        }
    });

    $(".quiz-thumbnail-model").click(function () {
        $(".quiz-thumbnail-model").removeClass('model__checked');
        $(this).addClass('model__checked');
        let modelId = $(this).attr('data-id');
        $(".quiz_select-model option[data-src='" + modelId + "']").prop("selected", true);
        $.ajax({
            url: '/get_carcases.php',
            method: 'post',
            dataType: 'json',
            data: {id: modelId},
            success: function(data){
                let options = '';
                let cabins = '';
                $.each(data, function (index, value) {
                    //alert(value.id);
                   options += '<option value="'+value.title+'" data-src="'+value.id+'">'+value.title+'</option>';
                   cabins += '<div class="caption quiz-thumbnail quiz-thumbnail-cabin" data-id="'+value.id+'">\n' +
                       '                            <img src="'+value.image+'" alt="BMW" />\n' +
                       '                            <div class="h3"><span>'+value.title+'</span></div>\n' +
                       '                        </div>';
                });
                $(".quiz_select-abs").html(options);
                $(".quiz_select-cabin").html(cabins);
                /*console.log(data);*/
            }
        });
    });

    $(document).on('click', ".quiz-thumbnail-cabin" , function() {
        $(".quiz-thumbnail-cabin").removeClass('model__checked');
        $(this).addClass('model__checked');
        let cabinId = $(this).attr('data-id');
        $(".quiz_select-abs option[data-src='"+
            $.trim(cabinId) + "']").prop("selected", true);
    });

});