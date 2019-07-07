<h1>New Message from My CV App</h1>
<hr>

<h3>Sended by: </h3>
{{ $msg['name'] }} <a href="mailto">{{ $msg['email'] }}</a>

<h3>Subject:</h3>
<p>{{ $msg['subject'] }}</p>

<h3>Content:</h3>
<p>{{ $msg['content'] }}</p>