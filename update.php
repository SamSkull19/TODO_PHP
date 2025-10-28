<?php
require "conn.php";

if (isset($_GET["upd_id"])) {
    $id = $_GET["upd_id"];

    $data = $conn->query("SELECT * FROM tasks WHERE id = '$id'");

    $row = $data->fetch(PDO::FETCH_OBJ);

    if(isset($_POST["submit"])){
        $task = $_POST['taskName'];

        $update = $conn->prepare("UPDATE tasks SET name=:name WHERE id = '$id'");

        $update->execute([':name' => $task]);

        header("location: index.php");
    }
}

?>


<?php include "header.php"; ?>

<section class="max-w-[680px] mx-auto mt-20">
    <div>
        <h2 class="text-4xl mb-10 text-blue-900 font-semibold">Update Your Tasks</h2>
        <div class="mb-10">
            <form method="POST" action="">
                <input name="taskName" type="text" placeholder="Your Tasks" class="text-xl p-4 border border-blue-800 rounded-lg" value="<?php echo $row->name; ?>">
                
                <input name="submit" type="submit" placeholder="Your Tasks" value="Update" class="text-xl p-4 px-10 border border-blue-800 rounded-lg bg-cyan-900 text-gray-100">
            </form>
        </div>
    </div>
</section>