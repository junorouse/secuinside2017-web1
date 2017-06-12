var page = require('webpage').create();
var host = "127.0.0.1";
// host = 'localhost';
var url = "http://"+host+"/admin/read.php?idx_token=35a423a8ac88191dbc5f5875858992aaf6269985";
var timeout = 20000;

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

page.onNavigationRequested = function(url, type, willNavigate, main) {
    console.log("[URL] URL="+url);  
};
page.settings.resourceTimeout = timeout;
page.onResourceTimeout = function(e) {
    setTimeout(function(){
        console.log("[INFO] Timeout")
        phantom.exit();
    }, 1);
};
page.open(url, function(status) {
    console.log("[INFO] rendered page");
    setTimeout(function(){
        phantom.exit();
    }, 1);
});