<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Carlos&lt;&gt;</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            typing: {
              "from": { width: "0" },
              "to": { width: "100%" },
            },
            blink: {
              "50%": { borderColor: "transparent" },
            },
          },
          animation: {
            typing: "typing 3.5s steps(20) infinite alternate, blink .7s infinite",
          },
        },
      },
    }
    </script>
</head>

<body class=" inset-0 -z-10 h-full w-full bg-slate-950 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px] text-white">

    <!-- Cabeçalho -->
    <?php include("./components/header.php"); ?>

    <main class="mx-auto max-w-screen-lg bg-slate-850">
        <!-- Hero -->
        <?php include("./components/hero.php"); ?>

        <!-- Stacks/Tecnologias -->
        <?php include("./components/stacks.php"); ?>
        <!-- Projetos -->
        <?php include("./components/projetos.php"); ?>
    </main>
    <!-- Rodapé -->
    <?php include("./components/footer.php"); ?>

</body>

</html>