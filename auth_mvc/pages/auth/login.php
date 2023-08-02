
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
            <h2 class="text-center py-3 font-bold text-4xl">Login</h2>
            <form action="/submit-login" method="POST">
                <div class="w-full drop-shadow p-4">
                    <label class="block text-grey-darker text-xl font-semibold mb-2" for="email">Email:</label>
                    <input class="appearance-none border rounded-md w-full py-3 px-4 text-xl text-grey-darker" name="email" id="email" type="email" placeholder="Your email" required>
                </div>
                <div class="w-full drop-shadow p-4">
                    <label class="block text-grey-darker text-xl font-semibold mb-2" for="password"> Password:</label>
                    <input class="appearance-none border rounded-md w-full py-3 px-4 text-xl text-grey-darker" name="password" id="password" type="password" placeholder="Your password" required>
                </div>
                <div class="text-center my-3">
                    <button class="py-2 px-3 text-center border-2 border-gray-800 bg-gray-800 rounded-xl outline-none  text-white text-lg hover:bg-transparent hover:text-gray-800" type="submit">Submit</button>
                </div>
            </form>
            
            <hr class="w-full border rounded-xl border-gray-300 my-4">

            <div class="text-center">
                <h5 class="text-gray-800 text-lg mb-2 font-thin">Don't have an account?</h5>
                <a href="/register">
                    <button class="py-2 px-3 border-2 border-green-600 rounded-xl outline-none bg-green-600  text-white text-lg hover:bg-transparent hover:text-green-600">
                        Register
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>