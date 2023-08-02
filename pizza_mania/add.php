<?php
include('config/db_connect.php');

// if(isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

//initialize variables
$title = $email = $ingredients = '';

// form error messages
$errors = array('email' => '', 'title' => '', 'ingredients' => '');

if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = 'A email address is required*';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email must be a valid email address.';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'A title is required*';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'Title must be letters and spaces only.';
        }
    }

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'At least one ingredient is required* ';
    } else {
        $ingredients  = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] =  'Ingredients must be comma separated list.';
        }
    }

    //check if there is any errors
    if(array_filter($errors)) {
        echo 'form invalid';
    } else {

        $email = mysqli_escape_string($conn, $_POST['email']);
        $title = mysqli_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_escape_string($conn, $_POST['ingredients']);

        //create sql
        $sql = "INSERT INTO pizzas(email, title, ingredients) VALUES ('$email', '$title', '$ingredients')";

        // save to database and check
        if(mysqli_query($conn, $sql)) {
            //success
            header('Location: index.php');
        } else {
            //error
            echo 'query error' . mysqli_error($conn);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>

<section class="max-w-5xl mx-auto text-gray-500 my-5">
    <h4 class="text-center text-5xl mb-10">Add a Pizza</h4>
    <form class="w-full max-w-2xl mx-auto bg-white p-4 rounded-md " action="add.php" method="POST">
        <div class="my-5">
            <label for="email" class="block text-xl">Your email:</label>
            <input class="w-full border-0 border-b-2 focus:border-b-orange-300  focus:outline-none py-2 text-xl border-gray-500 bg-transparent" value="<?php echo $email ?>" type="text" id="email" name="email" required>
            <span class="block text-lg text-red-600"><?php echo htmlspecialchars($errors['email']); ?></span>
        </div>
        <div class="mb-5">
            <label for="title" class="block text-xl">Pizza title:</label>
            <input class="w-full border-0 border-b-2 focus:border-b-orange-300 focus:outline-none py-2 text-xl border-gray-500 bg-transparent" value="<?php echo $title ?>" type="text" id="title" name="title" required>
            <span class="block text-red-600"><?php echo htmlspecialchars($errors['title']); ?></span>
        </div>
        <div class="mb-5">
            <label for="ingredients" class="block text-xl">Pizza ingredients (separated by comma):</label>
            <input class="w-full border-0 border-b-2 focus:border-b-orange-300 focus:outline-none py-2 text-xl border-gray-500 bg-transparent" value="<?php echo $ingredients ?>" type="text" id="ingredients" name="ingredients" required>
            <span class="block text-red-600"><?php echo htmlspecialchars($errors['ingredients']); ?></span>
        </div>
        <div class="text-center mt-2">
            <button class="px-6 py-3 ring-2 rounded-full hover:text-orange-400 bg-orange-300 text-white hover:bg-gray-100 focus:ring ring-orange-300" name="submit" type="submit">
                SUBMIT
            </button>
        </div>
    </form>
</section>

<?php include("templates/footer.php"); ?>

</html>