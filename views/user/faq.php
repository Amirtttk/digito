<main class="mt-0 md:mt-8">
    <div class="mx-4 md:mx-16 mb-8 md:my-12 border border-zinc-200 rounded-2xl p-4 md:p-8">
      <p class="text-2xl md:text-3xl font-yekanBakhRegular text-zinc-800 text-center mb-10">
        سوالات متداول
      </p>
      <div class="space-y-2">
          <?php
          $getAllFaq  = getAllFaq('1');
          if ($getAllFaq){
              foreach ($getAllFaq as $AllFaq){
                  ?>
                  <div class="border border-zinc-200 px-2 py-4 rounded-xl">
                      <button class="w-full cursor-pointer text-right leading-7 md:leading-8 text-zinc-800 py-1 text-sm md:text-base md:py-2 px-3 md:px-4 flex justify-between items-center focus:outline-none" onclick="toggleFAQ(<?= $AllFaq['id'] ?>)">
                <span>
                  <?= $AllFaq['title'] ?>
                </span>
                          <span class="icon text-zinc-600">+</span>
                      </button>
                      <div id="faq<?= $AllFaq['id'] ?>" class="faq-content bg-gray-50 text-zinc-700 rounded-md text-xs md:text-sm leading-7 md:leading-8">
                          <?= $AllFaq['description'] ?>
                      </div>
                  </div>
                  <?php
              }
          }
          ?>
      </div>
    </div>
  </main>
<?php
$pageTitle = "سوالات متداول";
$pageScript = "

";
$pageLink = "
";
?>