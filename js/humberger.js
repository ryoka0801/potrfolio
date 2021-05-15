jQuery(function () {
	$('#trigger').on("click", function () {
		$( '#trigger>span' ).toggleClass("is-open");
		$( 'body' ).toggleClass("fixed");
		$( '#hum-list' ).toggleClass("slide");
    $( '.p-header' ).toggleClass("open");
	});
});
