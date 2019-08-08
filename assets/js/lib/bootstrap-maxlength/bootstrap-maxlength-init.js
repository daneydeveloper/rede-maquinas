$(document).ready(function() {
    $('input.maxlength-simple').maxlength();

    $('input.maxlength-custom-message').maxlength({
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' of ',
        preText: 'You have ',
        postText: ' chars remaining.',
        validate: true
    });

    $('.maxlength').each(function(id){
        console.log('maxlength', id);
        $('input.maxlength').maxlength({
            alwaysShow: true
        });
    })

    $('textarea.maxlength-simple').maxlength({
        alwaysShow: true
    });
});
