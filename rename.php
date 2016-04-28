<?php
require_once 'inc/config.php';

// Lister toutes les images du répertoire img/ (php.net/glob)

$pictures = glob('img/*.jpg');

debug($pictures);

foreach ($pictures as $picture_path) {
	$old_name = basename($picture_path);

	// $query = $db->prepare('SELECT name, picture FROM products WHERE picture LIKE :picture');
	// $query->binValue(':picture', $old_name, PDO::PARAM_STR);
	// $query->execute();
	// $product = $query->fetch();

	// $old_name = $product['name'];
	// $new_name = str_replace(' ', '-', $new_name);
}

echo $old_name;