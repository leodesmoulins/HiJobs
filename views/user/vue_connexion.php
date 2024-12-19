<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - HIJOBS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-full flex justify-center items-start">
<div class="h-full w-screen bg-slate-100 text-white z-0 flex items-center flex-col justify-center">
    <form action="index.php?section=connecter" method="post" class="flex flex-col h-1/2 w-1/4 rounded-xl bg-slate-300 bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-50 border border-gray-100">
                    <div class="flex flex-col text-gray-950 h-full items-center justify-center">
                            <h2 class="text-center police-1 text-4xl text-yellow-400">Connexion</h2>
                            <div class="flex flex-col items-center justify-center">
                            <input type="email" placeholder="myusername72" required class="mt-2 police-2 rounded-lg px-8 py-2 mb-2" name="email">
                            <input type="password" placeholder="yourpassword" required class="mt-2 police-2 rounded-lg px-8 py-2 mb-2" name="password">
                            </div>
                            <p> <a href="index.php?section=enregistrer" class="police-2 text-slate-950">Pas de compte ?</a> </p>
                            <input type="submit" value="Me Connecter" id="submit" class="px-6 py-1 mt-4 bg-yellow-400 rounded-lg police-1">
                        </div>
                    </div>
                </div>
        </form>
</body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
.police-1{
  font-family: "Bebas Neue", system-ui;
  font-weight: 400;
  font-style: normal;
}

.police-2{
    font-family: "Nunito", sans-serif;
  font-optical-sizing: auto;
  font-weight: auto;
  font-style: normal;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

    </style>