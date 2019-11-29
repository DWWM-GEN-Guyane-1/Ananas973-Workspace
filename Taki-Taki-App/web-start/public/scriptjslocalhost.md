/__/firebase/init.js

if (typeof firebase === 'undefined') throw new Error('hosting/init-error: Firebase SDK not detected. You must include it before /__/firebase/init.js');
firebase.initializeApp({
  "projectId": "taki-taki-app",
  "databaseURL": "https://taki-taki-app.firebaseio.com",
  "storageBucket": "taki-taki-app.appspot.com",
  "locationId": "us-central",
  "apiKey": "AIzaSyBb-D7_Fzq4VhZpXOywua14sj8iy2bGEZU",
  "authDomain": "taki-taki-app.firebaseapp.com",
  "messagingSenderId": "240119343418"
});
