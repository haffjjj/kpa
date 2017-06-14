icScript=jQuery.noConflict();
icScript(function(){
	icScript("#bulan").click(function(){
		icScript.ajax({
            type: "POST",
            url: "ajaxbulan/"+this.value,
            success: function(data) {
            	icScript("#nis").html(data);
            },
            error: function() {
                console.log('ic_error: data nis');
            }
        });
	});
});