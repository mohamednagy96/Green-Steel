
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
            authEndpoint: 'pusher' // just a helper method to create a link
           
            
        });

        var channelName =  'notification' + socket_auth('notification', '128454.17417933'); // channel for the user id
        var channel = pusher.subscribe('notification');

        channel.bind('my-event', function (data)
        {
            app.addNotification(data); // send the notification in the JS app
        });
    </script>
</head>
<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>notification</code>
    with event name <code>my-event</code>.
</p>
<Button onClick={this.props.SendChat} waves='light' >Send</Button>

</body>
