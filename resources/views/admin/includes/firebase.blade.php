
<!-- FireBase -->
<script>
const messaging = firebase.messaging();
messaging.usePublicVapidKey("BFMhRQBJacJfQYsuUKm4suvBpIn9za8tEtpkM1JPqJC49IxpJX687Y5JeHVm6XlrrBCiRwSJwwOoC_nGUJUfYlw");

function sendTokenToServer(fcm_token){
    // console.log('token retrived' ,token);
const user_id='{{Auth::guard('admin')->user()->id}}';
    axios.post('/api/save-token',  {
        fcm_token ,user_id
    }).then(res => {
   console.log(res);
    });
}

function retrieveToken() {
    messaging.getToken().then((currentToken) => {
  if (currentToken) {
    sendTokenToServer(currentToken);
    // updateUIForPushEnabled(currentToken);
  } else {
alert('you should allow notification!');
  }
}).catch((err) => {
//   console.log('An error occurred while retrieving token. ', err);
console.log(err.message)
//   showToken('Error retrieving Instance ID token. ', err);
//   setTokenSentToServer(false);
});

}

retrieveToken();
messaging.onTokenRefresh(() =>{
    retrieveToken();

});
messaging.onMessage((payload)=>{
    console.log('Message Recived.')
    console.log(payload)
    location.reload(payload);

})

</script>
 <!-- FireBase -->
