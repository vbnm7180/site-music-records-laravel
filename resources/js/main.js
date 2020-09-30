$('.record__change-btn').on('click', function() {
    $('.record__admin-form').removeClass('admin-form__none').addClass('admin-form__block');
});

$('.close__icon').on('click', function() {
    $('.record__admin-form').removeClass('admin-form__block').addClass('admin-form__none');
});