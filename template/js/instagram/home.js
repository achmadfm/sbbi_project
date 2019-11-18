$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4201110262',
		accessToken: '4201110262.1677ed0.3d4dd81965fa4ad2b8289142c0f36adf',
        target: 'instafeedhome',
        limit: 9,
        sortBy: 'most-recent',
		resolution: 'thumbnail',
		template: '<li><a href="{{link}}" target="_new"><span class="img-thumbnail d-block"><img class="img-fluid" width="70" height="70" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>'
	});
	feed.run();
});