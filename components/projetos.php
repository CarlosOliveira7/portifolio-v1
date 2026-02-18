<section class="space-y-6 mt-6">

<?php 
$projetos = [
    [
        "nome" => "API GERENCIAMENTO DE EVENTOS",
        "descricao" => "A API de Eventos é uma aplicação construída em .NET Core que oferece funcionalidades para o gerenciamento de eventos. Projetada para ser simples e flexível, a API proporciona operações básicas, como criar, recuperar, atualizar e excluir eventos.",
        "finalizado" => true,
        "dataProjeto" => "20-10-2023",
        "ano" => "2023",
        "stacks" => [".NET / C#","HTML","CSS"],
        "link" => "https://github.com/CarlosOliveira7/ApiEventos.git",
        "img" => "/images/cli3.png"
    ],
    [
        "nome" => "PORTIFOLIO DE APRESENTAÇÃO PESSOAL",
        "descricao" => "PORTIFOLIO DE APRESENTAÇÃO PESSOAL E PROJETOS REALIZADOS",
        "finalizado" => false,
        "dataProjeto" => "18-02-2026",
        "ano" => "2026",
        "stacks" => ["PHP","HTML","CSS","TAILWIND"],
        "link" => "https://github.com/CarlosOliveira7/ApiEventos.git",
        "img" => "/images/projetos/"
    ],

];


$cores = [
    "PHP" => "bg-purple-800 text-purple-400",
    ".NET / C#" => "bg-purple-900 text-purple-300",
    "JS" => "bg-yellow-900 text-yellow-400",
    "CSS" => "bg-blue-900 text-blue-400",
    "HTML" => "bg-orange-900 text-orange-400"
];
?>

<h1 class="text-3xl font-bold mx-2">MEUS PROJETOS</h1>

<?php foreach($projetos as $proj): ?>
        <h2 class="text-xl font-semibold">
            <a class="mx-2" href="<?=$proj['link']  ?>"><?= $proj['nome'] ?></a>
        </h2>
<div class="flex flex-col gap-6 bg-slate-800 rounded-lg space-y-6 m-6 p-4 items-center mt-6">

    <img class="w-full md:w-1/4 max-w-[200px] rounded-lg justify-middle mx-4" src="<?= $proj['img'] ?>" alt="Projeto">

    <div class="w-full md:w-3/4 space-y-3 mx-4 px-2">
        <h2 class="text-xl font-semibold">
            <a href="<?=$proj['link']  ?>"><?= $proj['nome'] ?></a>
        </h2>

        <!-- STACKS -->
        <?php if(!empty($proj['stacks'])): ?>
        <div class="flex flex-wrap gap-2">
            <?php foreach($proj['stacks'] as $stack): 
                $classe = $cores[$stack] ?? "bg-slate-800 text-gray-300";
            ?>
                <span class="<?= $classe ?> rounded px-2 py-1 text-sm font-medium">
                    <?= $stack ?>
                </span>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <p class="text-slate-300">
            <?php if($proj['finalizado']): ?>
                <strong>STATUS DO PROJETO: </strong>FINALIZADO EM <?= $proj['ano'] ?>...✅
            <?php else: ?>
                <strong>STATUS DO PROJETO: </strong>PROJETO EM DESENVOLVIMENTO...🛠
            <?php endif; ?>
            <strong><br>DESCRIÇÃO GERAL DO PROJETO:</strong><br>
            <?= $proj['descricao'] ?>
        </p>

    </div>
</div>
<?php endforeach; ?>

</section>
