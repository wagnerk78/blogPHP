<?php
include_once("templates/header.php");

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
<main id="post-container">
    <div class="content-container">
        <h1><?= $currentPost['title'] ?></h1>
        <p><?= $currentPost['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">

        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eligendi cupiditate illum perferendis sit! Ad nulla, quasi sint error debitis dolorum earum dignissimos ipsum fugit numquam tempora quam voluptates nemo!
            Optio quis id provident. Vel molestiae voluptatibus odio recusandae fugit, similique voluptatum fugiat optio dolorum nulla iure ea unde quisquam, cumque accusantium tempore repellat laboriosam earum possimus at, perferendis exercitationem!
            Nemo voluptatum impedit molestias dicta inventore nulla deleniti unde doloremque officiis, eaque sequi reiciendis sit soluta tempora. Quod neque eos quam perspiciatis, hic facere nostrum saepe. Vitae, exercitationem. Modi, at!
            Cupiditate nulla fuga incidunt. Totam ipsam eum illum distinctio ut. Eligendi ratione dolorum perferendis odio rerum veritatis, excepturi eaque, necessitatibus eos, nobis aperiam obcaecati? Dolores pariatur quibusdam officia cupiditate neque.
            Iusto porro, dolores consequuntur asperiores officia similique, necessitatibus quibusdam exercitationem adipisci explicabo perferendis? Fuga sunt non accusantium, fugit incidunt adipisci rerum delectus, possimus minus blanditiis debitis atque, maiores totam aliquam.</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eligendi cupiditate illum perferendis sit! Ad nulla, quasi sint error debitis dolorum earum dignissimos ipsum fugit numquam tempora quam voluptates nemo!
            Optio quis id provident. Vel molestiae voluptatibus odio recusandae fugit, similique voluptatum fugiat optio dolorum nulla iure ea unde quisquam, cumque accusantium tempore repellat laboriosam earum possimus at, perferendis exercitationem!
            Nemo voluptatum impedit molestias dicta inventore nulla deleniti unde doloremque officiis, eaque sequi reiciendis sit soluta tempora. Quod neque eos quam perspiciatis, hic facere nostrum saepe. Vitae, exercitationem. Modi, at!
            Cupiditate nulla fuga incidunt. Totam ipsam eum illum distinctio ut. Eligendi ratione dolorum perferendis odio rerum veritatis, excepturi eaque, necessitatibus eos, nobis aperiam obcaecati? Dolores pariatur quibusdam officia cupiditate neque.
            Iusto porro, dolores consequuntur asperiores officia similique, necessitatibus quibusdam exercitationem adipisci explicabo perferendis? Fuga sunt non accusantium, fugit incidunt adipisci rerum delectus, possimus minus blanditiis debitis atque, maiores totam aliquam.</p>
    </div>
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tags-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li> <a href="#"><?= $tag ?></a> </li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach ($categories as $category) : ?>
                    <li> <a href="#"><?= $category ?></a> </li>
                <?php endforeach; ?>
            </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>