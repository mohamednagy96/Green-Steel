importScripts('https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.9.3/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
var firebaseConfig = {
    apiKey: "AIzaSyAVi2Q8GFEYCnvRP1BEBA7kovUdND_P_-8",
    authDomain: "basic-website-cc3a0.firebaseapp.com",
    databaseURL: "https://basic-website-cc3a0.firebaseio.com",
    projectId: "basic-website-cc3a0",
    storageBucket: "basic-website-cc3a0.appspot.com",
    messagingSenderId: "28209079997",
    appId: "1:28209079997:web:2890530285c2b7692b79d4",
    measurementId: "G-WG6P5MJ917"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
 
//////////////////////////////////////////////////////////////////
messaging.setBackgroundMessageHandler(function(payload) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const {title,body} =payload.notification;
    // const notificationTitle = 'Background Message Title';
    const notificationOptions = {
      body,
    };
  
    return self.registration.showNotification(title,
      notificationOptions);
  });