<?php require "header.html"; ?>
<?php require "remplir_panier.html"; ?>
<?php require "footer.html"; ?>

<?php get_header(); ?>
<?php get_footer(); ?>

<a href="/index.php">Home</a>
<a href="/a-propos.php">A propos</a>
<a href="/contact.php">Contact</a>

<a href="/index.php" class="link <?php if ($_SERVER['SCRIPT_NAME'] === '/index.php'): ?>active<?php endif; ?>">Home</a>
<a href="/about.php" class="link <?php if ($_SERVER['SCRIPT_NAME'] === '/about.php'): ?>active<?php endif; ?>">About</a>
<a href="/contact.php" class="link <?php if ($_SERVER['SCRIPT_NAME'] === '/contact.php'): ?>active<?php endif; ?>">Contact</a>