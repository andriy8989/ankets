
$('#hide_cols').click(function (){
    
});


$('.administrator-table tbody td').click(function (){
    var colum = $(this).children().attr('class');
    
    var action = 'update';
    if($(this).children().html() === ''){
        action = 'create';
    }
    if(colum){
        colum = colum.substring(4);
    }else{
        colum = 0;
    }
    var anket_id = $(this).parent().data('key');
    
    $('#modal').modal('show')
        .find('#modalContent')
        .load('/index.php/anket-colum/'+action+'?anket_id='+anket_id+'&colum='+colum);
});

function submitform(id) {
    $('form#' + id).on('beforeSubmit', function(e) {
        var form = $(this);
        $.post(
            form.attr("action"),
            form.serialize()
        )
        .done(function(result) {
            form.parent().html(result);
        })
        .fail(function() {
            console.log("server error");
        });
        return false;
    }).on('submit', function(e){
        e.preventDefault();
    });
}


