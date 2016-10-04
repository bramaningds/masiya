$('.btn-remove').on('click', function()
{
	if (window.confirm("Are you sure to remove?"))
	{
		var formId = '#' + $(this).data('form');
		$(formId).submit();
	}
	
	return false;
});