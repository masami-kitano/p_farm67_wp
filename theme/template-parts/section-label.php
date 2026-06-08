<?php
/**
 * Section label (e.g. — About)
 *
 * @package PMedium_Theme
 *
 * @var array $args {
 *   @type string $label Label text without the em dash.
 *   @type string $class Optional extra CSS classes.
 * }
 */

if (!defined('ABSPATH')) {
  exit();
}

$label = $args['label'] ?? '';
$class = $args['class'] ?? '';

if ($label === '') {
  return;
}

$classes = trim('text-24 tracking-[0.2em] md:text-32 ' . $class);
?>

<p class="<?php echo esc_attr($classes); ?>">— <?php echo esc_html($label); ?></p>
