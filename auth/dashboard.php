 <?php
    include_once 'auth.php';

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Auth System</title>
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body>

     <div class="w-full h-screen flex items-center justify-center">
         <div class="w-2/5  shadow-md p-5 bg-gray-200 border-2 rounded-xl">
             <h2 class="text-center py-3 font-bold text-4xl">User Dashboard</h2>
             <a href="logout.php">
                 <button class="py-2 px-3 mt-4 border-2 border-red-500 rounded-xl outline-none bg-red-600  text-white text-lg hover:bg-transparent hover:text-red-600">
                     Logout
                 </button>
             </a>
         </div>
     </div>

 </body>

 </html>