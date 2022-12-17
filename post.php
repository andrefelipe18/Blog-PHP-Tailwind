<?php
include_once('templates/header.php');

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main class="mb-64 font-poppins">
    <div class="">
        <h1 class="text-center text-7xl font-bold p-4">
        <?= $currentPost['title'] ?>
        </h1>
        <p class="text-center font-semibold uppercase text-gray-700">
        <?= $currentPost['description'] ?>
        </p>
    </div>
    <div class="max-w-7xl m-auto mt-8 flex flex-wrap">
        <div class="m-8">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>" class="w-full">
            <h2 class="text-3xl font-bold mt-5">
                <a href="<?= $BASE_URL ?>post.php?id=<?= $currentPost['id'] ?>">
                    <?= $currentPost['title'] ?>
                </a>
            </h2>
            <p class="text-xl mt-2">
                <?= $currentPost['description'] ?>
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, cupiditate! Repellat minima aperiam explicabo aliquam non, consequatur facere assumenda blanditiis ad ab odit doloribus temporibus. Aspernatur vitae, nostrum ad deserunt amet maiores minima saepe sit? Quos est quibusdam voluptatum perferendis repellendus magnam molestias illum cumque, deserunt sed enim, ipsam soluta quis exercitationem temporibus adipisci, suscipit recusandae harum. Voluptatum saepe explicabo dolor reprehenderit facere ipsa veniam sit est nobis fugit. Laudantium distinctio rem neque dolorem molestias consectetur illo! Consequatur ex explicabo soluta neque eius laboriosam debitis! Accusantium ut temporibus eos sunt quia laboriosam quasi dolorem. Vero laudantium culpa incidunt perferendis officiis eum harum, est reiciendis quia enim dolore nemo aut iusto accusamus excepturi fugiat a ducimus magnam quis placeat facilis voluptatibus atque sequi explicabo? Maxime quaerat nostrum, quisquam, fugit, quas facere corrupti quam dolorum dolorem consectetur consequuntur in rerum unde dolor?</p>
            <div>
            </div>
        </div>
    </div>
</main>
<?php
include_once('templates/footer.php');
?>