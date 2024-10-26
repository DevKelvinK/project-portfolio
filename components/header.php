<?php 
  $itens = [
    [ 'href' => '#projetos',  'target' => '', 'texto' => 'Projetos'],
    [ 'href' => 'https://github.com/DevKelvinK', 'target' => '_blank', 'texto' => 'GitHub'],
    [ 'href' => 'https://www.linkedin.com/in/kelvin-kesley/', 'target' => '_blank', 'texto' => 'LinkedIn'],
  ]
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <div class="font-bold text-xl text-cyan-600">
    ☯️ Meu Portfolio ...
  </div>

  <nav>
    <ul class="flex gap-x-3 font-medium">
      <?php foreach ($itens as $item): ?>
        <li>
          <a href="<?=$item['href']?>" 
          target="<?=$item['target'] ?>"
          class="hover:underline focus:outline-none focus:underline">
            <?=$item['texto'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>