# Meridian-Finance

## Bundles the following packages together
### Refer to the links below for their individual docs on how to use them. ( except for Maonster Form Helpers )
<ul>
	<li>
		<a href="https://github.com/twbs/bootstrap" target="_blank">Twitter Bootstrap</a>
	</li>
	<li>
		<a href="https://github.com/FortAwesome/Font-Awesome" target="_blank">Font Awesome</a>
	</li>
	<li>
		<a href="https://github.com/limonte/sweetalert2" target="_blank">Sweet Alert 2</a>
	</li>
	<li>
		<a href="https://github.com/jackocnr/intl-tel-input" target="_blank">International Telephone Input</a>
	</li>
	<li>
		<a href="https://github.com/eternicode/bootstrap-datepicker" target="_blank">Bootstrap Datepicker</a>
	</li>
	<li>
		<a href="https://github.com/RobinHerbots/Inputmask" target="_blank">Inputmask</a>
	</li>
	<li>
		<a href="http://detectmobilebrowser.com/" target="_blank">Detect Mobile Browser</a>
	</li>
	<li>
		<a href="#" target="_blank">Maonster Form Helpers</a>
	</li>
</ul>

## File Directory
All scripts, styles, plugins/vendors files are inside the 'assets' folder.

- JS files are located in assets/js/
  - assets/js/script.js is the main js file that handles the form. 
    here you can edit how the data will be passed to the server. (via AJAX or form submit)
    
    *NOTE: If using AJAX method, variable 'dataToSend' at line 66 in assets/js/script.js is a serialized array of all data within the form. you can either send it directly using jQuery $.ajax() method or manipulate the data before sending it to the server file handler.
    
- Main css file is located in assets/css/style.css
- PHP Server side ajax file is located in assets/php/ajax.php. (handles the ajax request)

## Facebook Pixel Event
- Pixel event fired when clicking the button start on the initial popup screen. It is located in assets/js/script.js at line 167.

## Maonster Form Helpers
The form helper that bind events keyup,keypress,change,blur on an element and validates it's value depending on the class names given.

### Dependencies:
<ul>
	<li>
		<a href="https://github.com/twbs/bootstrap" target="_blank">Twitter Bootstrap</a>
	</li>
	<li>
		<a href="http://detectmobilebrowser.com/" target="_blank">Detect Mobile Browser</a>
	</li>
</ul>

*NOTE: It will not work without the two dependencies above.

For this plugin to work, the layout should be:

```html
<div class="form-group">
	<label class="ontrol-label">Email</label>
	<div>
		<input type="text" class="form-control" />
	</div>
</div>
```

For required fields add class name 'required' to an element.

```html
<div class="form-group">
	<label class="ontrol-label">Email</label>
	<div>
		<input type="text" class="form-control required" />
	</div>
</div>
```

To Validate fields add class name eq. 'maonster-email' to an element for email validation.

```html
<div class="form-group">
	<label class="ontrol-label">Comments</label>
	<div>
		<input type="text" class="form-control required maonster-email" />
	</div>
</div>
```

Finally, for NEXT and BACK functionality. add class name 'back' for back button and 'next' for next button.

### List of class names for validation
*NOTE: for using maonster-phone class, the international phone number plugin should be included as it is needed for the validation for phone numbers.
<ul>
	<li>
		maonster-name - for letters only with spaces
	</li>
	<li>
		maonster-number - for numbers only with spaces
	</li>
	<li>
		maonster-alpha-nospace - for letters only with no spaces
	</li>
	<li>
		maonster-number-nospace - for numbers only with no spaces
	</li>
	<li>
		maonster-alphanum - for letters and numbers with spaces
	</li>
	<li>
		maonster-alphanum-nospace - for letters and numbers with no spaces
	</li>
	<li>
		maonster-phone - for phone numbers
	</li>
	<li>
		maonster-email - for email
	</li>
	<li>
		maonster-address - for letters, numbers and special characters
	</li>
</ul>