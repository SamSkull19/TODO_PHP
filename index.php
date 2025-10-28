<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

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
                    <tr>
                        <td class="border-2 border-gray-700 px-4 py-2">1</td>
                        <td class="border-2 border-gray-700 px-4 py-2">Sifat Samin</td>
                        <td class="border-2 border-gray-700 px-4 py-2">
                            <button class="bg-red-300 px-7 py-2 border border-red-950 text-base rounded-lg font-semibold">DELETE</button>
                        </td>
                        <td class="border-2 border-gray-700 px-4 py-2">
                            <button class="bg-blue-300 px-7 py-2 border border-blue-950 text-base rounded-lg font-semibold">UPDATE</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </section>

</body>

</html>