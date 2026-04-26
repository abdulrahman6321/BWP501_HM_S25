<?php
$eventsData = [
    ["id" => 1, "title" => "ندوة التراث الثقافي", "description" => "ندوة تستعرض التراث الثقافي العربي وأهميته في بناء هوية الجيل الحديث.", "category" => "ثقافة", "event_date" => "2026-05-03", "location" => "قاعة الاحتفالات", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/ندوة%20التراث%20الثقافي.jpeg"],
    ["id" => 2, "title" => "بطولة كرة القدم الجامعية", "description" => "بطولة رياضية تضم أفضل الفرق الجامعية في منافسة قوية ومثيرة.", "category" => "رياضة", "event_date" => "2026-05-08", "location" => "ملعب الجامعة الرياضي", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/بطولة%20كرة%20القدم%20الجامعية%20.jpeg"],
    ["id" => 3, "title" => "حفل الموسيقى الكلاسيكية", "description" => "أمسية موسيقية رائعة يقدمها أوركسترا الجامعة بأعمال كلاسيكية عالمية.", "category" => "موسيقى", "event_date" => "2026-05-10", "location" => "المسرح الجامعي", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/1.jpg"],
    ["id" => 4, "title" => "يوم العائلة الجامعي", "description" => "فعالية ممتعة تشمل ألعاباً وفقرات ترفيهية وعروضاً مسرحية.", "category" => "عائلي", "event_date" => "2026-05-12", "location" => "الحديقة المركزية بالجامعة", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/يوم%20العائلة%20الجامعي.jpeg"],
    ["id" => 5, "title" => "معرض الفنون التشكيلية", "description" => "معرض سنوي يضم أعمال طلاب كلية الفنون الجميلة من رسم ونحت وتصوير فوتوغرافي.", "category" => "فن", "event_date" => "2026-05-15", "location" => "معرض الجامعة للفنون", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/1.jpg"],
    ["id" => 6, "title" => "محاضرة: مستقبل الذكاء الاصطناعي في التعليم", "description" => "محاضرة تفاعلية تناقش تأثير الذكاء الاصطناعي على مستقبل التعليم الجامعي.", "category" => "تعليم", "event_date" => "2026-05-18", "location" => "قاعة المؤتمرات الكبرى", "image" => "https://raw.githubusercontent.com/abdulrahman6321/BWP501_HM_S25/refs/heads/main/محاضرة%20مستقبل%20الذكاء%20الاصطناعي%20في%20التعليم%20.jpeg"],
];

$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$filtered = array_filter($eventsData, function($e) use ($selectedCategory, $search) {
    $matchCat = $selectedCategory === '' || $e['category'] === $selectedCategory;
    $matchSearch = $search === '' || mb_strpos($e['title'], $search) !== false || mb_strpos($e['description'], $search) !== false;
    return $matchCat && $matchSearch;
});
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>جميع الفعاليات - دليل الجامعة</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href__="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">

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
        <li><a href__="index.php" class="hover:text-gray-300 transition">الرئيسية</a></li>
        <li><a href__="events.php" class="border-b-2 border-white font-semibold">الفعاليات</a></li>
        <li><a href__="about.php" class="hover:text-gray-300 transition">عن الدليل</a></li>
        <li><a href__="contact.php" class="hover:text-gray-300 transition">اتصل بنا</a></li>
        <li><a href__="admin/login.php" class="bg-white text-black px-3 py-1 rounded hover:bg-gray-200 transition">لوحة التحكم</a></li>
      </ul>
    </div>
  </nav>

  <div class="max-w-7xl mx-auto px-4 py-12">

    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">جميع الفعاليات</h1>
      <p class="text-xl text-gray-600">اكتشف أحدث الفعاليات الجامعية</p>
    </div>

    <!-- فلتر -->
    <form method="GET" action="events.php" class="bg-white rounded-2xl shadow-lg p-6 mb-10 border border-gray-100">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
        <div class="relative md:col-span-2">
          <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
          <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="ابحث عن فعالية..."
                 class="w-full pl-4 pr-10 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
        </div>
        <select name="category" class="w-full p-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500">
          <option value="">كل التصنيفات</option>
          <?php foreach (['ثقافة','رياضة','موسيقى','عائلي','تعليم','فن'] as $cat): ?>
          <option value="<?= $cat ?>" <?= $selectedCategory === $cat ? 'selected' : '' ?>><?= $cat ?></option>
          <?php endforeach; ?>
        </select>
        <div class="flex gap-2">
          <button type="submit" class="flex-1 bg-black text-white px-4 py-3 rounded-xl hover:bg-gray-800 transition font-medium">بحث</button>
          <a href__="events.php" class="flex-1 bg-gray-200 text-gray-700 px-4 py-3 rounded-xl hover:bg-gray-300 transition font-medium text-center">إعادة تعيين</a>
        </div>
      </div>
    </form>

    <!-- الفعاليات -->
    <?php if (count($filtered) === 0): ?>
    <div class="text-center py-20">
      <i class="fas fa-calendar-times text-6xl text-gray-300 mb-6"></i>
      <h3 class="text-2xl font-bold text-gray-700 mb-2">لا توجد فعاليات</h3>
      <p class="text-gray-600">لا توجد فعاليات مطابقة لمعايير البحث</p>
    </div>
    <?php else: ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($filtered as $event): ?>
      <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col">
        <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="h-48 w-full object-cover">
        <div class="p-4 flex flex-col flex-1">
          <span class="inline-block bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded mb-2 self-start"><?= $event['category'] ?></span>
          <h3 class="font-bold text-lg mb-2"><?= $event['title'] ?></h3>
          <p class="text-gray-600 text-sm mb-3 flex-grow"><?= $event['description'] ?></p>
          <div class="flex justify-between text-xs text-gray-500 mb-3">
            <span>📅 <?= $event['event_date'] ?></span>
            <span>📍 <?= $event['location'] ?></span>
          </div>
          <a href__="event.php?id=<?= $event['id'] ?>" class="block bg-black text-white text-center py-2 rounded hover:bg-gray-800 transition">عرض التفاصيل</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

  </div>

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

</body>
</html>
