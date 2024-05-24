<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <script type="module">
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-auth.js";
 
  const firebaseConfig = {
    apiKey: "AIzaSyDJ0BZDl7HIcRlp800n5ZyxCeH-geBxnPw",
    authDomain: "meufirebaseauth.firebaseapp.com",
    projectId: "meufirebaseauth",
    storageBucket: "meufirebaseauth.appspot.com",
    messagingSenderId: "562663390578",
    appId: "1:562663390578:web:ecbe7958c9aae1846e71eb"
  };

  // Initialize Firebase
  window.fbApp = initializeApp(firebaseConfig);
  window.fbAuth = getAuth(window.fbApp);

        createUserWithEmailAndPassword(window.fbAuth, "italo.arruda@etec.sp.gov.br", "123456789")
        .then((userCredential) =>{
            var user = userCredential.user;
            console.log(user);
        })
        .catch((error) =>{
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorMessage);
        });
</script>
</head>
<body>
    <h1>To do List</h1>
    <?php
         include 'src/main.php'  ?> 
    <br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="btnLogin">Login</button><button id="btnRegUser" onclick="registrarUsuario()">Registrar Usuario</button>
</body>
</html>