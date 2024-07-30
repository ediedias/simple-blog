<h1>Simple Blog</h1>

<ul>       
    <li>
        <h2><?= htmlspecialchars($data->title); ?></h2>
        <p><?= htmlspecialchars($data->body); ?></p>
        <p><small>Posted on <?= $data->createdAt ?></small></p>
    </li>    
</ul>