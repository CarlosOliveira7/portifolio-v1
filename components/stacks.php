<?php
$stacks = [
  ["nome"=>"PHP","img"=>"/images/stacks/PHP.png","cor"=>"text-indigo-200"],
  ["nome"=>"Laravel","img"=>"/images/stacks/Laravel.png","cor"=>"text-orange-500"],
  ["nome"=>"React","img"=>"/images/stacks/react.png","cor"=>"text-sky-300"],
  ["nome"=>"HTML","img"=>"/images/stacks/HTML5.png","cor"=>"text-orange-700"],
  ["nome"=>"CSS","img"=>"/images/stacks/css.png","cor"=>"text-blue-700"],
];
?>

<div class="max-w-screen mx-auto pt-8">
  <h2 class="text-2xl font-bold mb-6 text-white mx-2">Minhas Tech Stacks</h2>

  <div class="relative overflow-hidden">

    <!-- SLIDER -->
    <div 
      id="stack-slider"
      class="flex gap-4 overflow-x-scroll scrollbar-hide"
    >
      <?php foreach($stacks as $stack): ?>
        <div class=" mx-2 min-w-[120px] md:min-w-[160px] h-[130px] md:h-[150px] bg-slate-800 rounded-2xl flex flex-col items-center justify-center gap-2 border border-slate-700 hover:border-blue-500 transition-colors">

          <img class="w-14 md:w-14" src="<?= $stack['img'] ?>" alt="<?= $stack['nome'] ?>">

          <span class="<?= $stack['cor'] ?> text-xs md:text-sm font-medium">
            <?= $stack['nome'] ?>
          </span>

        </div>
      <?php endforeach; ?>
    </div>

  </div>
</div>
