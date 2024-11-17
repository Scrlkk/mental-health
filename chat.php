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

<body class="bg-gradient-to-br from-[#E0F1D0] from-5% via-[#A7D8A5] via-30% to-[#7BAF7F]">
    <?php include 'src/navbar.php'; ?>

    <section class="max-w-[72rem] mx-auto text-xl pt-[115px] pb-12">
        <div class="group">
            <div
                class="shadow-md bg-[#E0F1D0] rounded-t-[40px] w-full h-[32rem] hover:shadow-2xl transition duration-300 ease-in-out">
                <div class="p-10 font-cormorant-garamond text-2xl" id="chatBox"></div>
            </div>

            <div
                class=" shadow-md bg-white  rounded-b-[40px] py-4 group-hover:shadow-2xl transition duration-300 ease-in-out">

                <div class="flex px-7 gap-6 justify-between">
                    <input type="text" id="username"
                        class="bg-[#A7D8A5] text-2xl font-bold font-cormorant-garamond rounded-[3rem] w-[30rem] px-6 placeholder:font-bold placeholder:text-2xl placeholder:text-black placeholder:text-center username-input"
                        placeholder="ENTER YOUR NAME">
                    </input>
                    <input type="text" id="messageInput"
                        class="bg-[#A7D8A5] text-2xl font-bold font-cormorant-garamond rounded-[3rem] w-full px-8 placeholder:font-bold placeholder:text-2xl placeholder:text-black message-input"
                        placeholder="TYPE A MESSAGE" onkeypress="if (event.key === 'Enter') sendMessage()" />
                    <button id="send"
                        class="py-2 bg-[#007BFF] text-white text-3xl font-bold font-cormorant-garamond rounded-[3rem] w-[16rem] px-6"
                        onclick="sendMessage()">SEND</button>
                </div>
            </div>

        </div>

    </section>

    <?php include 'src/footer.php'; ?>
    <script src="js/chat.js?v=<?php echo time(); ?>"></script>
</body>

</html>