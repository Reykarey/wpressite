<?php
include "components/head.php";
?>
<main>
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quam repellat nesciunt blanditiis ex temporibus voluptas dolorem expedita dolore nobis quidem sed delectus, quaerat quae, aliquam sit dolor, quia. Molestias.</p>
<ul>
    <?php if(isset($data['items'])): ?>
        <?php foreach($data['items'] as $item): ?>
        <li><?php echo $item ?></li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
</main>
<?php
include "components/footer.php";
