<main class="mt-0 md:mt-8">
    <?php
    $getAllBanner = getAllBanner('1');
    if ($getAllBanner){
        ?>
        <!-- hero slider -->
        <div class="px-2 md:px-12">
            <div class="swiper heroSlider rounded-2xl md:rounded-4xl relative">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($getAllBanner as $AllBanner){
                        if ($AllBanner['image']){
                            $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $AllBanner['image']);
                        }
                        ?>
                        <a href="<?= $AllBanner['link'] ?? 'javascript:;' ?>" class="swiper-slide">
                            <img class="w-full h-60 md:h-96 object-cover object-bottom" src="<?= $thumbnail ? "../../" . $thumbnail : '' ?>" alt="">
                        </a>
                    <?php
                    }
                    ?>

                </div>
                <svg class="absolute -left-2 rotate-180 top-14 z-10 w-auto hidden md:block" width="76" height="285" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_6_41)">
                        <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
                    </g>
                    <defs>
                        <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dx="-4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
                        </filter>
                    </defs>
                </svg>
                <svg class="absolute -right-2 top-14 z-10 w-auto hidden md:block" width="76" height="285" viewBox="0 0 76 285" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_6_41)">
                        <path d="M70 275V10C70 86 14 91.0878 14 142.752C14 194.416 70 201 70 275Z" fill="white"></path>
                    </g>
                    <defs>
                        <filter id="filter0_d_6_41" x="0" y="0" width="76" height="285" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                            <feOffset dx="-4"></feOffset>
                            <feGaussianBlur stdDeviation="5"></feGaussianBlur>
                            <feComposite in2="hardAlpha" operator="out"></feComposite>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_41"></feBlend>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_41" result="shape"></feBlend>
                        </filter>
                    </defs>
                </svg>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    $getLatestProductsSpecial = getLatestProductsSpecial();
    if($getLatestProductsSpecial){
        ?>
        <!-- amazing  slider -->
        <div class="mt-12 md:mt-20 px-4 md:px-14">
            <!-- top slider -->
            <div class="flex gap-x-4 justify-between items-center mb-7">
                <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold flex items-center gap-x-2.5">
                    <svg class="size-12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
            <path style="fill:#ed1945;" d="M226.776,10.084c17.163-13.445,41.284-13.445,58.447,0c10.713,8.392,24.778,11.19,37.886,7.536  c21.002-5.854,43.286,3.377,53.998,22.367c6.685,11.853,18.609,19.82,32.118,21.46c21.643,2.629,38.7,19.686,41.327,41.327  c1.64,13.508,9.608,25.433,21.46,32.119c18.99,10.71,28.221,32.996,22.367,53.998c-3.653,13.109-0.857,27.173,7.536,37.886  c13.445,17.163,13.445,41.283,0,58.447c-8.392,10.713-11.19,24.778-7.536,37.886c5.854,21.002-3.377,43.286-22.367,53.998  c-11.853,6.685-19.82,18.609-21.46,32.118c-2.629,21.643-19.686,38.7-41.327,41.327c-13.508,1.64-25.433,9.608-32.118,21.46  c-10.71,18.99-32.996,28.221-53.998,22.367c-13.109-3.653-27.173-0.857-37.886,7.536c-17.163,13.445-41.283,13.445-58.447,0  c-10.713-8.392-24.778-11.19-37.886-7.536c-21.002,5.854-43.286-3.377-53.998-22.367c-6.685-11.853-18.609-19.82-32.119-21.46  c-21.643-2.629-38.7-19.686-41.327-41.327c-1.64-13.508-9.608-25.433-21.46-32.118c-18.99-10.71-28.221-32.996-22.367-53.998  c3.653-13.109,0.857-27.173-7.536-37.886c-13.445-17.163-13.445-41.283,0-58.447c8.392-10.713,11.19-24.778,7.536-37.886  c-5.854-21.002,3.377-43.286,22.367-53.998c11.852-6.685,19.819-18.609,21.46-32.118c2.629-21.643,19.686-38.7,41.327-41.327  c13.508-1.64,25.433-9.608,32.119-21.46c10.71-18.99,32.996-28.221,53.998-22.367C201.998,21.274,216.064,18.476,226.776,10.084z"></path>
                        <g>
                            <path style="fill:#ed1945;" d="M501.915,226.777c-8.392-10.713-11.19-24.778-7.536-37.886c5.853-21.002-3.377-43.286-22.367-53.998   c-11.853-6.685-19.82-18.609-21.46-32.119c-2.629-21.643-19.686-38.7-41.327-41.327c-13.508-1.64-25.433-9.608-32.118-21.46   c-10.71-18.99-32.996-28.221-53.998-22.367c-13.109,3.653-27.173,0.857-37.886-7.536C276.641,3.362,266.321,0,256,0v512   c10.321,0,20.642-3.362,29.223-10.084c10.713-8.392,24.777-11.19,37.886-7.536c21.002,5.854,43.286-3.377,53.998-22.367   c6.685-11.853,18.609-19.82,32.118-21.46c21.643-2.629,38.7-19.686,41.327-41.327c1.64-13.508,9.608-25.432,21.46-32.118   c18.99-10.712,28.22-32.996,22.367-53.998c-3.653-13.109-0.857-27.173,7.536-37.886   C515.361,268.061,515.361,243.94,501.915,226.777z"></path>
                            <path style="fill:#ed1945;" d="M257.428,126.345c89.331,0,163.107,66.571,174.442,152.807c0.996-7.577,1.518-15.304,1.518-23.153   c0-97.18-78.779-175.96-175.96-175.96c-97.18,0-175.96,78.78-175.96,175.96c0,7.849,0.521,15.576,1.518,23.153   C94.321,192.916,168.097,126.345,257.428,126.345z"></path>
                        </g>
                        <path style="fill:white;" d="M256,447.009C150.677,447.009,64.99,361.323,64.99,256S150.677,64.991,256,64.991  S447.009,150.677,447.009,256S361.322,447.009,256,447.009z M256,99.72c-86.173,0-156.28,70.107-156.28,156.28  S169.827,412.28,256,412.28S412.28,342.173,412.28,256S342.174,99.72,256,99.72z"></path>
                        <path style="fill:white;" d="M161.827,225.695v-35.179c0-24.526,16.104-33.445,37.161-33.445c20.811,0,37.162,8.92,37.162,33.445  v35.179c0,24.527-16.352,33.445-37.162,33.445C177.932,259.141,161.827,250.222,161.827,225.695z M211.376,190.517  c0-8.175-4.707-11.891-12.388-11.891c-7.68,0-12.138,3.716-12.138,11.891v35.179c0,8.176,4.459,11.891,12.138,11.891  c7.681,0,12.388-3.716,12.388-11.891V190.517z M312.948,160.045c0,1.486-0.248,3.221-0.99,4.707l-87.204,178.619  c-1.734,3.716-6.441,6.193-11.148,6.193c-8.423,0-13.873-6.937-13.873-13.13c0-1.486,0.495-3.221,1.239-4.707l86.956-178.619  c1.982-4.211,5.946-6.193,10.405-6.193C305.27,146.915,312.948,152.118,312.948,160.045z M275.54,305.468v-35.179  c0-24.527,16.103-33.445,37.161-33.445c20.811,0,37.161,8.918,37.161,33.445v35.179c0,24.527-16.35,33.445-37.161,33.445  C291.643,338.913,275.54,329.995,275.54,305.468z M325.088,270.289c0-8.175-4.707-11.891-12.387-11.891  c-7.68,0-12.139,3.716-12.139,11.891v35.179c0,8.175,4.46,11.891,12.139,11.891c7.679,0,12.387-3.716,12.387-11.891V270.289z"></path>
                        <path style="fill:white;" d="M256,64.991V99.72c86.173,0,156.28,70.107,156.28,156.28S342.173,412.28,256,412.28v34.729  c105.323,0,191.009-85.687,191.009-191.009S361.322,64.991,256,64.991z"></path>
          </svg>
                    شگفت‌انگیز ترین محصولات
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
                        <?php
                        foreach ($getLatestProductsSpecial as $LatestProductsSpecial){
                        $images = json_decode($LatestProductsSpecial['images'], true);
                        $mainImage = $LatestProductsSpecial['main_image'] ?? ($images[0] ?? '');
                        $thumbnailLatestProduct = !empty($mainImage) ? "public/images/products/{$mainImage}" : '';
                        $priceData = json_decode($LatestProductsSpecial['price'], true);
                        ?>
                        <div class="card swiper-slide shiny relative my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
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
                            <div class="absolute left-4 top-0 bg-secondary-100 border-b-[0.8em] border-b-transparent z-20 text-sm font-yekanBakhRegular text-center rounded-tl-[10px] rounded-tr-[6px] pr-3 pl-5 py-2 bg-primary-500 text-white" style="clip-path: polygon(0.5em 0, 100% 0, 100% 100%, calc(50% + 0.5em/2) calc(100% - 0.8em), 0.5em 100%, 0.5em 0.5em);">
                                شگفت انگیز
                            </div>
                            <a href="/singleProduct?slug=<?= $LatestProductsSpecial['slug'] ?>&code=<?= $LatestProductsSpecial['id']?>" class="image-box mb-6 block py-10">
                                <img class="max-w-40 mx-auto" src="<?= $thumbnailLatestProduct ? "../../" . $thumbnailLatestProduct : '' ?>" alt="" />
                            </a>
                            <a href="/singleProduct?slug=<?= $LatestProductsSpecial['slug'] ?>&code=<?= $LatestProductsSpecial['id']?>" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            <?=$LatestProductsSpecial['title'] ?>
                            </a>
                            <?php
                            if (is_array($priceData) && count($priceData) > 0) {
                                $firstPriceItem = $priceData[0]; // اولین آیتم
                                $currentPrice = $firstPriceItem['price'];
                                $discountPrice = $firstPriceItem['discount'];
                                if ($discountPrice < $currentPrice) {
                                    $discountPercent = (1 - ($discountPrice / $currentPrice)) * 100;
                                    ?>
                            <div class="flex mt-5 text-zinc-400 gap-1">
                                <div class="text-sm md:text-base line-through "><?= number_format($currentPrice) ?> تومان</div>
                                <div class="bg-primary-500 rounded-full text-white py-1 px-3 text-sm h-fit"><?= number_format(round($discountPercent)) ?>%</div>

                            </div>
                            <div class="flex mb-5">
                                <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountPrice) ?> تومان</div>
                            </div>
                            <?php
                            } else {
                            ?>
                            <div class="flex mb-5">
                                <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($currentPrice) ?> تومان</div>
                                <div class="-rotate-90 text-zinc-400 text-xs">
                                    تومان
                                </div>
                            </div>
                            <?php
                            }
                            } else {
                            $price = (int)$LatestProductsSpecial['price'];
                            $discountPercent = (int)$LatestProductsSpecial['token'];
                            $discountedPrice = $price;
                            if ($discountPercent > 0) {
                                $discountedPrice = $price - ($price * $discountPercent / 100);
                            }
                            ?>
                            <?php if ($discountPercent > 0): ?>
                            <div class="flex mt-5 text-zinc-400 gap-1">
                                <div class="text-sm md:text-base line-through "><?= number_format($price) ?> تومان</div>
                                <div class="bg-primary-500 rounded-full text-white py-1 px-3 text-sm h-fit"><?= $discountPercent ?>%</div>
                            </div>
                            <div class="flex mb-5">
                                <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountedPrice) ?> تومان</div>
                                <div class="-rotate-90 text-zinc-400 text-xs">
                                    تومان
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="flex mb-5">
                                <div class="text-xl md:text-2xl text-zinc-800"><?= number_format($discountedPrice) ?> تومان</div>
                                <div class="-rotate-90 text-zinc-400 text-xs">
                                    تومان
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php
                            }
                            ?>
                            <div class="flex justify-between items-center">
                                <a href="/singleProduct?slug=<?= $LatestProductsSpecial['slug'] ?>&code=<?= $LatestProductsSpecial['id']?>" class="group/edit bg-primary-500 hover:bg-primary-400 text-white flex justify-center items-center text-xs md:text-sm mx-auto gap-x-2 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
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
                    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    $getAllCategory = getAllCategory();
    if ($getAllCategory){
        ?>
        <!-- category -->
        <div class="mt-12 md:mt-20 px-4 md:px-14">
            <div class="containerPSlider swiper">
                <div class="category">
                    <div class="card-wrapper swiper-wrapper pb-10">
                        <?php
                        foreach ($getAllCategory as $AllCategory){
                            if ($AllCategory['image']){
                                $thumbnail5 = str_replace(PATH_UPLOADS_DIR, 'public/', $AllCategory['image']);
                            }
                            ?>
                            <div class="card swiper-slide">
                                <a href="#" class="flex justify-between items-center shiny w-full border border-zinc-100 rounded-2xl hover:shadow-lg transition py-3 px-5">
                                    <p class="text-xs md:text-sm text-zinc-700">
                                     <?= $AllCategory['title'] ?>
                                    </p>
                                    <img class="max-w-12 md:max-w-14" src="<?= $thumbnail5 ? "../../" . $thumbnail5 : '' ?>" alt="">
                                </a>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- slider 1 -->
    <div class="mt-12 md:mt-20 px-4 md:px-14">
        <!-- top slider -->
        <div class="flex gap-x-4 justify-between items-center mb-7">
            <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
                پرفروش ترین محصولات
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                            20%
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex mt-5 line-through text-zinc-400">
                            <div class="text-sm md:text-base">2,100,000</div>
                        </div>
                        <div class="flex mb-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                            20%
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex mt-5 line-through text-zinc-400">
                            <div class="text-sm md:text-base">2,100,000</div>
                        </div>
                        <div class="flex mb-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                            20%
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex mt-5 line-through text-zinc-400">
                            <div class="text-sm md:text-base">2,100,000</div>
                        </div>
                        <div class="flex mb-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                            20%
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex mt-5 line-through text-zinc-400">
                            <div class="text-sm md:text-base">2,100,000</div>
                        </div>
                        <div class="flex mb-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200 h-auto">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <div class="absolute left-2 top-2 bg-primary-500 rounded-full text-white py-1 px-3 text-sm">
                            20%
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/2.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex mt-5 line-through text-zinc-400">
                            <div class="text-sm md:text-base">2,100,000</div>
                        </div>
                        <div class="flex mb-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
    <?php
    $getAllBaneerProduct = getAllBaneerProduct();
    if ($getAllBaneerProduct){
        ?>
        <!-- banner for 2 product -->
        <div class="mt-12 md:mt-20 px-4 md:px-14 flex flex-col md:flex-row items-center justify-center gap-5">
            <?php
            foreach ($getAllBaneerProduct as $AllBaneerProduct){
                if ($AllBaneerProduct['image']){
                    $thumbnail3 = str_replace(PATH_UPLOADS_DIR, 'public/', $AllBaneerProduct['image']);
                }
                ?>
                <div class="md:w-1/2 bg-gradient-to-r from-primary-400 to-primary-500 w-full lg:h-72 rounded-xl lg:rounded-3xl relative p-2" style="background-image:url('../../assets/user/image/topography.svg'),linear-gradient(to right, #60a5fa, #2563eb);background-repeat: repeat, no-repeat; background-size: auto, cover;">
                    <img class="absolute left-1/2 md:left-5 -translate-x-1/2 md:translate-x-[auto] mx-auto w-64 md:w-[300px] " src="<?= $thumbnail3 ? "../../" . $thumbnail3 : '' ?>" alt="">
                    <div class="lg:absolute right-10 top-5 max-w-80 pt-64 lg:pt-0 mx-auto">
                        <p class="text-white text-4xl lg:text-5xl text-wrap font-yekanBakhBold leading-10 md:leading-14"><?= $AllBaneerProduct['title'] ?></p>
                        <p class="text-white lg:text-lg mt-6 mb-6 font-yekanBakhRegular"><?= $AllBaneerProduct['description'] ?></p>
                        <a href="<?= $AllBaneerProduct['link'] ?? 'javascript:;' ?>" class="text-sm md:text-base mx-auto flex justify-center items-center gap-x-2 text-primary-500 bg-white hover:bg-gray-100 transition-all p-3 rounded-xl">
                            مشاهده محصول
                            <svg class="size-5 md:size-6" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" >
                                <path d="M3 12C3 4.5885 4.5885 3 12 3C19.4115 3 21 4.5885 21 12C21 19.4115 19.4115 21 12 21C4.5885 21 3 19.4115 3 12Z" stroke="#ed1945" stroke-width="2"/>
                                <path d="M13 9L10.2625 11.7375V11.7375C10.1175 11.8825 10.1175 12.1175 10.2625 12.2625V12.2625L13 15" stroke="#ed1945" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    <?php
    }
    ?>
    <!-- slider for category -->
    <div class="mt-12 md:mt-20 px-4 md:px-14 md:flex gap-5">
        <!-- banner -->
        <div class="flex flex-row-reverse md:flex-col justify-between md:justify-center items-center mb-4 md:mb-12 px-8 md:px-0 mx-auto mt-2 w-full sm:w-6/12 md:w-2/12 bg-primary-500 rounded-3xl">
            <div>
                <p class="text-zinc-100 mb-2 text-center text-sm md:text-base">
                    محصولات جدید
                </p>
                <p class="text-white text-xl md:text-3xl font-yekanBakhExtraBold text-center">
                    دیجیتال
                </p>
            </div>
            <img class="w-4/12 md:w-11/12" src="../../assets/user/image/Electronics.webp" alt="">
        </div>
        <!-- main slider -->
        <div class="containerPSlider swiper md:w-10/12">
            <div class="sliderForCategory">
                <div class="card-wrapper swiper-wrapper pb-10">
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/4.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex my-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/4.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex my-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/4.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex my-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/4.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex my-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
                        <div class="flex flex-col gap-1.5 absolute top-4 right-4">
                            <div class="size-4 rounded-full" style="background-color: #27272a;"></div>
                            <div class="size-4 rounded-full" style="background-color: #71717b;"></div>
                            <div class="size-4 rounded-full" style="background-color: #d4d4d8;"></div>
                        </div>
                        <a href="./single-product.html" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="../../assets/user/image/products/4.webp" alt="" />
                        </a>
                        <a href="./single-product.html" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                            کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا کنسول بازی سونی مدل PlayStation 5 Slim ظرفیت یک ترابایت ریجن 2016A اروپا
                        </a>
                        <div class="flex my-5">
                            <div class="text-xl md:text-2xl text-zinc-800">2,100,000</div>
                            <div class="-rotate-90 text-zinc-400 text-xs">
                                تومان
                            </div>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
    <?php
    $getAllBanner = getAllBanner('2');
    if ($getAllBanner){
        ?>
        <!-- 2 banner -->
        <div class="mt-10 md:mt-16 flex flex-col md:flex-row gap-3 md:gap-5 px-4 md:px-14">
            <?php
            foreach ($getAllBanner as $AllBanner){
                if ($AllBanner['image']){
                    $thumbnail2 = str_replace(PATH_UPLOADS_DIR, 'public/', $AllBanner['image']);
                }
                ?>
                <a href="<?= $AllBanner['link'] ??'javascript:;' ?>">
                    <img class="w-full rounded-3xl" src="<?= $thumbnail2 ? "../../" . $thumbnail2 : '' ?>" alt="">
                </a>
            <?php
            }
             ?>
        </div>
    <?php
    }
    ?>
    <?php
    $products = getLatestProducts(10);
    if ($products){
    ?>
    <!-- slider 2 -->
    <div class="mt-12 md:mt-20 px-4 md:px-14">
        <!-- top slider -->
        <div class="flex gap-x-4 justify-between items-center mb-7">
            <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
                جدیدترین محصولات
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
            <div class="productSlider2">
                <div class="card-wrapper swiper-wrapper pb-10">
                    <?php
                    foreach ($products as $product){
                    $images = json_decode($product['images'], true);
                    $mainImage = $product['main_image'] ?? ($images[0] ?? '');
                    $thumbnail = !empty($mainImage) ? "public/images/products/{$mainImage}" : '';
                    $priceData = json_decode($product['price'], true);
                    ?>
                    <div class="card swiper-slide shiny my-2 p-2 md:p-4 hover:border-transparent hover:shadow-lg transition-shadow rounded-3xl border border-zinc-200">
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
                                   echo $product['token'];
                                }
                                 ?>
                                %
                            </div>

                        <a href="/singleProduct?slug=<?= $product['slug'] ?>&code=<?= $product['id']?>" class="image-box mb-6 block py-10">
                            <img class="max-w-40 mx-auto" src="<?= $thumbnail ? "../../" . $thumbnail : '' ?>" alt="" />
                        </a>
                        <a href="/singleProduct?slug=<?= $product['slug'] ?>&code=<?= $product['id']?>" class="text-sm font-semibold text-zinc-700 h-10 line-clamp-2">
                        <?= $product['title'] ?>
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
                                $price = (int)$product['price']; // قیمت اصلی
                                $discountPercent = (int)$product['token']; // درصد تخفیف
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
                            <a href="/singleProduct?slug=<?= $product['slug'] ?>&code=<?= $product['id']?>" class="group/edit bg-primary-500 hover:bg-primary-400 text-white flex justify-center items-center text-xs md:text-sm mx-auto gap-x-2 px-5 md:px-2.5 py-2.5 rounded-xl shadow-lg transition-all">
                                <svg class="stroke-white size-5 md:size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.86399 16.455C4.40999 18.638 4.68299 19.729 5.49599 20.365C6.30999 21 7.43499 21 9.68499 21H14.315C16.565 21 17.69 21 18.505 20.365C19.318 19.729 19.591 18.638 20.136 16.455C20.994 13.023 21.423 11.308 20.523 10.154C19.622 9 17.853 9 14.316 9H9.68499C6.14699 9 4.37899 9 3.47799 10.154C2.94899 10.831 2.87799 11.702 3.08399 13" stroke="#" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M19.5 9.5L18.79 6.895C18.516 5.89 18.379 5.388 18.098 5.009C17.8178 4.63246 17.4373 4.3424 17 4.172C16.56 4 16.04 4 15 4M4.5 9.5L5.21 6.895C5.484 5.89 5.621 5.388 5.902 5.009C6.18218 4.63246 6.56269 4.3424 7 4.172C7.44 4 7.96 4 9 4" stroke="#" stroke-width="1.5"/>
                                    <path d="M9 4C9 3.73478 9.10536 3.48043 9.29289 3.29289C9.48043 3.10536 9.73478 3 10 3H14C14.2652 3 14.5196 3.10536 14.7071 3.29289C14.8946 3.48043 15 3.73478 15 4C15 4.26522 14.8946 4.51957 14.7071 4.70711C14.5196 4.89464 14.2652 5 14 5H10C9.73478 5 9.48043 4.89464 9.29289 4.70711C9.10536 4.51957 9 4.26522 9 4Z" stroke="#" stroke-width="1.5"/>
                                </svg>
                                افزودن به سبد خرید
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    $getAllBrand = getAllBrand();
    if($getAllBrand){
        ?>
        <!-- brands -->
        <div class="mt-12 md:mt-20 px-4 md:px-14">
            <div class="containerPSlider swiper">
                <div class="brands">
                    <div class="card-wrapper swiper-wrapper pb-10">
                        <?php
                        foreach ($getAllBrand as $AllBrand){
                            if ($AllBrand['image']){
                                $thumbnail3 = str_replace(PATH_UPLOADS_DIR, 'public/', $AllBrand['image']);
                            }
                            ?>
                            <div class="card swiper-slide shiny">
                                <a href="#" class="flex flex-col justify-between items-center gap-3 w-full h-36 md:h-48 md:px-4 border border-zinc-100 rounded-2xl hover:shadow-lg transition">
                                    <div class="w-full h-44 flex justify-center items-center">
                                        <img class="max-w-24 md:max-w-32 w-full mx-auto" src="<?= $thumbnail3 ? "../../" . $thumbnail3 : '' ?>" alt="">
                                    </div>
                                    <p class="text-xs md:text-sm text-zinc-700 h-16">
                                        <?= $AllBrand['title'] ?>
                                    </p>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
     <?php
     $getAllBlogTop = getAllBlogTop();
     if ($getAllBlogTop){
         ?>
         <!-- blog -->
         <div class="mt-12 md:mt-20 px-4 md:px-14">
             <!-- top blog -->
             <div class="flex gap-x-4 justify-between items-center mb-7">
                 <div class="w-48 min-w-fit text-zinc-700 md:font-yekanBakhBold">
                     خواندنی ها
                 </div>
                 <div class="h-[1px] w-full bg-gradient-to-r from-white via-zinc-300 to-white">
                 </div>
                 <div class="w-32 min-w-fit text-left">
                     <a href="/blogs" class="group transition flex items-center justify-center gap-x-1 md:gap-x-2 text-zinc-600 hover:text-primary-500 text-xs md:text-sm text-center">
                         مشاهده همه
                         <svg class="fill-zinc-600 group-hover:-translate-x-1 transition group-hover:fill-primary-500 size-2.5 md:size-3" xmlns="http://www.w3.org/2000/svg" width="" height="" fill="" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path></svg>
                     </a>
                 </div>
             </div>
             <!-- main blog -->
             <div class="containerPSlider swiper">
                 <div class="blog">
                     <div class="card-wrapper swiper-wrapper pb-10">
                         <?php
                          foreach ($getAllBlogTop as $AllBlogTop){
                              if ($AllBlogTop['image']){
                                  $thumbnail4 = str_replace(PATH_UPLOADS_DIR, 'public/', $AllBlogTop['image']);
                              }
                              $date1 = jdate("r", (dateToTimestamp($AllBlogTop['createAt'])));
                              $createAt2 = $date1 ;
                              ?>
                              <div class="card swiper-slide bg-white rounded-3xl border hover:border-zinc-300 transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg">
                                  <a href="/blogSingle?trak=<?= $AllBlogTop['id'] ?>&slug=<?= $AllBlogTop['slug'] ?>" class="image-box block overflow-hidden rounded-lg md:rounded-2xl">
                                      <img class="rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110 lazyload" src="<?= $thumbnail4 ? "../../" . $thumbnail4 : '' ?>" alt="blog"/>
                                  </a>
                                  <div class="p-2 mt-2">
                                      <a href="/blogSingle?trak=<?= $AllBlogTop['id'] ?>&slug=<?= $AllBlogTop['slug'] ?>" class="text-xs md:text-sm font-normal md:font-semibold h-8 lg:h-10 line-clamp-2 text-zinc-700">
                                          <?= $AllBlogTop['title'] ?>
                                      </a>
                                      <div class="flex justify-between mt-8">
                                          <div class="text-xs flex gap-x-1 items-center text-zinc-400">
                                              <svg
                                                      class="fill-zinc-400"
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="16"
                                                      height="16"
                                                      fill=""
                                                      viewBox="0 0 256 256">
                                                  <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                                              </svg>
                                              <?= $createAt2; ?>
                                          </div>
                                          <a href="/blogSingle?trak=<?= $AllBlogTop['id'] ?>&slug=<?= $AllBlogTop['slug'] ?>" class="flex justify-center items-center gap-x-1 group w-fit text-xs md:text-sm transition text-zinc-600 group-hover:text-zinc-700">
                                              ادامه مطلب
                                              <svg
                                                      class="fill-zinc-600 transition group-hover:fill-zinc-700 size-2 md:size-4"
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="14"
                                                      height="14"
                                                      fill=""
                                                      viewBox="0 0 256 256">
                                                  <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                                              </svg>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <?php
                          }
                         ?>
                     </div>
                 </div>
             </div>
         </div>
    <?php
     }
     ?>

</main>
