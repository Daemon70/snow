// Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js";
  import { getFirestore, doc, getDoc, onSnapshot, setDoc } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-firestore.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyADccLoUCLFpTx5nnHav2OeqPB3JBNzYA8",
    authDomain: "touka-4b094.firebaseapp.com",
    projectId: "touka-4b094",
    storageBucket: "touka-4b094.firebasestorage.app",
    messagingSenderId: "439849229648",
    appId: "1:439849229648:web:575c84acec45c7748d2055"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const firestore = getFirestore();

  console.log("Conexion a firestore");

  const energia = doc(firestore, 'nrg/energy');
  async function readNrg() {
    const snapshot = await getDoc(energia);
    if( snapshot.exists() ) {
        const datos = snapshot.data();
        console.log('Datos' + JSON.stringify(datos));
        $('#corriente').html('Corriente: ' + datos.corriente);
        $('#frecuencia').html('Frecuencia: ' + datos.frecuencia);
        $('#resistencia').html('Resistencia: ' + datos.resistencia);
        $('#voltaje').html('Voltaje: ' + datos.voltaje);
    } else {
        console.log("no hay datos");
    }
    
  }

  function newData () {
    onSnapshot(energia, (docSnapshot) => {
        if( docSnapshot.exists() ) {
            const datos = docSnapshot.data();
            console.log('Datos actualizados: ' + JSON.stringify(datos));
            $('#corriente').html('Corriente: ' + datos.corriente);
            $('#frecuencia').html('Frecuencia: ' + datos.frecuencia);
            $('#resistencia').html('Resistencia: ' + datos.resistencia);
            $('#voltaje').html('Voltaje: ' + datos.voltaje);
            $('#electricidad').prop('checked' ,datos.electricidad?true:false);
        }
    });
  }

  function updateData () {
    const datos = {
        electricidad: $('#electricidad').prop('checked')
    }
    setDoc(energia, datos, {merge: true});
  }

  newData();

  window.up = updateData;
