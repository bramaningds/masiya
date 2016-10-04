$('.form-action').on('click', function()
{
	var formSelector = 'form[name="' + $(this).data('form-name') + '"]';

	$(formSelector).first().submit();

	return false;
});