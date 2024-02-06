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

    $(".quiz-thumbnail").click(function () {
        let modelId = $(this).attr('data-id');
        $(".quiz_select-model option[data-src='" + modelId + "']").prop("selected", true);
        $.ajax({
            url: '/get_carcases.php',
            method: 'post',
            dataType: 'html',
            data: {id: modelId},
            success: function(data){
                console.log(data);
            }
        });
    });
});