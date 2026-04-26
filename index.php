<?php
$events = [
    ["id" => 3, "title" => "حفل الموسيقى الكلاسيكية", "description" => "أمسية موسيقية رائعة يقدمها أوركسترا الجامعة بأعمال كلاسيكية عالمية.", "category" => "موسيقى", "event_date" => "2026-05-10", "location" => "المسرح الجامعي",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/de003a461_generated_image.png"],
    ["id" => 4, "title" => "يوم العائلة الجامعي", "description" => "فعالية ممتعة تشمل ألعاباً وفقرات ترفيهية وعروضاً مسرحية.", "category" => "عائلي", "event_date" => "2026-05-12", "location" => "الحديقة المركزية بالجامعة",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/a7fd20098_generated_image.png"],
    ["id" => 1, "title" => "ندوة التراث الثقافي", "description" => "ندوة تستعرض التراث الثقافي العربي وأهميته في بناء هوية الجيل الحديث.", "category" => "ثقافة", "event_date" => "2026-05-03", "location" => "قاعة الاحتفالات",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/f6506932f_generated_image.png"],
    ["id" => 2, "title" => "بطولة كرة القدم الجامعية", "description" => "بطولة رياضية تضم أفضل الفرق الجامعية في منافسة قوية ومثيرة.", "category" => "رياضة", "event_date" => "2026-05-08", "location" => "ملعب الجامعة الرياضي",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/90dfd745f_generated_image.png"],
    ["id" => 5, "title" => "معرض الفنون التشكيلية", "description" => "معرض سنوي يضم أعمال طلاب كلية الفنون الجميلة من رسم ونحت وتصوير فوتوغرافي.", "category" => "فن", "event_date" => "2026-05-15", "location" => "معرض الجامعة للفنون",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/2996da2d8_generated_image.png"],
    ["id" => 6, "title" => "محاضرة: مستقبل الذكاء الاصطناعي في التعليم", "description" => "محاضرة تفاعلية تناقش تأثير الذكاء الاصطناعي على مستقبل التعليم الجامعي.", "category" => "تعليم", "event_date" => "2026-05-18", "location" => "قاعة المؤتمرات الكبرى",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/803b4a217_generated_image.png"],
];

$slider = [
    ["id" => 2, "title" => "بطولة كرة القدم الجامعية", "desc" => "منافسة قوية بين أفضل الفرق الجامعية في أجواء حماسية.",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/90dfd745f_generated_image.png"],
    ["id" => 3, "title" => "حفل الموسيقى الكلاسيكية", "desc" => "أمسية موسيقية يقدمها أوركسترا الجامعة بأعمال عالمية.",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/de003a461_generated_image.png"],
    ["id" => 6, "title" => "محاضرة مستقبل الذكاء الاصطناعي", "desc" => "نقاش حول تأثير الذكاء الاصطناعي على التعليم الجامعي.",
     "image" => "https://media.base44.com/images/public/69ebc315e6975736a562f26c/803b4a217_generated_image.png"],
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>دليل فعاليات الجامعة الافتراضية</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href__="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-white text-gray-900 min-h-screen">

  <!-- Navbar -->
  <nav class="bg-black text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between h-16">
      <div class="flex items-center gap-4">
        <img src="https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/capture_20260424205820493(1).bmp"
             class="w-10 h-10 rounded-full object-cover" />
        <a href__="index.php" class="text-lg font-bold flex items-center gap-2">
          <i class="fas fa-graduation-cap text-xl"></i>
          <span>دليل فعاليات الجامعة</span>
        </a>
      </div>
      <ul class="hidden md:flex items-center gap-6">
        <li><a href__="index.php" class="border-b-2 border-white font-semibold">الرئيسية</a></li>
        <li><a href__="events.php" class="hover:text-gray-300 transition">الفعاليات</a></li>
        <li><a href__="about.php" class="hover:text-gray-300 transition">عن الدليل</a></li>
        <li><a href__="contact.php" class="hover:text-gray-300 transition">اتصل بنا</a></li>
        <li><a href__="admin/login.php" class="bg-white text-black px-3 py-1 rounded hover:bg-gray-200 transition">لوحة التحكم</a></li>
      </ul>
      <button class="md:hidden p-2"><i class="fas fa-bars text-white text-2xl"></i></button>
    </div>
  </nav>

  <main class="max-w-7xl mx-auto px-6 py-12">

    <!-- السلايدر -->
    <div class="relative w-full h-72 md:h-96 overflow-hidden rounded-xl shadow-lg mb-12">
      <?php foreach ($slider as $i => $slide): ?>
      <div class="slide absolute inset-0 transition-opacity duration-700 <?= $i === 0 ? 'opacity-100' : 'opacity-0' ?>">
        <img src="<?= $slide['image'] ?>" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-start px-8 md:px-16 text-white">
          <h2 class="text-2xl md:text-4xl font-bold mb-3"><?= $slide['title'] ?></h2>
          <p class="text-sm md:text-lg mb-4"><?= $slide['desc'] ?></p>
          <a href__="event.php?id=<?= $slide['id'] ?>" class="bg-white text-black px-5 py-2 rounded font-semibold hover:bg-gray-200 transition">عرض التفاصيل</a>
        </div>
      </div>
      <?php endforeach; ?>

      <button id="prevSlide" class="absolute left-3 top-1/2 -translate-y-1/2 bg-black bg-opacity-40 text-white p-3 rounded-full hover:bg-opacity-60">
        <i class="fas fa-chevron-right"></i>
      </button>
      <button id="nextSlide" class="absolute right-3 top-1/2 -translate-y-1/2 bg-black bg-opacity-40 text-white p-3 rounded-full hover:bg-opacity-60">
        <i class="fas fa-chevron-left"></i>
      </button>
    </div>

    <!-- التصنيفات -->
    <section class="mb-12">
      <h2 class="text-xl font-semibold mb-6">التصنيفات</h2>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6">
        <a href__="events.php?category=فن" class="flex flex-col items-center px-4 py-3 rounded-lg border border-pink-300 text-pink-700 bg-pink-100 hover:bg-pink-200 transition shadow">
          <span class="text-3xl mb-2">🎨</span> فن
        </a>
        <a href__="events.php?category=تعليم" class="flex flex-col items-center px-4 py-3 rounded-lg border border-orange-300 text-orange-700 bg-orange-100 hover:bg-orange-200 transition shadow">
          <span class="text-3xl mb-2">🎓</span> تعليم
        </a>
        <a href__="events.php?category=عائلي" class="flex flex-col items-center px-4 py-3 rounded-lg border border-yellow-300 text-yellow-700 bg-yellow-100 hover:bg-yellow-200 transition shadow">
          <span class="text-3xl mb-2">👨‍👩‍👧</span> عائلي
        </a>
        <a href__="events.php?category=موسيقى" class="flex flex-col items-center px-4 py-3 rounded-lg border border-purple-300 text-purple-700 bg-purple-100 hover:bg-purple-200 transition shadow">
          <span class="text-3xl mb-2">🎵</span> موسيقى
        </a>
        <a href__="events.php?category=رياضة" class="flex flex-col items-center px-4 py-3 rounded-lg border border-green-300 text-green-700 bg-green-100 hover:bg-green-200 transition shadow">
          <span class="text-3xl mb-2">⚽</span> رياضة
        </a>
        <a href__="events.php?category=ثقافة" class="flex flex-col items-center px-4 py-3 rounded-lg border border-blue-300 text-blue-700 bg-blue-100 hover:bg-blue-200 transition shadow">
          <span class="text-3xl mb-2">📚</span> ثقافة
        </a>
      </div>
    </section>

    <!-- أحدث الفعاليات -->
    <section>
      <h2 class="text-xl font-semibold mb-6">أحدث الفعاليات</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($events as $event): ?>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
          <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="h-48 object-cover w-full" />
          <div class="p-4 flex flex-col flex-1">
            <span class="inline-block bg-indigo-200 text-indigo-800 text-xs px-2 py-1 rounded mb-2 self-start"><?= $event['category'] ?></span>
            <h3 class="font-bold text-lg text-gray-900 mb-2"><?= $event['title'] ?></h3>
            <p class="text-gray-700 text-sm mb-2 flex-grow"><?= $event['description'] ?></p>
            <div class="flex justify-between text-xs text-gray-500 mt-4">
              <span>📅 <?= $event['event_date'] ?></span>
              <span>📍 <?= $event['location'] ?></span>
            </div>
            <a href__="event.php?id=<?= $event['id'] ?>" class="mt-4 inline-block bg-black text-white text-center py-2 rounded hover:bg-gray-800 transition">التفاصيل</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-6">
        <a href__="events.php" class="inline-block bg-gray-800 text-white rounded px-5 py-2 hover:bg-gray-900 transition">عرض الكل</a>
      </div>
    </section>

  </main>

  <footer class="bg-gray-900 text-white py-8 mt-20">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
      <div>
        <div class="flex items-center gap-2 mb-4">
          <i class="fas fa-graduation-cap text-2xl"></i>
          <span class="text-xl font-semibold">دليل فعاليات الجامعة</span>
        </div>
        <p class="text-gray-400">منصة شاملة لعرض وإدارة فعاليات الجامعة الافتراضية</p>
      </div>
      <div>
        <h4 class="font-semibold mb-4">روابط سريعة</h4>
        <ul class="space-y-2 text-gray-400">
          <li><a href__="index.php" class="hover:text-white">الرئيسية</a></li>
          <li><a href__="events.php" class="hover:text-white">الفعاليات</a></li>
          <li><a href__="about.php" class="hover:text-white">عن الدليل</a></li>
          <li><a href__="contact.php" class="hover:text-white">اتصل بنا</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-semibold mb-4">تواصل معنا</h4>
        <p><i class="fas fa-map-marker-alt text-red-500"></i> أوتستراد المزة، دمشق، سوريا</p>
        <p class="mt-2"><i class="fas fa-phone-alt text-green-500"></i> +963 11 2113469</p>
        <p class="mt-2"><i class="fas fa-envelope text-blue-500"></i> info@svuonline.org</p>
      </div>
    </div>
    <div class="text-center text-gray-500 mt-6">©️ 2026 دليل فعاليات الجامعة. جميع الحقوق محفوظة.</div>
  </footer>

  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide");
    function showSlide(i) {
      slides.forEach((s, idx) => s.style.opacity = idx === i ? "1" : "0");
    }
    document.getElementById("nextSlide").onclick = () => { currentSlide = (currentSlide + 1) % slides.length; showSlide(currentSlide); };
    document.getElementById("prevSlide").onclick = () => { currentSlide = (currentSlide - 1 + slides.length) % slides.length; showSlide(currentSlide); };
    setInterval(() => { currentSlide = (currentSlide + 1) % slides.length; showSlide(currentSlide); }, 5000);
  </script>

</body>
</html>
