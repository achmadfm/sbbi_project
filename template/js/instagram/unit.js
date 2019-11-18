$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.1677ed0.3d4dd81965fa4ad2b8289142c0f36adf',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});