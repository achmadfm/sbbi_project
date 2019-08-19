$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.d3089bf.979b142d0e474a0487b9ea1a76129093',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});