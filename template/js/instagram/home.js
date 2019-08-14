$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.d3089bf.979b142d0e474a0487b9ea1a76129093',
        target: 'instafeedhome',
        limit: 5,
        sortBy: 'most-recent',
		resolution: 'thumbnail',
		template: '<li><a href="{{link}}"><span class="img-thumbnail d-block"><img class="img-fluid" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>'
	});
	feed.run();
});