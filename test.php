<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body>
<div class="p-4 flex flex-col md:p-5 space-y-4">
                                                <div class="flex border-b dark:border-gray-700">
                                                    <div class="px-6 py-4">
                                                        balance
                                                    </div>
                                                    <div class="px-6 py-4">
                                                        device
                                                    </div>
                                                </div>
                                                <?php
                                                //include './navbar.php';
                                                include './connection.php';
                                                //get the compte details according to the client
                                                $id = $_GET['client_id'];

                                                $query = "SELECT * FROM compte where client=$id";
                                                $resultat = mysqli_query($conn,$query);
                                                $compte = mysqli_fetch_assoc($resultat)?>
                                                <div class="flex ">
                                                    <div class="px-6 py-4">
                                                        <?=$compte['balance']?>
                                                    </div>
                                                    <div class="px-6 py-4">
                                                        <?=$compte['devise']?>
                                                    </div>
                                                </div>
                                                
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal<?=$row['id']?>" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
</html>