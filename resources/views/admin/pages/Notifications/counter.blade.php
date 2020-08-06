
<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('07ae158646bd85bde360', {
            cluster: 'eu',
            encrypted: true,
            forceTLS: true
        });
        var channel = pusher.subscribe('notification');

 
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
      channel.bind('App\\Events\\MyEvent', function(data) {
      alert(JSON.stringify(data));
             });
    
        channel.bind('pusher:notification', function(data) {
            alert(JSON.stringify(data));
        });
    channel.bind('pusher:subscription_succeeded', function() {
    alert('successfully subscribed!');

});
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>notification</code>
    with event name <code>my-event</code>.
</p>
</body>
