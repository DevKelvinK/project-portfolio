<?php 
  $itens = [
    [ 'href' => 'https://x.com', 'src' => '/assets/twitter.png', 'alt' => 'twitter'],
    [ 'href' => 'https://facebook.com', 'src' => '/assets/facebook.png', 'alt' => 'facebook'],
    [ 'href' => 'https://www.linkedin.com/in/kelvin-kesley/', 'src' => '/assets/linkedin.png', 'alt' => 'linkedIn'],
    [ 'href' => 'https://www.youtube.com/@KK-DoZeroAoSenior', 'src' => '/assets/youtube.png', 'alt' => 'youtube'],
  ]
?>

<section class="flex gap-x-3">
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Kelvin.</h1>

    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou um desenvolvedor front-end que adora criar coisas novas e aprender novas tecnologias.
      Especializado em Javascript e React, mas também tenho conhecimento em PHP, HTML e CSS.
    </p>

    <nav>
      <ul class="flex gap-x-3 mt-3">
        <?php foreach ($itens as $item): ?>
          <li>
            <a href="<?=$item['href']?>" target="_blank">
              <img class="h-8 transition transform hover:scale-125 duration-1000" src="<?=$item['src']?>" alt="icone <?=$item['alt']?>">
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>

  <div class="w-1/3 flex items-center justify-center">
    <img class="h-60 -mt-5" src="/assets/avatar.svg" alt="Avatar do usuário">
  </div>
</section>