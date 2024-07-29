<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdn.tailwindcss.com"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="iYz4OJvkw5F9TgQ9TOWxrS6bxDct6c3HRGMemLhs">
    <title>Loja da Diana</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class=" mx-auto px-4 sm:px-6 lg:px-8">
                <div class=" p-3 font-mono text-center">
                    <span class="text-[50px] bg-gray-600 rounded-full px-6 text-yellow-300">
                        Cadastro de Produtos
                    </span>
                    <br>
                    <span class="text-xl b">
                        <i>
                            Crud de gerenciamento de produtos
                        </i>
                    </span>
                </div>



            </div>

        </nav>

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Produtos
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class=" mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">

                            <div wire:snapshot="{&quot;data&quot;:{&quot;byRangeDueDate&quot;:null,&quot;byStatus&quot;:null,&quot;bySearchTerm&quot;:null,&quot;byType&quot;:null,&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;efnSj2x2LjA1zNV3W4BD&quot;,&quot;name&quot;:&quot;show-schedules&quot;,&quot;path&quot;:&quot;schedules&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:{&quot;CF2ajq1&quot;:[&quot;div&quot;,&quot;n3hDxWvYU6hP1o23bKuf&quot;]},&quot;scripts&quot;:[&quot;3649687888-0&quot;],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;pt-br&quot;},&quot;checksum&quot;:&quot;617b52dc3276e7d4a75d932d3c808d14984d269f78c38b70cf33117cb6906887&quot;}" wire:effects="{&quot;scripts&quot;:{&quot;3649687888-0&quot;:&quot;    &lt;script&gt;\n        $wire.on(&#039;byRangeDueDate&#039;, (event) =&gt; {\n            window.Livewire.find(&#039;efnSj2x2LjA1zNV3W4BD&#039;).set(&#039;byRangeDueDate&#039;, event);\n        });\n    &lt;\/script&gt;\n    &quot;},&quot;url&quot;:{&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}" wire:id="efnSj2x2LjA1zNV3W4BD">
                                <div class="min-h-[400px] relative overflow-x-auto shadow-md sm:rounded-lg">
                                    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-gray-100 dark:bg-gray-900 p-4">



                                        <div>


                                            <button class=" items-center justify-center font-bold text-gray-700 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-100" aria-label="Options" type="button" id="create-btn">
                                                <i class="fa fa-plus"></i> Cadastrar novo Produto
                                            </button>


                                        </div>

                                    </div>

                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">

                                        <tbody>
                                            <?php foreach ($products as $product) : ?>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


                                                    <td class="px-6 py-4">
                                                        <div class="ps-3">
                                                            <div class="font-normal text-gray-500"><?php echo $product['title'] ?></div>
                                                            <div class="text-base font-bold">

                                                            </div>
                                                        </div>
                                                    </td>




                                                    <td class="px-6 py-4 text-center">
                                                        <div class="ps-3">
                                                            <div class="font-normal text-gray-500">Preço</div>
                                                            <div class="text-base font-bold">
                                                                R$<?php echo $product['price'] ?>
                                                            </div>
                                                        </div>
                                                    </td>



                                                    <td class="px-6 py-4 text-center">
                                                        <div class="ps-3">
                                                            <div class="font-normal text-gray-500">Descrição</div>
                                                            <div class="text-base font-bold">
                                                                <?php echo $product['description'] ?>
                                                            </div>
                                                        </div>
                                                    </td>



                                                    <td class="px-6 py-4 text-center">
                                                        <div class="ps-3">
                                                            <div class="font-normal text-gray-500">Quantidade</div>
                                                            <div class="text-base font-bold">
                                                                <?php echo $product['quantity'] ?>
                                                            </div>
                                                        </div>
                                                    </td>





                                                    <td class="px-6 py-4">
                                                        <div class="ps-3">
                                                            <!-- button delete -->
                                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full edit-product" data-produto="<?= $product['id'] ?>">
                                                                Editar
                                                            </button>
                                                        </div>
                                                    </td>



                                                    <td class="px-6 py-4">
                                                        <div class="ps-3">
                                                            <!-- button delete -->
                                                            <a href="http://localhost:8080/index.php/delProduct?id=<?php echo $product['id'] ?>">
                                                                <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full delete" >
                                                                    Deletar
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>


                                                </tr>

                                            <?php endforeach ?>
                                            <!--[if ENDBLOCK]><![endif]-->
                                        </tbody>
                                    </table>



                                </div>

                                <div class="mt-6">
                                    <div>
                                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Create Product modal -->
    <div id="create-product-modal" tabindex="-1" aria-hidden="true" class="hidden bg-black bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex justify-center w-full h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Criar Produto
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal" id="close-create-product">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="/store" method="POST" class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nome do produto" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                                <input type="number" name="price" id="price" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="R$2999" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade</label>
                                <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="199" required="">
                            </div>

                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição do produto</label>
                                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Escreva a descrição do produto"></textarea>
                            </div>
                        </div>
                        <button type="submit" value="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="add-product">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Adicionar novo produto
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Edit Product modal-->
    <div id="edit-product-modal" tabindex="-1" aria-hidden="true" class="hidden bg-black bg-opacity-50 overflow-y-auto overflow-x-hidden fixed top-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="flex justify-center w-full h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Editar Produto
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal" id="close-edit">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="/editPost" method="POST" class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">

                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                <input type="hidden" id="id" name="id">
                                <input type="text" name="title" id="title-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="" value="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Preço</label>
                                <input type="number" name="price" id="price-edit" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade</label>
                                <input type="number" name="quantity" id="quantity-edit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="">
                            </div>

                            <div class="col-span-2">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição do produto</label>
                                <textarea id="description-edit" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" id="save-edit">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                            </svg>
                            Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="/livewire/livewire.js?id=e2b302e9" data-csrf="iYz4OJvkw5F9TgQ9TOWxrS6bxDct6c3HRGMemLhs" data-update-uri="/livewire/update" data-navigate-once="true"></script>

