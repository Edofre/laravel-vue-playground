$(document).on('click', '.notification > button.delete', function () {
    $(this).parent().fadeOut();
    return false;
});