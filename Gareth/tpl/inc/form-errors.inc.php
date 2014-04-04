<div id="form-errors" class="bs-callout bs-callout-danger col-xs-5">
	<h4>Please fix the following errors and re-submit the form</h4>
	<ul>
		<?php foreach ($errors as $error) printf('<li>%s</li>', $error); ?>
	</ul>
</div>
