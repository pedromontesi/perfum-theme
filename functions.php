<?php
// CSS compilado de src/scss (npm run build).
add_action('wp_enqueue_scripts', function () {
  $rel  = 'assets/css/main.css';
  $path = get_theme_file_path($rel);

  if (!file_exists($path)) {
    return;
  }

  wp_enqueue_style(
    'arcade-main',
    get_theme_file_uri($rel),
    [],
    filemtime($path) // muda a versão quando o arquivo muda, sem cache velho
  );
});

// Mesmo CSS dentro do editor de blocos.
add_action('after_setup_theme', function () {
  add_editor_style('assets/css/main.css');
});
