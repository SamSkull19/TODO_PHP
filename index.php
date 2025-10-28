<?php include "header.php"; ?>

<body>
    <section class="max-w-[1180px] mx-auto mt-20">
        <div class="border-b-1 border-blue-950 ">
            <h2 class="text-4xl mb-10 text-blue-900 font-semibold">Enter Your Tasks</h2>
            <div class="mb-10">
                <form action="">
                    <input type="text" placeholder="Your Tasks" class="text-xl p-4 border border-blue-800 rounded-lg">
                    <input type="submit" placeholder="Your Tasks" class="text-xl p-4 px-10 border border-blue-800 rounded-lg bg-cyan-900 text-gray-100">
                </form>
            </div>
        </div>

        <div class="p-5 mt-10">
            <?php require "task_table.php"; ?>
        </div>
    </section>

</body>
</html>