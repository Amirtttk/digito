<?php
$getOneProductBySlug = getOneProductBySlug(GET('code'),GET('slug'));
$getCategoryById = getCategoryById($getOneProductBySlug['category_id']);
$basePath = "public/images/products/";
$mainImage = $getOneProductBySlug['main_image'] ?? ($images[0] ?? '');
$thumbnail = !empty($mainImage) ? "public/images/products/{$mainImage}" : '';
$images = json_decode($getOneProductBySlug['images'], true);
if (empty($images) && !empty($mainImage)) {
    $images = [$mainImage];
}
$priceData = json_decode($getOneProductBySlug['price'], true);
?>
<main class="mt-0 md:mt-8">
    <div class="px-4 md:px-8 md:mt-10 pb-20">
      <div class="flex flex-col lg:flex-row gap-8">
        <!-- photo -->
        <div class="lg:w-4/12 relative">
            <div class="absolute  left-10 top-0 bg-secondary-100 border-b-[0.8em] border-b-transparent z-20 text-sm font-yekanBakhRegular text-center rounded-tl-[10px] rounded-tr-[6px] pr-3 pl-5 py-2 bg-primary-500 text-white" style="clip-path: polygon(0.5em 0, 100% 0, 100% 100%, calc(50% + 0.5em/2) calc(100% - 0.8em), 0.5em 100%, 0.5em 0.5em);">
                شگفت انگیز
            </div>
            <div class="flex gap-x-5 pr-10">
                <?php
                if (isset($_SESSION['user_sending'])) {
                $checkInProductFavourites = checkInProductFavourites($getOneProductBySlug['id'], $_SESSION['user_sending']);
                if ($checkInProductFavourites) {
                ?>
              <a id="mystar<?php echo $getOneProductBySlug['id'] ?>" onclick="removeFromFavourites(<?php echo $_SESSION['user_sending'] ?>,<?php echo $getOneProductBySlug['id'] ?>, <?php echo $checkInProductFavourites['id'] ?>)" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                  <svg id="addToFavorites" class="transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                  <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                  حذف از علاقه مندی ها
                  </div>
                </div>
              </a>
                <?php
                }else{
                    ?>
                    <a id="mystar<?php echo $getOneProductBySlug['id'] ?>" onclick="AddToFavourites( <?php echo $_SESSION['user_sending'] ?> , <?php echo $getOneProductBySlug['id'] ?>)" class="relative">
                        <div class="group cursor-pointer relative inline-block text-center">
                            <svg class="fill-zinc-700 hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                            <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                                افزودن به علاقه مندی ها
                            </div>
                        </div>
                    </a>
                <?php
                }
                }else{
                    ?>
                    <a onclick="AddToFavourites(null, null)" class="relative">
                        <div class="group cursor-pointer relative inline-block text-center">
                            <svg class="fill-zinc-700 hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                            <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                                افزودن به علاقه مندی ها
                                <svg id="addToFavorites" class="transition-all fill-red-500" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#000000" viewBox="0 0 256 256">
                                    <path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path>
                                </svg>                  </div>
                        </div>
                    </a>
                <?php
                }
                ?>
              <a data-copy="oSDIhodsgs123" href="#oSDIhodsgs123" class="relative">
                <div class="group cursor-pointer relative inline-block text-center">
                    <svg class="fill-zinc-700 hover:fill-zinc-800 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
                        <path d="M176,160a39.89,39.89,0,0,0-28.62,12.09l-46.1-29.63a39.8,39.8,0,0,0,0-28.92l46.1-29.63a40,40,0,1,0-8.66-13.45l-46.1,29.63a40,40,0,1,0,0,55.82l46.1,29.63A40,40,0,1,0,176,160Zm0-128a24,24,0,1,1-24,24A24,24,0,0,1,176,32ZM64,152a24,24,0,1,1,24-24A24,24,0,0,1,64,152Zm112,72a24,24,0,1,1,24-24A24,24,0,0,1,176,224Z"></path>
                    </svg>
                    <div class="opacity-0 w-28 transition-all bg-zinc-800 text-white text-center text-xs rounded-lg py-2 absolute z-10 -left-11 group-hover:opacity-100 px-3 pointer-events-none">
                        اشتراک گذاری
                        <svg class="absolute text-black h-2 w-full left-0 bottom-full rotate-180" x="0px" y="0px" viewBox="0 0 255 255">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div>
                </div>
              </a>
            </div>
            <div class="relative">
              <div class="flex gap-4 justify-center">
                  <div id="zoomBox" class="hidden absolute -left-56 top-0 md:size-64 bg-no-repeat bg-cover border-2 border-gray-300 rounded-md bg-white"></div>
                  <div class="relative overflow-hidden group">
                      <img id="mainImage" src="<?= $thumbnail ? "../../" . $thumbnail : '' ?>"
                          class="w-full max-w-96 object-cover rounded-lg"
                          alt="عکس محصول">
                      <div id="zoomLens" class="hidden absolute w-20 h-20 bg-gray-300 opacity-30 pointer-events-none"></div>
                  </div>
              </div>
              <div class="flex justify-start gap-2 mt-4 overflow-x-auto pb-2">
                  <?php foreach ($images as $img):
                      $imgPath = $basePath . $img;
                      ?>
                      <img src="<?= "../../" . $imgPath ?>"
                           class="w-20 h-20 object-cover rounded-md cursor-pointer border border-zinc-200 hover:border-zinc-400 opacity-80 hover:opacity-100 transition-all"
                           onclick="changeImage(this)">
                  <?php endforeach; ?>
              </div>
            </div>
        </div>
        <!-- info -->
        <div class="lg:w-5/12">
          <div class="mb-7 text-xs flex flex-wrap space-y-2 md:space-y-0 items-center gap-x-2 opacity-90">
              <?php
              $categoryPath = getFullCategoryPath($getOneProductBySlug['category_id']);
              if ($categoryPath) {
                  $iconsvg = '<svg class="size-3 fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                    <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z" />
                </svg>';
                  echo '<nav class="flex items-center gap-2 text-sm">';
                  if (!empty($categoryPath['main'])) {
                      echo '<a href="#" class="text-zinc-500 hover:text-primary-500 transition">'
                          . htmlspecialchars($categoryPath['main']['title'])
                          . '</a>' . $iconsvg;
                  }
                  if (!empty($categoryPath['parent'])) {
                      echo '<a href="#" class="text-zinc-500 hover:text-primary-500 transition">'
                          . htmlspecialchars($categoryPath['parent']['title'])
                          . '</a>' . $iconsvg;
                  }
                  echo '<a href="#" class="text-zinc-800 font-semibold">'
                      . htmlspecialchars($categoryPath['child']['title'])
                      . '</a>';

                  echo '</nav>';
              } else {
                  echo "<p class='text-red-500 text-sm'>دسته‌ای برای این محصول یافت نشد.</p>";
              }
              ?>
            <svg class="size-3 fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#3d3d3d" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                <a class="text-primary-500" href="">
                    <?= $getOneProductBySlug['title'] ?>
                </a>
          </div>
              <div class="text-zinc-800 md:text-2xl font-semibold leading-7">
              <?= $getOneProductBySlug['title'] ?>
              </div>
              <div class="text-zinc-400 text-xs md:text-sm mt-4">
                  <?= $getOneProductBySlug['english_title'] ?? '' ?>
              </div>
              <a href="" class="flex items-start gap-x-1 text-sm text-primary-500 mt-3">
                <svg class="fill-primary-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" viewBox="0 0 256 256"><path d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path></svg>
                <span>
                  <span>
                    2
                  </span>
                  <span>
                    دیدگاه
                  </span>
                </span>
              </a>
              <div class="mt-8 text-zinc-700">
                ویژگی های محصول:
              </div>
              <div class="grid grid-cols-2 md:grid-cols-3 max-w-md py-3 mb-5 gap-3">
                  <?php
                  $technicalData = $getOneProductBySlug['technical'] ?? null;
                  $technicalFeatures = [];
                  $displayCount = 6;
                  if (is_string($technicalData) && !empty($technicalData)) {
                      $decoded = json_decode($technicalData, true);
                      if (is_array($decoded)) {
                          $technicalFeatures = $decoded;
                      }
                  } elseif (is_array($technicalData)) {
                      $technicalFeatures = $technicalData;
                  }
                  if (!empty($technicalFeatures) && is_array($technicalFeatures)) {
                      for ($i = 0; $i < $displayCount; $i++) {
                          if (isset($technicalFeatures[$i])) {
                              $feature = $technicalFeatures[$i];
                              $featureName = $feature['name'] ?? 'ویژگی نامشخص:';
                              $featureValue = $feature['value'] ?? 'مقدار ندارد';
                              ?>
                              <div class="flex flex-col gap-y-1 justufy-center border border-zinc-200 rounded-xl px-2 py-3">
                                  <div class="text-zinc-500 text-xs">
                                      <?php echo htmlspecialchars(trim($featureName)); ?>
                                  </div>
                                  <div class="text-zinc-700 text-sm">
                                      <?php echo htmlspecialchars(trim($featureValue)); ?>
                                  </div>
                              </div>

                              <?php
                          }
                      }
                  }
                  ?>
              </div>
              <div class="flex gap-x-2 mt-2 pt-2 text-zinc-500 text-xs md:text-sm border-t border-t-zinc-200 leading-6">
                <svg class="fill-zinc-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm16-40a8,8,0,0,1-8,8,16,16,0,0,1-16-16V128a8,8,0,0,1,0-16,16,16,0,0,1,16,16v40A8,8,0,0,1,144,176ZM112,84a12,12,0,1,1,12,12A12,12,0,0,1,112,84Z"></path></svg>
                درخواست مرجوع کردن کالا در گروه لپ تاپ با دلیل "انصراف از خرید" تنها در صورتی قابل تایید است که کالا در شرایط اولیه باشد (در صورت پلمپ بودن، کالا نباید باز شده باشد).
              </div>
        </div>

          <?php
          if (is_array($priceData)) {
              ?>
          <div class="lg:w-3/12">
              <div class="lg:mt-8 mb-8">
                  <div class="text-zinc-700">
                      رنگ:
                  </div>
                  <ul class="flex flex-wrap gap-2">
          <?php
              foreach ($priceData as $index => $priceItem){
                  $color = $priceItem['color'];
                  $titleColor = $priceItem['titleColor'];
                  $count = (int)$priceItem['count'];
                  $disabled = $count <= 0 ? 'disabled' : '';
                  $unavailableClass = $count <= 0 ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer';
                  ?>
                  <li>
                      <input type="radio" id="color_<?= $index ?>" value="<?= htmlspecialchars(json_encode($priceItem)) ?>" name="colorSelect" <?= $disabled ?> class="hidden peer" required="">
                      <label for="color_<?= $index ?>"  class="inline-flex items-center justify-center px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-2xl cursor-pointer peer-checked:border-zinc-500 hover:text-gray-600 hover:bg-gray-100">
                          <div class="flex gap-x-2">
                              <div style="background-color: <?php echo htmlspecialchars($color); ?>;" class="w-5 h-5 rounded-full"></div>
                              <?= $priceItem['titleColor'] ?>
                          </div>
                          <?php if ($count <= 0): ?>
                              <span class="text-xs text-red-400 ms-1">(ناموجود)</span>
                          <?php endif; ?>
                      </label>
                  </li>
                  <?php
                  }
                  ?>
                  </ul>
              </div>
          <?php
          }
          ?>
          <div class="p-3 border border-zinc-300 rounded-2xl mx-auto divide-y divide-zinc-200 h-fit">
              <?php
              if ($getOneProductBySlug['garanti']){
                  ?>
                  <div class="flex gap-x-1 items-center text-zinc-600 text-sm pb-5 pt-3">
                      <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path></svg>
                      <div>
                          گارانتی   <?= $getOneProductBySlug['garanti'] ?>
                          ماهه
                      </div>
                  </div>
              <?php
              }
              ?>
            <div class="flex gap-x-1 items-center text-zinc-600 text-sm py-5">
              <svg class="fill-zinc-700" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"></path></svg>
              <div>
               ارسال بر اساس زمان خرید
              </div>
            </div>
            <div class="flex gap-x-1 items-center text-green-500 text-sm py-5">
              <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
              <div>
                رضایت از محصول:
              </div>
              <span>
                95%
              </span>
            </div>
            <div class="flex flex-col justify-center py-5">
              <div id="priceDisplay" class="text-zinc-800 text-left">
                  <?php
                  if (is_array($priceData) && count($priceData) > 0) {
                  $firstPriceItem = $priceData[0]; // اولین آیتم
                  $currentPrice = $firstPriceItem['price'];
                  $discountPrice = $firstPriceItem['discount'];
                  // محاسبه درصد تخفیف اگر تخفیف وجود داشته باشد
                  if ($discountPrice < $currentPrice) {
                  $discountPercent = (1 - ($discountPrice / $currentPrice)) * 100;
                  ?>
                      <div class="text-left text-zinc-400">
                          <span class="font-yekanBakhSemiBold text-xl line-through"><?= number_format($currentPrice) ?></span>
                          <span class="text-xs">تومان</span>
                      </div>
                      <div class="text-zinc-800 text-left">
                          <span class="font-yekanBakhExtraBold text-3xl"><?= number_format($discountPrice) ?></span>
                          <span class="text-xs">تومان</span>
                      </div>
                  <?php
                  }
                  }else{
                      $price = (int)$getOneProductBySlug['price'];
                      $discountPercent = (int)$getOneProductBySlug['token'];
                      $discountedPrice = $price;
                      if ($discountPercent > 0) {
                          $discountedPrice = $price - ($price * $discountPercent / 100);
                      }
                      ?>
                      <?php if ($discountPercent > 0): ?>
                      <div class="text-left text-zinc-400">
                          <span class="font-yekanBakhSemiBold text-xl line-through"><?= number_format($price) ?></span>
                          <span class="text-xs">تومان</span>
                      </div>
                      <div class="text-zinc-800 text-left">
                          <span class="font-yekanBakhExtraBold text-3xl"><?= number_format($discountedPrice) ?></span>
                          <span class="text-xs">تومان</span>
                      </div>
                      <?php else: ?>
                          <div class="text-zinc-800 text-left">
                              <span class="font-yekanBakhExtraBold text-3xl"><?= number_format($discountedPrice) ?></span>
                              <span class="text-xs">تومان</span>
                          </div>
                      <?php endif; ?>
                  <?php
                  }
                  ?>
              </div>
                <?php
                if (is_array($priceData) && count($priceData) > 0) {
                    $firstPriceItem = $priceData[0];
                    $firstCount = (int)$firstPriceItem['count'];
                ?>
                    <div id="stockDisplay" class="text-xs">
                        <?php if ($firstCount <= 2 && $firstCount > 0): ?>
                            <span class="text-red-400">تنها <?= $firstCount ?> عدد در انبار باقی مانده</span>
                        <?php elseif ($firstCount == 0): ?>
                            <span class="text-red-400">ناموجود</span>
                        <?php endif; ?>
                    </div>
                <?php
                }else{
                    $stock = $getOneProductBySlug['stock'] ?? 0;
                    if ($stock <= 2 && $stock >= 0) {
                        ?>
                        <div class="text-xs text-red-400">
                            تنها <?= $stock; ?> عدد در انبار باقی مانده
                        </div>
                        <?php
                    }
                }
              ?>
                <script>
                    document.querySelectorAll('input[name="colorSelect"]').forEach((input) => {
                        input.addEventListener('change', function () {
                            const data = JSON.parse(this.value);
                            const priceBox = document.getElementById('priceDisplay');
                            const stockBox = document.getElementById('stockDisplay');

                            const current = parseFloat(data.price);
                            const discount = parseFloat(data.discount);
                            const count = parseInt(data.count);

                            // 🔹 به‌روزرسانی قیمت
                            let html = '';
                            if (discount < current) {
                                html += `
                <div class="text-left text-zinc-400">
                    <span class="font-yekanBakhSemiBold text-xl line-through">${Intl.NumberFormat().format(current)}</span>
                    <span class="text-xs">تومان</span>
                </div>
                <div class="text-zinc-800 text-left">
                    <span class="font-yekanBakhExtraBold text-3xl">${Intl.NumberFormat().format(discount)}</span>
                    <span class="text-xs">تومان</span>
                </div>
            `;
                            } else {
                                html += `
                <div class="text-zinc-800 text-left">
                    <span class="font-yekanBakhExtraBold text-3xl">${Intl.NumberFormat().format(current)}</span>
                    <span class="text-xs">تومان</span>
                </div>
            `;
                            }
                            priceBox.innerHTML = html;

                            // 🔹 به‌روزرسانی وضعیت موجودی
                            let stockHtml = '';
                            if (count === 0) {
                                stockHtml = `<span class="text-xs text-red-400">ناموجود</span>`;
                            } else if (count <= 2) {
                                stockHtml = `<span class="text-xs text-red-400">تنها ${count} عدد در انبار باقی مانده</span>`;
                            } else {
                                stockHtml = `<span class="text-xs text-zinc-500">موجود در انبار (${count} عدد)</span>`;
                            }

                            stockBox.innerHTML = stockHtml;
                        });
                    });
                </script>

                <div class="quantity-container mt-5 flex h-10 w-full items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                <button class="cursor-pointer" type="button" data-action="increment">
                  <svg class="fill-green-500 size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                </button>
                <input value="1" disabled="" type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm md:text-lg font-yekanBakhExtraBold text-zinc-600 outline-none">
                <button class="cursor-pointer" type="button" data-action="decrement">
                  <svg class="fill-red-500 size-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                </button>
              </div>
            </div>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 transition text-gray-100 rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="hidden lg:block mx-auto w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 opacity-80 cursor-not-allowed transition text-gray-100 rounded-lg">
              محصول موجود نیست!
            </button> -->
          </div>
          <!-- fixed div buy mobile -->
          <div class="fixed flex bottom-0 right-0 lg:hidden bg-white border-t border-t-zinc-300 w-full px-5 py-3 gap-x-2 z-50">
            <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 transition text-gray-100 rounded-lg">
              افزودن به سبد خرید
            </button>
            <!-- <button class="mx-auto 5 w-1/2 px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 opacity-80 cursor-not-allowed transition text-gray-100 rounded-lg">
              محصول موجود نیست!
            </button> -->
            <span class="flex flex-col justify-center items-end w-1/2">
              <div class="text-zinc-700 text-left">
                <span class="font-yekanBakhExtraBold text-2xl">1,200,000</span>
                <span class="text-xs">تومان</span>
              </div>
              <div class="text-xs text-red-400">
                تنها 2 عدد در انبار باقی مانده
              </div>
            </span>
          </div>
        </div>
      </div>
      <div class="flex gap-x-8 mt-20 pb-2 border-b border-zinc-200">
          <a class="text-zinc-600 hover:text-zinc-800 transition" href="#intro">
              معرفی محصول
          </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#details">
          توضیحات
        </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#proper">
          مشخصات
        </a>
        <a class="text-zinc-600 hover:text-zinc-800 transition" href="#comments">
          دیدگاه ها
        </a>
          <a class="text-zinc-600 hover:text-zinc-800 transition" href="#question">
              پرسش و پاسخ
          </a>
      </div>
        <div class="p-4 border-b border-zinc-200" id="intro">
            <p class="text-zinc-800 md:text-lg mb-1 mt-4">
                معرفی محصول
            </p>
            <?= $getOneProductBySlug['description'];?>
        </div>
      <div class="p-4 border-b border-zinc-200" id="details">
          <p class="text-zinc-800 md:text-lg mb-1 mt-4">
              توضیحات محصول
          </p>
      <?= $getOneProductBySlug['description'];?>
      </div>
      <div class="p-4 border-b border-zinc-200" id="proper">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          مشخصات محصول
        </p>
        <div class="text-gray-500 text-sm divide-y divide-zinc-200">
            <?php
            $technicalData = $getOneProductBySlug['technical'] ?? null;
            $technicalFeatures = [];
            if (is_string($technicalData) && !empty($technicalData)) {
                $decoded = json_decode($technicalData, true);
                if (is_array($decoded)) {
                    $technicalFeatures = $decoded;
                }
            } elseif (is_array($technicalData)) {
                $technicalFeatures = $technicalData;
            }
            if (!empty($technicalFeatures) && is_array($technicalFeatures)) {
                foreach ($technicalFeatures as $feature) {
                    if (!is_array($feature) || !isset($feature['name']) || !isset($feature['value'])) {
                        continue;
                    }
                    $featureName = htmlspecialchars(trim($feature['name']));
                    $featureValue = htmlspecialchars(trim($feature['value']));
                    ?>
                    <div class="flex items-center justify-start p-3 pb-6 w-full my-4">
                        <div class="text-sm md:text-base text-zinc-700 w-3/12 font-yekanBakhRegular">
                            <?php echo $featureName; ?>
                        </div>
                        <div class="md:text-lg text-zinc-600 w-9/12 font-yekanBakhExtraBold">
                            <?php echo $featureValue; ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
      </div>
      <div class="p-4 border-b border-zinc-200" id="comments">
        <p class="text-zinc-800 md:text-lg mb-1 mt-4">
          دیدگاه ها
        </p>
        <div class="lg:flex gap-5">
          <div class="lg:w-3/12 py-5">
            <div class="mt-4 mb-2 text-sm text-zinc-700">
              شما هم دیدگاه خود را ثبت کنید
            </div>
            <ul class="grid my-3 gap-5 grid-cols-2">
              <li>
                <input type="radio" id="yes" name="hosting" value="yes" class="hidden peer" required="">
                <label for="yes" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 peer-checked:text-green-500 hover:text-gray-600 hover:bg-gray-100">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    <div class="text-sm">پیشنهاد میشود</div>
                  </div>
                </label>
              </li>
              <li>
                <input type="radio" id="no" name="hosting" value="no" class="hidden peer" required="">
                <label for="no" class="inline-flex items-center justify-center w-full px-2 py-3 text-gray-600 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 peer-checked:text-red-400 hover:text-gray-600 hover:bg-gray-100">                           
                  <div class="flex items-center gap-x-1">
                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    <div class="text-sm">پیشنهاد نمیشود</div>
                  </div>
                </label>
              </li>
            </ul>
            <textarea placeholder="متن دیدگاه" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-zinc-600 w-full bg-white border border-zinc-200 px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
            <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 transition text-gray-100 rounded-lg">
              ارسال دیدگاه
            </button>
          </div>
          <div class="lg:w-9/12 divide-y-2 divide-zinc-300">
            <div class="px-2 pt-5">
              <div class="text-lg text-zinc-700">
                خوب بود ارزش خرید داره
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                <div class="text-xs text-zinc-600">
                  11 بهمن 1402
                </div>
                <div class="text-xs text-zinc-600">
                  امیررضا کریمی
                </div>
                <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                <div class="text-sm text-green-500">پیشنهاد میشود</div>
              </div>
              <div class="mt-2 text-zinc-600 text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="mt-5 pr-3 mr-3 border-r border-zinc-400">
                <div class="text-sm text-zinc-600 md:font-yekanBakhSemiBold">
                    بله با گارانتی براتون ارسال میشه
                </div>
                <div class="mt-1 flex gap-x-2 items-center text-xs text-zinc-500">
                    <div>
                        26 مهر 1404
                    </div>
                    <div>
                     امیررضا کریمی
                    </div>
                </div>
                <div class="flex items-center gap-x-1 pt-2">
                    <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <path d="M221.35,104.11a8,8,0,0,0-6.57,9.21A88.85,88.85,0,0,1,216,128a87.62,87.62,0,0,1-22.24,58.41,79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75A88,88,0,0,1,128,40a88.76,88.76,0,0,1,14.68,1.22,8,8,0,0,0,2.64-15.78,103.92,103.92,0,1,0,85.24,85.24A8,8,0,0,0,221.35,104.11ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM237.66,45.66l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L200,60.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z">
                        </path>
                    </svg>
                    <div class="text-xs text-primary-500 font-yekanBakhBold">مدیر سایت
                    </div>
                </div>
            </div>
                <div class="mt-3 flex items-center justify-between">
                    <div class="text-primary-500 text-sm flex items-center gap-x-1">
                        پاسخ
                        <svg class="fill-primary-500 group-hover:fill-primary-300" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="16" height="16" viewBox="0 0 56 56"><path d="M 47.7928 46.4453 C 49.0352 46.4453 49.5973 45.6484 49.8085 44.6875 C 49.9492 43.9844 49.9962 42.8125 49.9962 41.4531 C 49.9962 30.1094 45.4725 25.2344 34.3397 25.2344 L 17.9803 25.2344 L 12.2382 25.5625 L 20.1132 18.3437 L 25.3163 13.0469 C 25.6913 12.6719 25.9022 12.1328 25.9022 11.5703 C 25.9022 10.3984 24.9882 9.5547 23.8397 9.5547 C 23.2772 9.5547 22.7850 9.7422 22.246 10.2578 L 6.7303 25.7500 C 6.2616 26.1953 6.0038 26.7578 6.0038 27.3203 C 6.0038 27.9062 6.2616 28.4453 6.7303 28.9141 L 22.3163 44.4531 C 22.7850 44.8984 23.2772 45.1094 23.8397 45.1094 C 24.9882 45.1094 25.9022 44.2656 25.9022 43.0937 C 25.9022 42.5312 25.6913 41.9687 25.3163 41.5937 L 20.1132 36.2969 L 12.2147 29.0781 L 17.9803 29.4297 L 34.1288 29.4297 C 42.7538 29.4297 45.7538 32.9688 45.7538 41.6641 C 45.7538 42.7656 45.7069 43.5391 45.7069 44.3594 C 45.7069 45.6016 46.5741 46.4453 47.7928 46.4453 Z"></path></svg>
                    </div>
                    <div class="flex justify-end items-center gap-x-5">
                        <div class="text-sm text-zinc-400">
                            آیا این پرسش برایتان مفید بود؟
                        </div>
                        <ul class="grid my-3 gap-5 grid-cols-2">
                            <li>
                                <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                                <label for="isgood" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                                <label for="isbad" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                                    <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-2 pt-5">
              <div class="text-lg text-zinc-700">
                تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
              </div>
              <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                <div class="text-xs text-zinc-600">
                  10 بهمن 1402
                </div>
                <div class="text-xs text-zinc-600">
                  امیررضا کریمی
                </div>
                <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                  خریدار
                </div>
              </div>
              <div class="flex items-center gap-x-1 pt-3">
                <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                <div class="text-sm text-red-500">پیشنهاد نمیشود</div>
              </div>
              <div class="mt-2 text-zinc-600 text-sm">
                واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
              </div>
              <div class="flex justify-end items-center gap-x-5 mt-3">
                <div class="text-sm text-zinc-400">
                  آیا این دیدگاه برایتان مفید بود؟
                </div>
                <ul class="grid my-3 gap-5 grid-cols-2">
                  <li>
                    <input type="radio" id="isgood2" name="what2" value="isgood2" class="hidden peer" required="">
                    <label for="isgood2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">                           
                      <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                    </label>
                  </li>
                  <li>
                    <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                    <label for="isbad2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">                           
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                    </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p-4" id="question">
            <p class="text-zinc-800 md:text-lg mb-1 mt-4">
                پرسش و پاسخ
            </p>
            <div class="lg:flex gap-5">
                <div class="lg:w-3/12 py-5">
                    <div class="mt-4 mb-2 text-sm text-zinc-700">
                        شما هم پرسش خود را ثبت کنید
                    </div>
                    <textarea placeholder="متن پرسش" name="mailTicket" cols="30" rows="7" class="rounded-2xl rounded-tr-sm text-sm text-zinc-600 w-full bg-white border border-zinc-200 px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300"></textarea>
                    <button class="hidden lg:block mx-auto cursor-pointer w-full px-2 py-3 text-sm bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 transition text-gray-100 rounded-lg">
                        ارسال پرسش
                    </button>
                </div>
                <div class="lg:w-9/12 divide-y-2 divide-zinc-300">
                    <div class="px-2 pt-5">
                        <div class="text-lg text-zinc-700">
                            آیا ارزش خرید داره؟
                        </div>
                        <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                            <div class="text-xs text-zinc-600">
                                11 بهمن 1402
                            </div>
                        </div>
                        <div class="mt-5 pr-3 mr-3 border-r border-zinc-400">
                            <div class="text-sm text-zinc-600 md:font-yekanBakhSemiBold">
                                بله با گارانتی براتون ارسال میشه
                            </div>
                            <div class="mt-1 flex gap-x-2 items-center text-xs text-zinc-500">
                                <div>
                                    26 مهر 1404
                                </div>
                            </div>
                            <div class="flex items-center gap-x-1 pt-2">
                                <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                                    <path d="M221.35,104.11a8,8,0,0,0-6.57,9.21A88.85,88.85,0,0,1,216,128a87.62,87.62,0,0,1-22.24,58.41,79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75A88,88,0,0,1,128,40a88.76,88.76,0,0,1,14.68,1.22,8,8,0,0,0,2.64-15.78,103.92,103.92,0,1,0,85.24,85.24A8,8,0,0,0,221.35,104.11ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM237.66,45.66l-32,32a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,11.32-11.32L200,60.69l26.34-26.35a8,8,0,0,1,11.32,11.32Z">
                                    </path>
                                </svg>
                                <div class="text-xs text-primary-500 font-yekanBakhBold">مدیر سایت
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center justify-between">
                            <div class="text-primary-500 text-sm flex items-center gap-x-1">
                                پاسخ
                                <svg class="fill-primary-500 group-hover:fill-primary-300" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="16" height="16" viewBox="0 0 56 56"><path d="M 47.7928 46.4453 C 49.0352 46.4453 49.5973 45.6484 49.8085 44.6875 C 49.9492 43.9844 49.9962 42.8125 49.9962 41.4531 C 49.9962 30.1094 45.4725 25.2344 34.3397 25.2344 L 17.9803 25.2344 L 12.2382 25.5625 L 20.1132 18.3437 L 25.3163 13.0469 C 25.6913 12.6719 25.9022 12.1328 25.9022 11.5703 C 25.9022 10.3984 24.9882 9.5547 23.8397 9.5547 C 23.2772 9.5547 22.7850 9.7422 22.246 10.2578 L 6.7303 25.7500 C 6.2616 26.1953 6.0038 26.7578 6.0038 27.3203 C 6.0038 27.9062 6.2616 28.4453 6.7303 28.9141 L 22.3163 44.4531 C 22.7850 44.8984 23.2772 45.1094 23.8397 45.1094 C 24.9882 45.1094 25.9022 44.2656 25.9022 43.0937 C 25.9022 42.5312 25.6913 41.9687 25.3163 41.5937 L 20.1132 36.2969 L 12.2147 29.0781 L 17.9803 29.4297 L 34.1288 29.4297 C 42.7538 29.4297 45.7538 32.9688 45.7538 41.6641 C 45.7538 42.7656 45.7069 43.5391 45.7069 44.3594 C 45.7069 45.6016 46.5741 46.4453 47.7928 46.4453 Z"></path></svg>
                            </div>
                            <div class="flex justify-end items-center gap-x-5">
                                <div class="text-sm text-zinc-400">
                                    آیا این پرسش برایتان مفید بود؟
                                </div>
                                <ul class="grid my-3 gap-5 grid-cols-2">
                                    <li>
                                        <input type="radio" id="isgood" name="what" value="isgood" class="hidden peer" required="">
                                        <label for="isgood" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="isbad" name="what" value="isbad" class="hidden peer" required="">
                                        <label for="isbad" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="px-2 pt-5">
                        <div class="text-lg text-zinc-700">
                            تاچ پدش خراب بود، اجازه ی مرجوعی هم ندادن
                        </div>
                        <div class="mt-2 flex gap-x-4 items-center border-b border-zinc-200 pb-3">
                            <div class="text-xs text-zinc-600">
                                10 بهمن 1402
                            </div>
                            <div class="text-xs text-zinc-600">
                                امیررضا کریمی
                            </div>
                            <div class="text-xs text-zinc-50 bg-green-400 rounded-full px-2 py-1">
                                خریدار
                            </div>
                        </div>
                        <div class="flex items-center gap-x-1 pt-3">
                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                            <div class="text-sm text-red-500">پیشنهاد نمیشود</div>
                        </div>
                        <div class="mt-2 text-zinc-600 text-sm">
                            واقعا لپ تاپ عالی از هر نظر نسبت به قیمتش
                        </div>
                        <div class="flex justify-end items-center gap-x-5 mt-3">
                            <div class="text-sm text-zinc-400">
                                آیا این دیدگاه برایتان مفید بود؟
                            </div>
                            <ul class="grid my-3 gap-5 grid-cols-2">
                                <li>
                                    <input type="radio" id="isgood2" name="what2" value="isgood2" class="hidden peer" required="">
                                    <label for="isgood2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-green-400 hover:bg-gray-100">
                                        <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32ZM223.94,97l-12,96a8,8,0,0,1-7.94,7H88V105.89l36.71-73.43A24,24,0,0,1,144,56V80a8,8,0,0,0,8,8h64a8,8,0,0,1,7.94,9Z"></path></svg>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="isbad2" name="what2" value="isbad2" class="hidden peer" required="">
                                    <label for="isbad2" class="inline-flex p-2 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-red-400 hover:bg-gray-100">
                                        <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="" viewBox="0 0 256 256"><path d="M239.82,157l-12-96A24,24,0,0,0,204,40H32A16,16,0,0,0,16,56v88a16,16,0,0,0,16,16H75.06l37.78,75.58A8,8,0,0,0,120,240a40,40,0,0,0,40-40V184h56a24,24,0,0,0,23.82-27ZM72,144H32V56H72Zm150,21.29a7.88,7.88,0,0,1-6,2.71H152a8,8,0,0,0-8,8v24a24,24,0,0,1-19.29,23.54L88,150.11V56H204a8,8,0,0,1,7.94,7l12,96A7.87,7.87,0,0,1,222,165.29Z"></path></svg>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- sldier products -->
      <div class="mt-12 md:mt-20 px-4 md:px-14">
        <!-- top slider -->
        <div class="flex gap-x-4 justify-between items-center mb-7">
          <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
           محصولات مرتبط
          </div>
          <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
          </div>
          <div class="w-32 min-w-fit text-left">
            <a href="" class="group transition flex items-center justify-center gap-x-1 md:gap-x-2 text-zinc-600 hover:text-primary-500 text-xs md:text-sm text-center">
              مشاهده همه
              <svg class="fill-zinc-600 group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
            </a>
          </div>
        </div>
        <!-- main slider -->
        <div class="containerPSlider swiper">
          <div class="productSlider1">
            <div class="card-wrapper swiper-wrapper pb-10">
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
              <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                <a href="#">
                  <svg class="absolute right-2 top-2 bg-white hover:bg-primary-500 hover:fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
                </a>
                <a href="./single-product.html" class="image-box mb-6 block py-10">
                  <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                </a>
                <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                  کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                </a>
                <div class="border-b-2 border-dashed border-zinc-200 my-5 w-full h-auto"></div>
                <div class="flex justify-between items-center">
                  <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                    <svg class="stroke-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                      <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                      <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                    </svg>
                  </a>
                  <div class="flex">
                    <div class="text-base md:text-xl">2,100,000</div>
                    <div class="-rotate-90 text-zinc-400 text-xs md:text-sm">
                      تومان
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<script>
    if(document.getElementById('color_0')){
        document.getElementById('color_0').checked = true;
    }
</script>