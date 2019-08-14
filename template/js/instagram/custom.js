$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.d3089bf.979b142d0e474a0487b9ea1a76129093',
        target: 'instafeed',
        sortBy: 'most-recent',
		resolution: 'low_resolution',
		template: '<li class="col-md-3 col-sm-6 col-xs-12 isotope-item instagram"><strong>From API Instagram</strong><div class="image-gallery-item"><div class="image-gallery-item"><a href="{{link}}" target="_new" ><span class="thumb-info thumb-info-centered-info"><span class="thumb-info-wrapper"><img src="{{image}}" class="img-responsive" alt="" /><span class="thumb-info-title"><span class="thumb-info-type">Click For Details</span></span></span></span></a></div></div></li>'
	});
	feed.run();
});