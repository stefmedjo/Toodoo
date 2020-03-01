$(document).ready(function(){

    $('.datepicker').datepicker({
        format: 'mm/dd/yyyy',
        todayBtn: true,
        clearBtn: false,
        language: "en",
        calendarWeeks: true,
        todayHighlight: true,
        toggleActive: true,
        autoclose : true,
        startDate: moment().format("MM/DD/YYYY")
    }); 

    $('.delete').on('click', function(e){
        e.preventDefault()
        $('#modal-edit input[hidden]').attr("value",$(this).attr("item-id"))
        $('#modal-edit').modal("show")
    })



    $('.not-checked').on('click', function(e){
        e.preventDefault()

        const _this = $(this)
        const loader = $('img',$(this).parent())

        _this.hide();
        loader.show();

        $.ajax({
            url:$(this).attr('todo-path'),
            type: "POST",
            dataType: "json",
            data: {
                "id": _this.attr('todo-id')
            },
            async: true,
            success: function (data)
            {
                loader.hide()
                _this.show()
                _this.attr("name","checkmark-done-circle")
                _this.removeClass("not-checked")
                _this.addClass("text-success")
            },
            error : function(data){
                loader.hide()
                _this.show()
                $('.toast').toast({
                    animation : true, autohide : false, delay : 3000
                })
                $('.toast').toast('show')
            }
        })

    })

})