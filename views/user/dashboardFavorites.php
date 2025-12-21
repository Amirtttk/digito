
<main class="p-6 flex-1 overflow-y-auto">
      <div class="bg-white rounded-2xl min-h-80 h-auto shadow-custom p-4">
        <div class="px-2 md:px-3 pt-3 pb-5 mb-3 text-zinc-700 text-sm md:text-base flex items-center gap-x-2 border-b border-zinc-200">
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>
          علاقه مندی ها
        </div>
        <div id="Favourte" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 xl:gap-4">
            <?php
            $selectInProductFavourites = selectInProductFavourites();
            if ($selectInProductFavourites){
            foreach ($selectInProductFavourites as $favourite){
            $selectInProduct = getOneProduct($favourite['product_id']);
            $images = json_decode($selectInProduct['images'], true);
            $mainImage = $selectInProduct['main_image'] ?? ($images[0] ?? '');
            $thumbnail = !empty($mainImage) ? "public/images/products/{$mainImage}" : '';
            $priceData = json_decode($selectInProduct['price'], true);
            ?>
          <div id="myDivFavourte<?= $favourite['id'] ?>" class="shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
              <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                  <?php
                  if (is_array($priceData)) {
                      foreach ($priceData as $priceItem){
                          $color = $priceItem['color'];
                          ?>
                          <div class="size-4 rounded-full" style="background-color: <?php echo htmlspecialchars($color); ?>;"></div>
                          <?php
                      }
                  }
                  ?>
              </div>
              <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                  <?php
                  if (is_array($priceData) && count($priceData) > 0) {
                      $firstPriceItem = $priceData[0]; // اولین آیتم
                      $currentPrice = $firstPriceItem['price'];
                      $discountPrice = $firstPriceItem['discount'];
                      // محاسبه درصد تخفیف اگر تخفیف وجود داشته باشد
                      if ($discountPrice < $currentPrice) {
                          $discountPercent = (1 - ($discountPrice / $currentPrice)) * 100;
                          echo round($discountPercent);
                      }
                  }else{
                      echo $selectInProduct['token'];
                  }
                  ?>
                  %
              </div>
            <a onclick="removeFromFavourites(<?php echo $_SESSION['user_sending'] ?>,<?php echo $selectInProduct['id'] ?>, <?php echo $favourite['id'] ?>)" >
              <svg class="absolute left-2 top-10 bg-primary-500 fill-white transition-all rounded-full p-2 border border-zinc-300 size-9" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="#000000" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>
            </a>
            <a href="/singleProduct?slug=<?= $selectInProduct['slug'] ?>&code=<?= $selectInProduct['id']?>" class="image-box mb-6 block py-10">
              <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
            </a>
            <a href="/singleProduct?slug=<?= $selectInProduct['slug'] ?>&code=<?= $selectInProduct['id']?>" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                 <?= $selectInProduct['title'] ?>
            </a>
              <?php
              if (is_array($priceData)) {
                  foreach ($priceData as $priceItem){
                      $currentPrice = $priceItem['price'];
                      $discountPrice = $priceItem['discount'];
                  }
                  if ($discountPrice < $currentPrice) {
                      ?>
                      <div class="flex mt-5 line-through text-zinc-400">
                          <div class="text-sm md:text-base"><?= number_format($currentPrice) ?></div>
                      </div>
                      <div class="flex mb-5">
                          <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountPrice) ?></div>
                          <div class="-rotate-90 text-zinc-400 text-xs">
                              تومان
                          </div>
                      </div>
                      <?php
                  }
              }else{
                  $price = (int)$selectInProduct['price']; // قیمت اصلی
                  $discountPercent = (int)$selectInProduct['token']; // درصد تخفیف
                  $discountedPrice = $price;
                  if ($discountPercent > 0) {
                      $discountedPrice = $price - ($price * $discountPercent / 100);
                  }
                  ?>
                  <?php if ($discountPercent > 0): ?>
                      <div class="flex mt-5 line-through text-zinc-400">
                          <div class="text-sm md:text-base"> <?= number_format($price)  ?></div>
                      </div>
                      <div class="flex mb-5">
                          <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountedPrice)  ?></div>
                          <div class="-rotate-90 text-zinc-400 text-xs">
                              تومان
                          </div>
                      </div>
                  <?php else: ?>
                      <div class="flex mb-5">
                          <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountedPrice)  ?></div>
                          <div class="-rotate-90 text-zinc-400 text-xs">
                              تومان
                          </div>
                      </div>
                  <?php endif; ?>
                  <?php
              }
              ?>
            <div class="flex justify-between items-center">
              <a href="" class="group/edit bg-primary-500 hover:bg-primary-400 text-white flex justify-center items-center text-xs md:text-sm mx-auto gap-x-2 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                <svg class="stroke-white size-5 md:size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                  <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                </svg>
                افزودن به سبد خرید
              </a>
            </div>
          </div>
            <?php
            }
            }else{
            ?>
                <div class="mx-auto" id="myDivFavourte">
                    <div class="text-center my-5">
                        <img src="./../../assets/user/image/favorites-list-empty.svg" alt="">
                        <p class="fs-8">لیست علاقه مندی های شما خالی است.</p>
                    </div>
                    <!--        User Panel Content:end-->
                </div>
            <?php
            }
            ?>
        </div>
      </div>
    </main>
