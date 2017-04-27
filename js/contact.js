$(function() {
	$("#contact").submit(function (event) {
		errors = 0;

		// Check to see if the fields were filled in
		fields = Array("subject", "name", "email", "message");
		for (i = 0; i < fields.length; i++) {
			val = $("#" + fields[i]).val();
			$("#req" + fields[i]).toggle(!val);
			$("#" + fields[i]).toggleClass("error", !val);
			errors += !val ? 1 : 0;
		}

		return errors == 0;  // Only submit if there are no errors
	});
});
