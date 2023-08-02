<?php
include_once 'guest.php';
include_once('app/User.php');

$user = new User();
$user->name = '';
$user->email = '';
$user->password = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();

    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];


    if ($user->register()) {
        header("Location: login.php");
    } else {
        $error = 'Email already registered!';
    }
}

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
            <h2 class="text-center py-3 font-bold text-4xl">Register</h2>
            <form action="register.php" method="POST">
                <div class="w-full drop-shadow rounded-md p-4">
                    <label class="block text-grey-darker text-xl font-semibold mb-2" for="name">Name:</label>
                    <input class="appearance-none  border rounded-md  w-full py-3 px-4 text-xl text-grey-darker" value="<?php echo htmlspecialchars($user->name); ?>" name="name" id="name" type="text" placeholder="Your name">
                </div>
                <div class="w-full drop-shadow rounded-md p-4">
                    <label class="block text-grey-darker text-xl font-semibold mb-2" for="email">Email:</label>
                    <input class="appearance-none  border rounded-md  w-full py-3 px-4 text-xl text-grey-darker" value="<?php echo htmlspecialchars($user->email); ?>" name="email" id="email" type="email" placeholder="Your email" required>
                    <span class="block mt-1 text-red-600"><?php echo $error ?></span>
                </div>
                <div class="w-full drop-shadow rounded-md p-4">
                    <label class="block text-grey-darker text-xl font-semibold mb-2" for="password"> Password:</label>
                    <input class="appearance-none  border rounded-md  w-full py-3 px-4 text-xl text-grey-darker" value="<?php echo htmlspecialchars($user->password); ?>" name="password" id="password" type="password" placeholder="Your password" required>
                </div>
                <div class="text-center my-3">
                    <button class="py-2 px-3 text-center border-2 border-gray-800 bg-gray-800 rounded-xl outline-none  text-white text-lg hover:bg-transparent hover:text-gray-800" type="submit">Submit</button>
                </div>
            </form>

            <hr class="w-full border rounded-xl border-gray-300 my-4">

            <div class="text-center ">
                <h5 class="text-gray-800 text-lg mb-2 font-thin">Already have an account?</h5>
                <a href="login.php">
                    <button class="py-2 px-3 border-2 border-green-600 rounded-xl outline-none bg-green-600  text-white text-lg hover:bg-transparent hover:text-green-600">
                        Login
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>