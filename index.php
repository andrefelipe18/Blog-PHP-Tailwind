<?php 

include_once('templates/header.php'); 

?>
  <main class="mb-64 font-poppins">
    <div class="">
         <h1 class="text-center text-7xl font-bold p-4">
            Blog Codar
         </h1>
         <p class="text-center font-semibold uppercase text-gray-700">
            O seu blog de tecnologia
         </p> 
    </div>
    <div class="max-w-7xl m-auto mt-8 flex flex-wrap">
        <?php foreach($posts as $post): ?>
        <div class="first:min-w-full first:m-0 flex-1 mb-5 m-8">
            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>" class="w-full">
            <h2 class="text-3xl font-bold">
                <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                <?= $post['title'] ?>
            </a>
            </h2>
            <p class="text-xl">
                <?= $post['description'] ?>
            </p>
            <div>
            <?php foreach($post['tags'] as $tag): ?>
                <a href="#" class="text-xs text-gray-600 uppercase underline"><?= $tag ?></a>
            <?php endforeach;?>
            </div>
        </div>    
        <?php endforeach;?>
    </div>
  </main>
<?php 

include_once('templates/footer.php');

?>