// Import and configure Firebase
import { initializeApp } from 'firebase/app';
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from 'firebase/auth';

const firebaseConfig = {
  apiKey: "AIzaSyDNZEx0NrCHAsIZFvoqO_6aG16ny5Nv9xU",
  authDomain: "katalis2024-9be71.firebaseapp.com",
  projectId: "katalis2024-9be71",
  storageBucket: "katalis2024-9be71.appspot.com",
  messagingSenderId: "282895946856",
  appId: "1:282895946856:web:2109b0af61579c7df5d7dd",
  measurementId: "G-G9PDTV7XSE"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

// Handle sign-up
document.getElementById('signup-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const email = document.getElementById('signup-email').value;
  const password = document.getElementById('signup-password').value;

  createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in 
      console.log('User registered:', userCredential.user);
      // Redirect or show a success message
    })
    .catch((error) => {
      console.error('Error registering:', error);
      // Handle errors here
    });
});

// Handle sign-in
document.getElementById('signin-form').addEventListener('submit', (e) => {
  e.preventDefault();
  const email = document.getElementById('signin-email').value;
  const password = document.getElementById('signin-password').value;

  signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in
      console.log('User signed in:', userCredential.user);
      // Redirect to dashboard or show a success message
      window.location.href = 'dashboard.html';
    })
    .catch((error) => {
      console.error('Error signing in:', error);
      // Handle errors here
    });
});
