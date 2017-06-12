var page = require('webpage').create();
var url = "http://localhost/admin/get_idxxxx.php";

var pageGo = require('webpage').create();
pageGo.settings.resourceTimeout = 2000;
var host = "127.0.0.1";

phantom.addCookie({
        'name': 'user_id',
        'value': 'admin',
        'domain': host,
        'path': '/',
        'httponly': false
});

phantom.addCookie({
        'name': 'user_idx',
        'value': '2',
        'domain': host,
        'path': '/',
        'httponly': false
});

phantom.addCookie({
        'name': 'token',
        'value': 'ed83a1aa51fae85f7d8ebe7a040cf8c54d30db17',
        'domain': host,
        'path': '/',
        'httponly': false
});

page.open(url, function () {
	var jsonSource = page.plainText;
	var resultObject = JSON.parse(jsonSource);
	console.log(resultObject);
	
    resultObject.forEach(function (x) {
        var url = "http://"+host+"/admin/read.php?idx_token="+x.idx_token;
        console.log(url);
        pageGo.open(url, function(status) {
            console.log(status);
            //pageGo.close();
            });
        });

});

