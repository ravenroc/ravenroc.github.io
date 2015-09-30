$(function(){

	$(document).on("click", "a[href='#'], a[href='']", function(e){  e.preventDefault();  });
	$(document).on("click", "a[rel='external']", function(e){  e.preventDefault(); window.open($(e.currentTarget).attr("href"), "_blank");  });

	$(document).on("click", "nav.main .nav-item", function(e){
		e.preventDefault();
		$("main > section, nav.main a").removeClass("active");
		var sec = $(e.currentTarget).addClass("active").data("section");
		$("main > section."+sec).addClass("active");
	});

});