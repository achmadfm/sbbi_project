$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.d3089bf.4c52ab49f20745a58b7e4f7bc83b7465',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});