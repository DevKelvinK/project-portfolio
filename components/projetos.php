<?php
  $projetos = [
    [
      "titulo" => "Meu Portfolio",
      "finalizado" => false,
      "ano" => 2021,
      "descricao" => "Meu primeiro Portfolio. Escrito em PHP, HTML e TailwindCSS.",
      "stack" => [
        "PHP" => "violet",
        "HTML" => "orange",
        "TAILWINDCSS" => "sky",
      ],
      "img" => "https://images.unsplash.com/photo-1669023414162-5bb06bbff0ec?q=50&w=500&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    ],
    
    [
      "titulo" => "Lista de Tarefas",
      "finalizado" => true,
      "ano" => 2022,
      "descricao" => "Lista de tarefas. Escrito em HTML e CSS.",
      "stack" => [
        "HTML" => "orange",
        "CSS" => "blue",
      ],
      "img" => "https://plus.unsplash.com/premium_photo-1681487867978-1b83ce2625c5?w=500&auto=format&fit=crop&q=50&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bGlzdHxlbnwwfHwwfHx8MA%3D%3D",
    ],

    [
      "titulo" => "Controle de Leitura de Livros",
      "finalizado" => true,
      "ano" => 2024,
      "descricao" => "Lista de Livros. Escrito em React, Javascript e TailwindCSS.",
      "stack" => [
        "REACT" => "cyan",
        "JAVASCRIPT" => "yellow",
        "HTML" => "orange",
        "TAILWINDCSS" => "sky",
      ],
      "img" => "https://plus.unsplash.com/premium_photo-1676575893806-985f71a3ebd7?q=50&w=500&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    ],

    [
      "titulo" => "Formulário Dev",
      "finalizado" => false,
      "ano" => 2023,
      "descricao" => "Formulario completo para Devs. Escrito em HTML, CSS e Javascript.",
      "stack" => [
        "HTML" => "orange",
        "CSS" => "blue",
        "JAVASCRIPT" => "yellow",
      ],
      "img" => "https://plus.unsplash.com/premium_photo-1720287601300-cf423c3d6760?fm=jpg&q=50&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    ],
  ];

  
?>

<?php foreach ($projetos as $projeto): ?>
  <div class="bg-slate-800 rounded-lg p-3 flex justify-between gap-4">
    <div class="w-1/5 h-48 border-4 border-white rounded-xl overflow-hidden">
      <img src="<?=$projeto['img'] ?>" class="object-cover h-full">
    </div>

    <div class="w-4/5 h-48 space-y-3 pt-3">
      <div class="flex gap-3 justify-between">
        <h3 class="font-semibold text-xl flex items-center gap-2">
          <?php if ($projeto['finalizado']): ?>
            ✔️
          <?php endif; ?>

          <?=
            $projeto['titulo']
          ?>

          <?php if ($projeto['finalizado']): ?>
            <span class="text-xs text-gray-400 opacity-50 italic">( finalizado em <?=$projeto['ano']?> )</span>  
          <?php else: ?>
            <span class="text-xs text-gray-400 opacity-50 italic">( em desenvolvimento )</span>  
          <?php endif; ?>
        </h3>

        <div class="space-x-1.5">
          <?php foreach ($projeto['stack'] as $language => $color): ?>
            <span class="bg-<?=$color?>-400 text-<?=$color?>-900 rounded-md px-2 py-px font-semibold text-xs">
              <?=
                $language
              ?>
            </span>
          <?php endforeach; ?>          
        </div>
      </div>

      <div>
        <p class="leading-6 h-36 overflow-hidden">
          <?=$projeto['descricao'] ?>
          <br/>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati debitis blanditiis ad error iste repudiandae necessitatibus id. Laudantium, velit corrupti animi recusandae quaerat saepe a eveniet, quis eius, sequi eaque.
        </p>
      </div>
    </div>
  </div>
<?php endforeach; ?>