import { getFirestore, collection, getDocs } from 'firebase/firestore';

// Initialize Firebase and Firestore
const db = getFirestore();

// Fetch sensor data and display it
async function loadSensorData() {
  const querySnapshot = await getDocs(collection(db, 'sensors'));
  const dataDiv = document.getElementById('sensor-data');
  querySnapshot.forEach((doc) => {
    const data = doc.data();
    // Append sensor data to the page
    dataDiv.innerHTML += `<p>Temperature: ${data.temperature}</p>
                          <p>Humidity: ${data.humidity}</p>
                          <p>NPK Levels: ${data.npk}</p>
                          <p>Soil pH: ${data.soilPh}</p>`;
  });
}

loadSensorData();
