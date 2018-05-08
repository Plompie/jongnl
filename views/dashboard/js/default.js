$(function() {
	
	$.get('dashboard/xhrGetListings', function(o) {
		
		$.each(o, function(){
			$('#listInserts').append('<div>' + this.text + '&nbsp;' + '<a class="del" rel="'+ this.id +'" href="#">X</a></div>');
		});
		
        $(document).on("click", ".del", function() {

            var id = $(this).attr('rel');
            delItem = $(this);

            $.post("dashboard/xhrDeleteListing", {"id": id}, function (o) {
                delItem.parent().remove();
            });
         });
		
	}, 'json');
	
	
	
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		
		$.post(url, data, function(o) {
			$('#listInserts').append('<div>' + o.text + '&nbsp;' +'<a class="del" rel="'+ o.id +'" href="#">X</a></div>');		
		}, 'json');
		
		
		return false;
	});

});