

// Place event code here.
// Use "Add Action" button to add code snippets.
function hbutton(gID) {
	var id = gID;
	var button = $("[id^=" + id + "]");
	Runner.addDisabledClass(button);

	$('input[name="selection[]"], input[id^=chooseAll]').change(function() {
		var c = $('input[name="selection[]"]:checked').length;
		if (c>0) 
			Runner.delDisabledClass(button);
		else
			Runner.addDisabledClass(button); 
	});
}