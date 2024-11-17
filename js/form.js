const questions = [
  "Apakah Anda merasa khawatir tanpa alasan yang jelas dan tidak dapat menjelaskan penyebabnya?",
  "Apakah Anda sering merasa sedih tanpa sebab yang nyata dan sulit untuk mengatasi perasaan tersebut?",
  "Apakah Anda mengalami kesulitan tidur sehingga merasa tidak segar di pagi hari?",
  "Apakah Anda merasa lelah atau kekurangan energi hampir setiap hari, bahkan setelah cukup istirahat?",
  "Apakah Anda merasa kehilangan minat atau tidak lagi menikmati aktivitas yang sebelumnya Anda sukai?",
  "Apakah Anda kesulitan untuk berkonsentrasi atau membuat keputusan sehari-hari?",
  "Apakah Anda sering merasa putus asa atau memiliki pandangan pesimis tentang masa depan yang sulit berubah?",
  "Apakah Anda memiliki masalah dengan selera makan, seperti terlalu banyak atau terlalu sedikit makan?",
  "Apakah Anda pernah merasa lebih baik jika menghindari kontak sosial atau kegiatan sosial?",
];

let currentQuestion = 0;
let answers = Array(questions.length).fill(null);

function updateQuestion() {
  document.getElementById("questionText").textContent =
    questions[currentQuestion];

  const options = document.getElementsByName("answer");
  options.forEach((option) => (option.checked = false));

  if (answers[currentQuestion] !== null) {
    options[answers[currentQuestion]].checked = true;
  }

  document.getElementById("prevButton").disabled = currentQuestion === 0;
  document.getElementById("nextButton").textContent =
    currentQuestion === questions.length - 1 ? "Selesai" : "Selanjutnya";
}

function nextQuestion() {
  const selectedOption = document.querySelector('input[name="answer"]:checked');
  if (selectedOption) {
    answers[currentQuestion] = parseInt(selectedOption.value);
    if (currentQuestion < questions.length - 1) {
      currentQuestion++;
      updateQuestion();
    } else {
      calculateResult();
    }
  } else {
    alert("Silakan pilih jawaban terlebih dahulu.");
  }
}

function prevQuestion() {
  if (currentQuestion > 0) {
    currentQuestion--;
    updateQuestion();
  }
}

function calculateResult() {
  const totalScore = answers.reduce((a, b) => a + b, 0);
  let resultText = "";

  if (totalScore <= 7) {
    resultText =
      "Tingkat Stres Rendah. Anda tampaknya tidak mengalami tekanan yang berarti. Tetaplah menjaga keseimbangan dan gaya hidup sehat.";
  } else if (totalScore <= 15) {
    resultText =
      "Tingkat Stres Sedang. Anda mungkin merasa sedikit terbebani. Cobalah meluangkan waktu untuk relaksasi dan aktivitas menyenangkan.";
  } else if (totalScore <= 23) {
    resultText =
      "Tingkat Stres Tinggi. Anda mungkin mengalami stres yang signifikan. Pertimbangkan untuk berbicara dengan seseorang atau mencari bantuan profesional.";
  } else {
    resultText =
      "Tingkat Stres Sangat Tinggi. Anda mungkin berada dalam situasi stres berat. Sangat disarankan untuk mencari bantuan profesional.";
  }

  // Hide question container and show result
  document.getElementById("resultContainer").classList.remove("hidden");
  document.getElementById("resultText").textContent = resultText;

  // Hide navigation buttons and show restart button
  document.getElementById("prevButton").classList.add("hidden");
  document.getElementById("nextButton").classList.add("hidden");
  document.getElementById("restartButton").classList.remove("hidden");
}

function restartQuiz() {
  currentQuestion = 0;
  answers = Array(questions.length).fill(null);

  // Show question container and hide result container
  document.getElementById("resultContainer").classList.add("hidden");
  document.getElementById("questionContainer").classList.remove("hidden");

  // Reset the result text to empty or a default message
  document.getElementById("resultText").textContent =
    "Silahkan isi kuisioner untuk mengetahui keadaan mental anda.";

  // Hide restart button and show navigation buttons
  document.getElementById("prevButton").classList.remove("hidden");
  document.getElementById("nextButton").classList.remove("hidden");
  document.getElementById("restartButton").classList.add("hidden");

  updateQuestion(); // Reset to the first question
}

// Inisialisasi tampilan pertanyaan pertama
updateQuestion();

function displayAdvice(feeling) {
  const adviceOutput = document.getElementById("advice-output");

  switch (feeling) {
    case "happy":
      adviceOutput.textContent =
        "Senang melihat Anda bahagia! Terus nikmati hari Anda.";
      break;
    case "calm":
      adviceOutput.textContent =
        "Rileks saja, semuanya pasti akan berjalan dengan baik.";
      break;
    case "sad":
      adviceOutput.textContent =
        "Setiap hujan pasti ada pelangi, jangan ragu untuk berbicara dengan seseorang yang Anda percayai.";
      break;
    case "confuse":
      adviceOutput.textContent = "Bingung itu biasa, jalan keluar selalu ada.";
      break;
    case "thinking":
      adviceOutput.textContent = "Mikir dulu, nanti juga ketemu jawabannya.";
      break;
    case "anxious":
      adviceOutput.textContent =
        "Ambil napas dalam-dalam, luangkan waktu untuk relaksasi. Jangan khawatir, segalanya akan baik-baik saja.";
      break;
    case "neutral":
      adviceOutput.textContent =
        "Jaga keseimbangan dan nikmati waktu dengan orang-orang terdekat.";
      break;
    case "tired":
      adviceOutput.textContent =
        "Kalau lelah, istirahat sejenak. Besok harus lebih semangat lagi!";
      break;
    case "disappointed":
      adviceOutput.textContent =
        "Terkadang, kecewa adalah langkah awal untuk lebih baik.";
      break;
    case "angry":
      adviceOutput.textContent =
        "Cobalah untuk merenung dan tenangkan diri. Semua akan baik-baik saja.";
      break;
    default:
      adviceOutput.textContent = "";
  }
}

window.onload = function () {
  // Setel teks awal pada element resultText
  document.getElementById("resultText").textContent =
    "Silahkan isi kuisioner untuk mengetahui keadaan mental anda.";

  document.getElementById("advice-output").textContent =
    "Pencet Emoji diatas...";

  // Inisialisasi tampilan kuisioner dengan pertanyaan pertama
  updateQuestion();
};
