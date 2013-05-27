(function($) {
	$(function() {
		var $fieldset = $('#webform-component-locations'),
			$items = $fieldset.find('.form-item'),
			$locations = $fieldset.find('input');

		// hide all but first
		$items.slice(1).hide();

		$locations.keyup(function() {
			var $this = $(this),
				index = $locations.index($this);

			// if not last, show next field
			if (index < $locations.length) {
				$items.eq(index + 1).show();
			}
		});
	});
}(jQuery));