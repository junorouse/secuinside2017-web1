from requests import get
from json import loads
from os import system
from time import sleep

while True:
    c = get("http://localhost/admin/get_idxxxx.php")
    data = loads(c.content)
    for x in data:
        print x['idx_token']
        system("/var/www/html/ppppppppp3/p/bin/phantomjs /var/www/html/ppppppppp3/go.js {}".format(x['idx_token']))
    sleep(2)

