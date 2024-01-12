<?php require APPROOT . '/views/inc/header.php'; ?>

<?php //var_dump($data) ?>

<main>
    <section class="mt-5">
        <div class="container flex justify-between">
            <div class="flex flex-wrap space-x-4 mb-4">
                <?php
                foreach ($data['categories'] as $category) {
                    echo '<button class="bg-green-700 text-white px-3 py-1 rounded hover:text-black hover:bg-green-500">' . $category->name . '</button>';
                }
                ?>
            </div>
            <div class="flex items-center mb-4">
                <input type="text" placeholder="Search for products..." class="w-full px-4 py-2 border border-gray-300 rounded-4 focus:outline-none focus:border-blue-500">
            </div>
        </div>
    </section>
    <section class="products-by-category">
        <?php
        foreach ($data['products'] as $product) {
            echo '<div class="mb-4">';
            echo '<h2 class="text-xl font-bold">' . $category->name . '</h2>';
            echo '<div class="flex flex-wrap space-x-4">';
                echo '<div class="bg-white p-4 rounded-md shadow-md">';
                echo '<img src="' . URLROOT . '/public/uploads/' . $product->picture. '" alt="' . $product->name. '" class="mb-2 rounded-md">';
                echo '<div class="bg-blue-700 text-white px-4 py-2 rounded-md mb-2">';
                echo 'Price: $' . $product->price;
                echo '</div>';
                echo '<h3 class="text-blue-700 text-lg font-semibold mb-2">' . $product->name . '</h3>';
                echo '<button data-id="' . $product->idProduct . '" class="cart-add bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-500">Add to Cart</button>';
                echo '</div>';
            
            echo '</div>';
            echo '</div>';
        }
        ?>
    </section>
</main>



<script>
let cartId = "<?php echo $_SESSION['id'] ?>" ;
</script>

<script src="<?= URLROOT . '/js/config.js'?>"></script>
<script src="<?= URLROOT . '/js/productOfCart.js'?>"></script>
<?php require APPROOT . '/views/inc/footer.php'; ?>
