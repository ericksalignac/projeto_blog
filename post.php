<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }

  ?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'] ?></h1>
      <p id="post-description"><?= $currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae exercitationem quaerat repellat eaque, aperiam, veritatis perferendis quasi facere nobis dignissimos eos sed ullam quos. Quidem officia unde dolores dicta rerum!
      Tempore, a debitis. Obcaecati deserunt molestiae maxime velit, eos porro sequi dolorum. Consequuntur iure vero dolorem tenetur expedita doloremque, hic earum impedit, dolor ea culpa vel vitae cum sapiente eius.
      Doloremque nesciunt autem culpa adipisci illum vitae. Voluptates tenetur quia fugit aperiam nisi possimus, illum non atque dolorem id nulla voluptatem enim. Voluptas, fugit ea similique mollitia fuga magni aperiam!
      Fugiat aliquam voluptatem, earum explicabo labore quidem excepturi modi animi dolorem ipsum natus rem nihil, perferendis, quae iste molestias unde! Tempore animi est rem facere ipsa aperiam temporibus pariatur dolorem!
      Repudiandae eum quis labore modi voluptatum facere amet omnis qui, consequuntur alias odit excepturi? Pariatur, consequuntur atque quae autem blanditiis neque sint necessitatibus. Iure perferendis eius, libero quos veniam atque!</p>
    </div>
  </main>
<?php
  include_once("templates/footer.php");
  ?>
