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

  <section id="home-section" class="px-20 text-xl pt-40">

    <!-- TITLE -->
    <div class="text-center pb-16">
      <h1 class="font-cormorant-sc text-4xl pb-2 font-bold">WELCOME TO HEARTH WAVE</h1>
      <p class="font-cormorant-garamond w-[34rem] mx-auto italic">"Temukan ketenangan jiwa dan dukungan mental di HEARTH
        WAVE - tempat untuk
        merawat
        kesehatan
        mental Anda dengan
        cinta dan perhatian."</p>
    </div>

    <!-- Form -->
    <div class="flex font-bold px-12 w-full justify-between">

      <!-- KIRI -->
      <div
        class="bg-[#E0F1D0] rounded-2xl py-5 px-12 w-[41rem] h-[33rem] border-[#A7D8A5] shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">

        <div class="pb-5 pt-4">
          <h1 class="font-cormorant-sc text-4xl text-center leading-9">bagaimana keadaanmu hari ini?</h1>
          <p class="font-cormorant-garamond text-[22px] text-center pt-3">Isi kuesioner di bawah ini untuk mengetahui
            tingkat
            stres
            Anda.</p>
        </div>

        <div id="questionContainer" class="font-cormorant-garamond text-2xl">
          <div class="question inline-flex" id="questionText"></div>
          <div class="options pt-7">
            <label><input type="radio" name="answer" value="0"> Tidak Pernah</label><br>
            <label><input type="radio" name="answer" value="1"> Jarang</label><br>
            <label><input type="radio" name="answer" value="2"> Kadang-kadang</label><br>
            <label><input type="radio" name="answer" value="3"> Sering</label>
          </div>
          <div class="flex navigation pt-9 gap-3">
            <button
              class="border border-black rounded-2xl py-1 px-6 hover:bg-[#B1D690] hover:border-[#B1D690] transition duration-200 ease-in-out"
              id="prevButton" onclick="prevQuestion()">Kembali</button>
            <button
              class="border border-black rounded-2xl py-1 px-12 hover:bg-[#B1D690] hover:border-[#B1D690] transition duration-200 ease-in-out"
              id="nextButton" onclick="nextQuestion()">Selanjutnya</button>
          </div>
          <button
            class="hidden border border-black rounded-2xl py-1 px-12 hover:bg-[#B1D690] hover:border-[#B1D690] transition duration-200 ease-in-out"
            id="restartButton" onclick="restartQuiz()">Mulai
            Lagi</button>
        </div>
      </div>

      <!-- KANAN -->
      <div class="w-[35rem]">

        <!-- KANAN ATAS -->
        <div class="mb-12">
          <div
            class="bg-[#E0F1D0] rounded-2xl py-3 px-12 h-[15rem] border-[#A7D8A5] shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
            <div class="font-cormorant-sc text-4xl text-center pt-4">
              <h2 class="pb-4 inline-flex">Hasil Kuisioner</h2>
              <p id="resultContainer" class="hidden"></p>
              <p id="resultText" class="font-cormorant-garamond text-2xl mx-auto text-center max-w-[38rem] italic">
              </p>
            </div>
          </div>
        </div>


        <!-- KANAN BAWAH -->
        <div>
          <div
            class="bg-[#E0F1D0] rounded-2xl pt-4 pb-5 px-12 h-[15rem] flex flex-col border-[#A7D8A5] shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
            <div class="pt-4">
              <h2 class="font-cormorant-sc text-4xl text-center pb-[10px]">Ekspresikan Dirimu Hari Ini</h2>
              <div id="emoji-options" class="flex justify-center text-3xl pb-3">
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('happy')">😊</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('calm')">😌</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('sad')">😢</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('confuse')">😕</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('thinking')">🤔</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('anxious')">😟</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('neutral')">😐</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('tired')">😪</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('disappointed')">😔</button>
                <button class="hover:scale-125 transition duration-200 ease-in-out"
                  onclick="displayAdvice('angry')">😡</button>
              </div>
              <p id="advice-output" class="font-cormorant-garamond text-[22px] text-center italic"></p>
            </div>
          </div>
        </div>
      </div>


    </div>

  </section>



  <!-- LIBRARY -->
  <section id="library" class="px-32 text-xl pt-20 font-cormorant-sc font-bold">
    <div class="bg-[#E0F1D0] rounded-2xl py-5 px-24 hover:shadow-2xl transition duration-150 ease-in-out">

      <div class="pb-7 pt-10">
        <div
          class="flex py-2 items-center justify-center gap-2 border border-black mx-auto max-w-[16rem] rounded-3xl hover:bg-[#B1D690] hover:border-[#B1D690] transition duration-200 ease-in-out">
          <object data="assets/book.svg" type="image/svg+xml" class="h-12 w-12" style="pointer-events: none;"></object>
          <h1 class="text-4xl">LIBRARY</h1>
        </div>
      </div>

      <div class="text-[29px]">
        <p class="text-justify font-cormorant-garamond leading-relaxed">Kesehatan mental adalah keadaan di mana
          seseorang
          merasa
          seimbang secara emosional,
          memiliki kemampuan untuk menangani stres, dan dapat berinteraksi sosial dengan baik. Ini adalah bagian penting
          dari kesehatan secara keseluruhan, karena kesehatan mental yang baik memungkinkan seseorang menjalani hidup
          dengan lebih produktif dan memenuhi peran di keluarga, tempat kerja, serta lingkungan sosial.</p>

        <h2 class="text-center font-cormorant-garamond  py-12">Faktor-faktor yang memengaruhi kesehatan mental
          meliputi:
        </h2>

        <ol class="list-decimal pl-6 leading-relaxed text-justify font-cormorant-garamond ">
          <li><strong>Faktor Biologis:</strong> Genetika, ketidakseimbangan kimia di otak, atau cedera fisik yang
            memengaruhi otak.</li>
          <li><strong>Pengalaman Hidup:</strong> Stres, trauma, dan pengalaman negatif dapat memengaruhi kesehatan
            mental, terutama jika tidak ada dukungan yang memadai.</li>
          <li><strong>Kondisi Sosial-Ekonomi:</strong> Ketersediaan sumber daya, pendidikan, dan stabilitas keuangan
            juga dapat berdampak pada kondisi mental seseorang.</li>
          <li><strong>Lingkungan Sosial:</strong> Hubungan dengan keluarga, teman, dan masyarakat memengaruhi kondisi
            mental, dengan dukungan sosial yang baik dapat membantu kesehatan mental.</li>
        </ol>

        <h3 class="text-center font-cormorant-garamond py-12">Tips Menjaga Kesehatan Mental:
        </h3>

        <ol class="list-decimal pl-6 leading-relaxed text-justify font-cormorant-garamond ">
          <li><strong>Perhatikan Pola Hidup Sehat:</strong> Olahraga, tidur yang cukup, dan pola makan seimbang berperan
            penting dalam keseimbangan mental.</li>
          <li><strong>Kelola Stress:</strong> Teknik relaksasi seperti meditasi, pernapasan dalam, atau menulis jurnal
            dapat membantu mengelola stress.</li>
          <li><strong>Bangun Hubungan Positif:</strong>Hubungan sosial yang sehat dan support system yang baik berperan
            besar dalam kesejahteraan mental.</li>
          <li><strong>Tetapkan Batasan:</strong>Menyadari batasan diri dan tidak terlalu membebani diri sendiri dapat
            membantu mencegah stres berlebih.</li>
          <li><strong>Mencari Bantuan Profesional:</strong>Jika menghadapi masalah berat atau gangguan mental, bantuan
            dari psikolog atau psikiater sangat penting.</li>
        </ol>

        <h4 class="font-cormorant-garamond py-12 leading-relaxed text-justify">Menjaga kesehatan mental
          sebaiknya dianggap
          sebagai proses berkelanjutan, dengan langkah-langkah kecil yang dilakukan secara konsisten untuk kesejahteraan
          yang lebih baik.
        </h4>
      </div>
    </div>
  </section>




  <!-- CARD -->
  <section class="pt-20 px-28">
    <h1 class="mx-auto text-center font-cormorant-sc text-[46px] py-12 font-bold max-w-4xl leading-[3rem]">
      Berikut adalah
      beberapa
      gangguan
      mental
      yang
      umum
      beserta ciri-cirinya:
    </h1>

    <div class="grid grid-cols-3 text-xl pt-3 gap-8 mx-auto pb-32">

      <!-- 1 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold pb-6 text-[35px]  leading-[35px]">Depresi (Gangguan Depresif)
        </h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Perasaan sedih yang berkepanjangan, hampa, atau putus asa</li>
          <li>Kehilangan minat pada aktivitas yang dulunya menyenangkan</li>
          <li>Perubahan nafsu makan atau berat badan</li>
          <li>Gangguan tidur (insomnia atau tidur berlebihan)</li>
          <li>Kesulitan berkonsentrasi atau membuat keputusan</li>
          <li>Pikiran untuk melukai diri atau bunuh diri</li>
        </ul>
      </div>

      <!-- 2 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Gangguan Kecemasan (Anxiety
          Disorders)
        </h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Kecemasan berlebihan atau merasa khawatir secara terus-menerus</li>
          <li>Gelisah, mudah lelah, sulit konsentrasi</li>
          <li>Detak jantung yang cepat, berkeringat, dan merasa tegang</li>
          <li>Serangan panik yang datang tiba-tiba, yang disebut dengan panic attack</li>
          <li>Hindari situasi tertentu karena rasa takut yang berlebihan</li>
          <li>Gangguan tidur, seperti insomnia karena kekhawatiran</li>
        </ul>
      </div>

      <!-- 3 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Gangguan Bipolar (Bipolar
          Disorder)</h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Perubahan suasana hati yang ekstrem antara episode manik (sangat berenergi, euforia) dan episode depresi
          </li>
          <li>Manik: merasa sangat gembira, percaya diri berlebihan, energi tinggi, impulsif, dan kurang tidur
          </li>
          <li>
            Depresi: merasa putus asa, tidak berenergi, dan kelelahan
          </li>
          <li>
            Sering kali disertai perilaku berisiko tinggi selama fase manik
          </li>
        </ul>
      </div>

      <!-- 4 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Skizofrenia (Schizophrenia)
        </h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Halusinasi (melihat atau mendengar sesuatu yang tidak nyata)</li>
          <li>Delusi (memiliki keyakinan yang tidak sesuai dengan kenyataan)
          </li>
          <li>Pikiran yang kacau atau tidak masuk akal</li>
          <li>Gangguan dalam merespon emosi atau ekspresi yang datar</li>
          <li>Kesulitan menjalani aktivitas sehari-hari, seperti pekerjaan atau studi</li>
        </ul>
      </div>

      <!-- 5 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Gangguan Makan (Eating
          Disorders)
        </h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>
            Anoreksia: keinginan untuk menurunkan berat badan secara ekstrem, ketakutan berlebihan terhadap kenaikan
            berat badan, pembatasan asupan makanan
          </li>
          <li>
            Bulimia: makan dalam jumlah besar (binge eating), kemudian diikuti oleh perilaku "membersihkan" (misalnya
            muntah, olahraga berlebihan)
          </li>
          <li>
            Binge-Eating Disorder: makan berlebihan tanpa kendali tetapi tanpa perilaku membersihkan, yang sering kali
            disertai rasa bersalah
          </li>
        </ul>
      </div>

      <!-- 6 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Obsessive-Compulsive
          Disorder (OCD)</h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Pikiran yang mengganggu dan berulang kali (obsesi), yang menyebabkan kecemasan</li>
          <li>Perilaku berulang (kompulsi) untuk meredakan kecemasan tersebut, misalnya mencuci tangan, memeriksa pintu
          </li>
          <li>Kesulitan menghentikan perilaku kompulsif, bahkan jika mereka sadar perilaku itu berlebihan</li>
        </ul>
      </div>

      <!-- 7 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px] max-w-[24rem]">Post-Traumatic
          Stress
          Disorder (PTSD)</h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Muncul setelah mengalami atau menyaksikan peristiwa traumatis (kecelakaan, kekerasan, bencana)</li>
          <li>Kilas balik atau mimpi buruk terkait kejadian traumatis</li>
          <li>
            Menghindari situasi yang mengingatkan pada kejadian tersebut
          </li>
          <li>
            Kewaspadaan berlebihan, mudah terkejut, dan masalah tidur
          </li>
          <li>
            Perasaan terpisah dari orang lain atau emosi yang datar
          </li>
        </ul>
      </div>

      <!-- 8 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[33px] pb-6 leading-[35px]">Gangguan Kepribadian
          (Personality Disorders)
        </h1>

        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Borderline Personality Disorder: Emosi yang tidak stabil, ketakutan ditinggalkan, impulsif, hubungan
            yang intens</li>
          <li>
            Antisosial Personality Disorder: Kurangnya empati, perilaku impulsif, pelanggaran hak orang lain
          </li>
          <li>
            Narsistik Personality Disorder: Pandangan berlebihan terhadap diri sendiri, kebutuhan akan pujian, kurang
            empati
          </li>
        </ul>
      </div>

      <!-- 9 -->
      <div
        class="bg-[#E0F1D0] rounded-3xl px-6 py-8 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out">
        <h1 class="text-center font-cormorant-sc font-bold text-[32px] pb-6 leading-[35px]">Attention Deficit
          Hyperactivity Disorder
        </h1>
        <ul class="list-disc pl-5 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify">
          <li>Kesulitan dalam fokus, perhatian yang mudah teralihkan</li>
          <li>Perilaku impulsif dan hiperaktif</li>
          <li>Kesulitan dalam menyelesaikan tugas atau mengikuti instruksi</li>
          <li>Cenderung mudah bosan dan sering berpindah dari satu aktivitas ke aktivitas lain</li>
        </ul>
      </div>

      <!-- 10 -->
      <div
        class="bg-[#E0F1D0] items-center rounded-3xl px-6 py-12 flex flex-col shadow-md hover:scale-105 hover:shadow-xl transition duration-200 ease-in-out col-span-3 max-w-[42rem] mx-auto">
        <h1 class="text-center font-cormorant-sc font-bold text-[35px] pb-6 leading-[35px]">Gangguan
          Disosiatif</h1>
        <ul class="list-disc pl-12 px-2 space-y-2 font-cormorant-garamond text-xl font-bold text-justify mr-4">
          <li>Kehilangan identitas atau perasaan terputus dari diri sendiri</li>
          <li>Kehilangan ingatan terkait peristiwa atau detail diri</li>
          <li>Perubahan kepribadian atau memiliki kepribadian yang berbeda di waktu-waktu tertentu</li>
        </ul>
      </div>

    </div>
  </section>


  <?php include 'src/footer.php'; ?>
  <script src="js/form.js?v=<?php echo time(); ?>"></script>
</body>

</html>