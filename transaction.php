<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="bg-gray-200">

<?php
include './navbar.php';
include './connection.php';

$sql = "SELECT * FROM `transaction`";
$result = mysqli_query($conn, $sql);
?>

    <div class=" mx-auto relative overflow-x-auto shadow-md ">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                    compte
                    </th>
                    <th scope="col" class="px-6 py-3">
                    montant
                    </th>
                    <th scope="col" class="px-6 py-3">
                    type
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$row['id']?>
                        </th>
                        <td class="px-6 py-4">
                            <?=$row['compte']?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$row['montant']?>
                        </td>
                        <td class="px-6 py-4">
                            <?=$row['type']?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <?php
    include './footer.php';
    ?>
</body>
</html>