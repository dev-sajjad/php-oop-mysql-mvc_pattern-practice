<?php

//MYSQLi procedural 
include('config/db_connect.php');

// write query for all pizzas
$sql = 'SELECT id, title, ingredients FROM pizzas ORDER BY created_at';

// make query and get results
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from the memory
mysqli_free_result($result);

//close the connection
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>

<h4 class="text-center text-5xl my-8 text-gray-600">Pizzas!</h4>

<div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-3 gap-y-12 mt-8 gap-x-7 overflow-y-auto">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="relative py-6 h-[380px] bg-white  border rounded-lg text-center">
                <img class="w-32 mt-10 mx-auto mb-[-20px] block relative top-[-30px]" src="img/pizza.svg" alt="pizza img">
                <h6 class="my-3 mt-[-20px] text-2xl font-semibold font-mono text-orange-300"><?php echo htmlspecialchars($pizza['title']); ?></h6>
                <ul class="mb-2">
                    <?php foreach (explode(',', $pizza['ingredients']) as $ingredient) : ?>
                        <li class="text-lg font-thin"><?php echo $ingredient; ?></li>
                    <?php endforeach; ?>
                </ul>
                <hr class="absolute bottom-[45px] w-full border">
                <a class="absolute right-4 bottom-4 text-orange-300" href="details.php?id=<?php echo $pizza['id'] ?>">MORE INFO</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include("templates/footer.php"); ?>

</html>