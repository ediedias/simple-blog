<h1>Simple Blog</h1>
<a href="/create">Create New Post</a>

<ul>
    <?php foreach ($data as $post): ?>        
    <li>
        <a href="/post/<?= $post->getId(); ?>"><?= htmlspecialchars($post->title); ?></a>
        <p><?= htmlspecialchars($post->body); ?></p>
        <p><small>Posted on <?= $post->createdAt ?></small></p>
    </li>
    <?php endforeach; ?>
</ul>