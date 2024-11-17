<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mental Health Website</title>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/output.css" />
    <link rel="shortcut icon" href="assets/favicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'eb-garamond': ['EB Garamond', 'serif'],
                        'cormorant-sc': ['Cormorant SC', 'serif'],
                        'playfair-display': ['Playfair Display', 'serif'],
                        'cormorant-garamond': ['Cormorant Garamond', 'serif'],
                    }
                }
            }
        }
    </script>

</head>

<body class="bg-gradient-to-bl from-[#E0F1D0] from-5% via-[#A7D8A5] via-30% to-[#7BAF7F]">
    <?php include 'src/navbar.php'; ?>
    <section class="pt-36 pb-28 px-[23rem]">
        <div
            class="flex flex-col justify-center items-center bg-[#E0F1D0] rounded-2xl py-5 pb-20 px-10 shadow-2xl transition duration-150 ease-in-out">
            <h1 class="text-5xl font-cormorant-sc text-center fon-bold pb-16 pt-4">Mini Games</h1>
            <div id="game-container" class="scale-y-125 pb-4">
            </div>
            <div id="preload">
                <img src="assets/forest.png">
                <img src="assets/horse.png">
                <img src="assets/skeleton_attack_mirror.png">
                <img src="assets/skeleton_walk_mirror.png">
            </div>
            <script src="js/horse.js"></script>
            <script src="js/skeleton.js"></script>
            <script src="js/background.js"></script>
            <script src="js/game.js"></script>
        </div>
    </section>
    <?php include 'src/footer.php'; ?>
</body>
<style>
    body {
        display: grid;
        font: 14px "Open Sans";
    }

    #game-container {
        margin: auto;
        text-align: center;
    }

    canvas {
        max-width: 100%;
        height: 120%;
    }

    #preload {
        display: none;
    }
</style>
<script>
    document.addEventListener('keydown', function (event) {
        if (event.key === " " || event.code === "Space") {
            event.preventDefault(); // Mencegah aksi default (scrolling)
        }
    });
</script>

</html>