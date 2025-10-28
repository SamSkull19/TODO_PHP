<?php

$data = $conn->query("SELECT * FROM tasks");
$data->execute();
$rows = $data->fetchAll(PDO::FETCH_OBJ);

?>

<div class="p-5 mt-10">
    <table class="border-2 border-gray-700 border-collapse w-full text-left text-lg rounded-lg">
        <thead>
            <tr class="bg-gray-100">
                <th class="border-2 border-gray-700 px-4 py-2">No.</th>
                <th class="border-2 border-gray-700 px-4 py-2">Name</th>
                <th class="border-2 border-gray-700 px-4 py-2">Action</th>
                <th class="border-2 border-gray-700 px-4 py-2">Modify</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($rows as $row) : ?>

            <tr>
                <td class="border-2 border-gray-700 px-4 py-2"><?php echo $row->id; ?></td>

                <td class="border-2 border-gray-700 px-4 py-2"><?php echo $row->name; ?></td>

                <td class="border-2 border-gray-700 px-4 py-2">
                    <button class="bg-red-300 px-7 py-2 border border-red-950 text-base rounded-lg font-semibold">DELETE</button>
                </td>

                <td class="border-2 border-gray-700 px-4 py-2">
                    <button class="bg-blue-300 px-7 py-2 border border-blue-950 text-base rounded-lg font-semibold">UPDATE</button>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
