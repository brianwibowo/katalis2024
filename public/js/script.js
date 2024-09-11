// Import Firebase Auth
import { getAuth, signInWithEmailAndPassword } from 'firebase/auth';

// Initialize Firebase Auth
const auth = getAuth();

// Handle form submission
document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    try {
        await signInWithEmailAndPassword(auth, email, password);
        window.location.href = 'dashboard.html'; // Redirect to dashboard
    } catch (error) {
        document.getElementById('errorMessage').innerText = error.message;
    }
});
