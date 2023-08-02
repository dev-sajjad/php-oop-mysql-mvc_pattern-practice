<?php
include('config/db_connect.php');
 
//delete from database
if(isset($_POST['delete'])) {

    $id_to_delete = mysqli_escape_string($conn, $_POST['id-to-delete']);

    // make query to delete
    $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";

    if(mysqli_query($conn, $sql)) {
        //success
        header('Location: index.php');
    } else {
        echo "Query error: " . mysqli_error($conn);
    }
} 

//check GET request id param
if (isset($_GET['id'])) {

    $id = mysqli_escape_string($conn, $_GET['id']);

    //make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    // get the query result 
    $result = mysqli_query($conn, $sql);

    // fetch the result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>

<h2 class="text-5xl text-center text-gray-500 mt-5 mb-12">Pizza Details</h4>

    <div class="max-w-4xl mx-auto text-center bg-white  rounded-lg drop-shadow-md p-4">
        <?php if ($pizza) : ?>
            <h4 class="text-4xl mb-4 text-orange-300 "><?php echo htmlspecialchars(ucwords($pizza['title'])); ?></h4>
            <p class="text-lg mb-2">Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p class="text-lg">Date: <?php echo htmlspecialchars($pizza['created_at']); ?></p>

            <h6 class="text-3xl my-3 text-gray-500">Ingredients: </h6>
            <p class="text-lg"><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
        <?php else : ?>
            <h5 class="text-4xl text-red-300">No such pizza exists!</h5>
        <?php endif; ?>
    
        <!-- Delete from -->
            <form class="mt-6" action="details.php" method="POST">
                <input type="hidden" name="id-to-delete" value="<?php echo htmlspecialchars($pizza['id']); ?>" >
                <input class="px-6 py-3 cursor-pointer ring-2 rounded-full hover:text-orange-400 bg-orange-300 text-white hover:bg-gray-100 focus:ring ring-orange-300" name="delete" type="submit" value="DELETE" />
            </form>
            
    </div>

    <div class="text-center text-orange-500 mt-2 underline">
        <a href="index.php">go back</a>
    </div>


    <?php include("templates/footer.php"); ?>

</html>