<script>
    let products = `<?= json_encode($products) ?>`;
    products = JSON.parse(products);


    let openCreateProduct = document.getElementById('create-btn');
    let createModal = document.getElementById('create-product-modal');
    let closeCreateProduct = document.getElementById('close-create-product');



    openCreateProduct.onclick = function() {
        createModal.style.display = 'block';
    };

    closeCreateProduct.onclick = function() {
        createModal.style.display = 'none';
    };

    let editProductModal = document.getElementById('edit-product-modal');
    let closeEditProduct = document.getElementById('close-edit');

    let openEditProduct = document.getElementsByClassName('edit-product');
    for (let i = 0; i < openEditProduct.length; i++) {
        openEditProduct[i].onclick = function() {

            let productId = this.dataset.produto;
            let product = products.find((prod) => prod.id == productId);

            let editName = document.getElementById('title-edit');
            editName.setAttribute('value', product.title);

            let editPrice = document.getElementById('price-edit');
            editPrice.setAttribute('value', product.price);

            let editDescription = document.getElementById('description-edit');
            editDescription.innerHTML = product.description;

            let editQuantity = document.getElementById('quantity-edit');
            editQuantity.setAttribute('value', product.quantity);

            let editId = document.getElementById('id');
            editId.setAttribute('value', product.id);


            editProductModal.style.display = 'block';

        }


    }



    closeEditProduct.onclick = function() {
        editProductModal.style.display = 'none';
    }
</script>


<div class="w-full h-full fixed top-0 left-0 bg-white opacity-75 z-50 hidden" id="loadingOverlay">
    <div class="flex justify-center items-center mt-[50vh]">
        <svg aria-hidden="true" class="w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
        </svg>
    </div>
</div>

</html>