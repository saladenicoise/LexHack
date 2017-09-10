$('#aaa').click(function() {
    var aaa =  $(this);
    aaa.prop('disabled', true);
    setTimeout(function() {
        aaa.prop('disabled', false);
    }, 3000);
});
