<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>

  <title>Meu Portfolio</title>
</head>

<body class="bg-slate-900 text-gray-200">
  <?php include('./components/header.php'); ?>

  <main class="mx-auto max-w-screen-lg px-3 py-6">
    <?php include('./components/hero.php'); ?>

    <section class="py-6 space-y-3" id="projetos">
      <h2 class="text-2xl font-bold">Meus Projetos</h2>

      <?php include('./components/projetos.php'); ?>
    </section>
  </main>

  <footer class="mx-auto max-w-screen-lg">
    <div class="border-t border-gray-600 py-6 px-3 text-gray-400 text-sm text-center">
      &copy Copyright <?=date('Y')?>, Construido ♥️ por mim mesmo :)
    </div>
  </footer>
</body>

</html>