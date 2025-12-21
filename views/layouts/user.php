<?php
$getInformation = getInformation();
if ($getInformation['image']){
    $thumbnailLogo = str_replace(PATH_UPLOADS_DIR, 'public/', $getInformation['image']);
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../assets/user/image/fav.png">

    <link rel="stylesheet" href="../../assets/user/css/main.css">

    <title><?= $_SESSION['page']['title'] ?></title>
    <?= $_SESSION['page']['link'] ?>
    <style>
        @layer theme {
            :root, :host {
                --color-primary-600:<?= $getInformation['color'] ?> ;
                --color-primary-500:<?= $getInformation['color2'] ?> ;
                --color-primary-400:<?= $getInformation['color3'] ?> ;
            }
        }
    </style>
</head>

<body class="max-w-[1700px] mx-auto">

<!-- loading -->
<div id="loading" class="z-50 fixed inset-0 flex flex-col items-center justify-center bg-gradient-to-bl from-zinc-50 to-zinc-100 transition-opacity duration-700">
    <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
    </div>
    <div class="flex items-center gap-6 mt-10">
        <img class="max-w-20 md:max-w-36" src="../../assets/user/image/logo.png" alt=""/>
        <div class="text-xl md:text-3xl font-yekanBakhExtraBold text-zinc-800">فروشگاه آنلاین دیجیتو</div>
    </div>
</div>

<!-- progress bar -->
<div id="progressBar"></div>

<header>
    <!-- top off banner -->
    <a href="#FIRSTBUY"
       class="w-full flex justify-center items-center bg-primary-500 py-2.5"
       data-copy="FIRSTBUY"
       style="background-image:url('../../assets/user/image/topography2.svg');background-repeat: repeat, no-repeat; background-size: auto, cover;">
        <p class="text-white text-sm md:text-xl font-yekanBakhLight">
            کد تخفیف 50 هزارتومانی اولین خرید -
        </p>
        <p class="text-white text-base md:text-2xl font-yekanBakhLight tracking-widest">
            FIRSTBUY
        </p>
        <img class="mr-4 -rotate-12 size-6 md:size-8" src="../../assets/user/image/icons/touch-icon.svg">
    </a>
    <!-- top header -->
    <div class="flex justify-between bg-white shadow-lg px-4 md:px-8 lg:px-14 py-5 relative">
        <div class="flex justify-between items-center gap-x-5 w-full md:w-auto">
            <!-- btn menu mobile -->
            <svg class="md:hidden menu-mobile" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
            <!-- bg blur mobile -->
            <div id="overlay" class="fixed z-10 inset-0 bg-black/35 hidden transition-opacity duration-300"></div>
            <!-- Sidebar mobile -->
            <div id="mobile-menu" class="z-20 fixed top-0 right-0 w-10/12 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
                <div class="p-5 flex flex-col gap-y-3 justify-center items-center">
                    <!-- logo -->
                    <a href="/">
                        <img src="<?= $thumbnailLogo ? "../../" . $thumbnailLogo : '' ?>" class="max-w-24 md:max-w-32 h-fit" alt="">
                    </a>
                    <!-- seacrh -->
                    <div class="relative block">
                        <input class="rounded-full text-zinc-600 bg-[#f0f0f0] px-5 py-2.5 w-64 text-sm placeholder:text-zinc-400 placeholder:text-sm focus:outline-0" type="text" placeholder="جستجو...">
                        <a href="#">
                            <img class="top-3 absolute left-3 size-4" src="../../assets/user/image/icons/lineicons_search-1.svg" alt="">
                        </a>
                    </div>
                </div>
                <ul class="p-5 space-y-1 text-sm text-zinc-800 h-screen overflow-y-auto pb-48">
                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg flex gap-x-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-gray-700 group-hover/cat:fill-primary-500 transition" d="M11.25 18C11.25 18.1989 11.329 18.3897 11.4697 18.5303C11.6103 18.671 11.8011 18.75 12 18.75C12.1989 18.75 12.3897 18.671 12.5303 18.5303C12.671 18.3897 12.75 18.1989 12.75 18V15C12.75 14.8011 12.671 14.6103 12.5303 14.4697C12.3897 14.329 12.1989 14.25 12 14.25C11.8011 14.25 11.6103 14.329 11.4697 14.4697C11.329 14.6103 11.25 14.8011 11.25 15V18Z" fill=""/>
                                <path class="fill-gray-700 group-hover/cat:fill-primary-500 transition" fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C11.292 1.25 10.649 1.453 9.95 1.792C9.276 2.12 8.496 2.604 7.523 3.208L5.456 4.491C4.536 5.063 3.797 5.521 3.229 5.956C2.64 6.406 2.188 6.866 1.861 7.463C1.535 8.058 1.389 8.692 1.318 9.441C1.25 10.166 1.25 11.054 1.25 12.167V13.78C1.25 15.684 1.25 17.187 1.403 18.362C1.559 19.567 1.889 20.54 2.633 21.309C3.38 22.082 4.33 22.428 5.508 22.591C6.648 22.75 8.106 22.75 9.942 22.75H14.058C15.894 22.75 17.352 22.75 18.492 22.591C19.669 22.428 20.62 22.082 21.368 21.309C22.111 20.54 22.441 19.567 22.598 18.362C22.75 17.187 22.75 15.684 22.75 13.78V12.167C22.75 11.054 22.75 10.167 22.682 9.441C22.612 8.691 22.465 8.058 22.139 7.463C21.812 6.866 21.359 6.407 20.771 5.956C20.203 5.52 19.465 5.063 18.544 4.491L16.477 3.208C15.504 2.604 14.724 2.12 14.049 1.792C13.352 1.452 12.709 1.25 12 1.25ZM8.28 4.504C9.295 3.874 10.01 3.432 10.607 3.141C11.188 2.858 11.6 2.75 12 2.75C12.4 2.75 12.812 2.858 13.393 3.141C13.991 3.431 14.705 3.874 15.72 4.504L17.72 5.745C18.681 6.342 19.356 6.761 19.86 7.147C20.349 7.522 20.63 7.831 20.823 8.183C21.016 8.536 21.129 8.949 21.188 9.581C21.249 10.229 21.25 11.046 21.25 12.204V13.725C21.25 15.695 21.248 17.101 21.11 18.168C20.974 19.216 20.717 19.824 20.29 20.267C19.865 20.706 19.287 20.967 18.286 21.106C17.26 21.248 15.907 21.25 14 21.25H10C8.092 21.25 6.74 21.248 5.714 21.106C4.713 20.966 4.135 20.706 3.711 20.266C3.283 19.824 3.026 19.216 2.891 18.168C2.751 17.101 2.75 15.696 2.75 13.725V12.204C2.75 11.046 2.75 10.229 2.812 9.581C2.871 8.949 2.984 8.536 3.177 8.183C3.37 7.831 3.651 7.522 4.141 7.147C4.644 6.761 5.319 6.342 6.28 5.745L8.28 4.504Z" fill=""/>
                            </svg>
                            صفحه اصلی
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg flex gap-x-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.144 2.5C6.487 2.56 4.935 2.815 3.874 3.875C2.813 4.935 2.562 6.487 2.5 9.145M14.856 2.5C17.513 2.56 19.065 2.815 20.126 3.875C21.187 4.935 21.439 6.487 21.5 9.145M14.856 21.5C17.513 21.44 19.065 21.185 20.126 20.125C21.187 19.065 21.439 17.513 21.5 14.855M9.144 21.5C6.487 21.44 4.935 21.185 3.874 20.125C2.813 19.065 2.561 17.513 2.5 14.855M8 8H8.009M16 16H16.009M8 16L16 8" stroke="#3f3f46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            شگفت انگیزها
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg flex gap-x-2">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 15.245V22.117C17 22.2055 16.9766 22.2924 16.932 22.3688C16.8875 22.4452 16.8235 22.5085 16.7465 22.5521C16.6696 22.5957 16.5824 22.6181 16.4939 22.6171C16.4055 22.616 16.3189 22.5915 16.243 22.546L12 20L7.757 22.546C7.68104 22.5915 7.59436 22.616 7.50581 22.6171C7.41727 22.6181 7.33004 22.5956 7.25304 22.5519C7.17605 22.5081 7.11205 22.4447 7.06759 22.3681C7.02313 22.2916 6.9998 22.2046 7 22.116V15.246C5.70615 14.2101 4.76599 12.7979 4.30946 11.2045C3.85293 9.6112 3.90256 7.91539 4.45149 6.35147C5.00043 4.78756 6.02156 3.43275 7.37378 2.47428C8.726 1.51581 10.3425 1.001 12 1.001C13.6575 1.001 15.274 1.51581 16.6262 2.47428C17.9784 3.43275 18.9996 4.78756 19.5485 6.35147C20.0974 7.91539 20.1471 9.6112 19.6905 11.2045C19.234 12.7979 18.2939 14.2101 17 15.246M9 16.42V19.469L12 17.669L15 19.469V16.419C14.0466 16.8036 13.028 17.0009 12 17C10.972 17.0009 9.95338 16.8046 9 16.42ZM12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15Z" fill="#364153"/>
                            </svg>
                            پرفروش ترین‌ها
                        </a>
                    </li>
                    <!-- categorys -->
                    <li class="border-y border-zinc-300 py-2">
                        <!-- 1 -->
                    <li>
                        <button class="menu-toggle flex justify-between w-full py-3 px-4 hover:bg-gray-100 rounded-lg">
                            <div class="flex items-center gap-x-1">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.25 2.75H8.75C7.09315 2.75 5.75 4.09315 5.75 5.75V18.25C5.75 19.9069 7.09315 21.25 8.75 21.25H15.25C16.9069 21.25 18.25 19.9069 18.25 18.25V5.75C18.25 4.09315 16.9069 2.75 15.25 2.75Z" stroke="#71717b" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11 17.75H13" stroke="#71717b" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>موبایل</span>
                            </div>
                            <img class="w-4 transition-transform opacity-80" src="../../assets/user/image/icons/arrowDown.svg" alt="">
                        </button>
                        <ul class="submenu hidden pr-6 space-y-2">
                            <li>
                                <button class="menu-toggle flex justify-between w-full py-3 px-4 hover:bg-gray-100 rounded-lg">
                                    <a href="">طراحی گرافیک</a>
                                    <img class="w-4 transition-transform opacity-80" src="../../assets/user/image/icons/arrowDown.svg" alt="">
                                </button>
                                <ul class="submenu hidden pr-6 space-y-2">
                                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded-md">طراحی لوگو</a></li>
                                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded-md">طراحی بنر</a></li>
                                </ul>
                            </li>
                            <li>
                                <button class="menu-toggle flex justify-between w-full py-3 px-4 hover:bg-gray-100 rounded-lg">
                                    <a href="">طراحی گرافیک</a>
                                    <img class="w-4 transition-transform opacity-80" src="../../assets/user/image/icons/arrowDown.svg" alt="">
                                </button>
                                <ul class="submenu hidden pr-6 space-y-2">
                                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded-md">طراحی لوگو</a></li>
                                    <li><a href="#" class="block py-2 px-4 hover:bg-gray-100 rounded-md">طراحی بنر</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- 2 -->

                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg block">
                            وبلاگ
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg block">
                            درباره ما
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-3 px-4 hover:bg-gray-100 rounded-lg block">
                            تماس با ما
                        </a>
                    </li>
                </ul>
                <div class="bg-zinc-100 w-full h-16 px-2 py-4 flex justify-between items-center fixed bottom-0">
                    <div class="text-zinc-600 text-xs lg:text-sm">
                        همین حالا با پشتیبانی تماس بگیر
                    </div>
                    <a href="tel:<?= $getInformation['mobileHeather'] ?>" class="text-primary-500 flex text-xs lg:text-base gap-x-1 items-start">
                        <?= $getInformation['mobileHeather'] ?>
                        <img class="w-3 lg:w-5" src="../../assets/user/image/icons/headphones.svg" alt="">
                    </a>
                </div>
            </div>
            <!-- logo -->
            <a href="/">
                <img src="../../assets/user/image/logo.png" class="max-w-24 md:max-w-32 h-fit" alt="">
            </a>
            <!-- empty -->
            <div class="md:hidden size-8">
            </div>
            <!-- seacrh -->
            <div class="relative hidden md:block">
                <input class="rounded-full text-zinc-600   bg-[#f0f0f0] px-5 py-2.5 w-80 placeholder:text-zinc-400 placeholder:text-sm focus:outline-0" type="text" placeholder="جستجو...">
                <a href="#">
                    <img class="top-2.5 absolute left-3 size-5" src="../../assets/user/image/icons/lineicons_search-1.svg" alt="">
                </a>
            </div>
        </div>
        <div class="hidden md:flex items-center gap-x-2 lg:gap-x-3">
            <div class="text-zinc-600 text-xs lg:text-sm">
                همین حالا با پشتیبانی تماس بگیر
            </div>
            <div class="text-zinc-300">
                |
            </div>
            <a href="tel:05144556677" class="text-primary-500 flex text-xs lg:text-base gap-x-1 items-start">
                051-44556677
                <img class="w-3 lg:w-5" src="../../assets/user/image/icons/headphones.svg" alt="">
            </a>
        </div>
        <svg class="hidden md:block absolute top-full md:right-4 lg:right-10" width="158" height="19" viewBox="0 0 158 19" fill="white" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_4623_10410)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M101.486 -121.419C121.078 -114.984 140.312 -105 160.935 -105H506.5C535.495 -105 559 -81.4949 559 -52.5V-52.5C559 -23.5051 535.495 0 506.5 0H158.936C138.871 0 120.093 9.46189 100.984 15.5822C94.0537 17.8017 86.6668 19 79 19C71.3332 19 63.9463 17.8017 57.0164 15.5822C37.9074 9.46189 19.1287 0 -0.936457 0H-1468.5C-1497.49 0 -1521 -23.5051 -1521 -52.5V-52.5C-1521 -81.4949 -1497.49 -105 -1468.5 -105H-2.93493C17.6877 -105 36.9216 -114.984 56.5145 -121.419C63.5893 -123.743 71.1478 -125 79 -125C86.8522 -125 94.4107 -123.743 101.486 -121.419Z" fill="white"></path>
            </g>
            <defs>
                <clipPath id="clip0_4623_10410">
                    <rect width="158" height="19" fill="white"></rect>
                </clipPath>
            </defs>
        </svg>
    </div>
    <!-- bottom header -->
    <div class="md:bg-zinc-50 py-6 px-6 lg:px-14 justify-between flex">
        <!-- menu -->
        <ul class="hidden md:flex gap-x-5 xl:gap-x-8 items-center">
            <li>
                <div class="relative inline-block group">
                    <a href="#" class="pt-1 flex gap-x-2 items-center group relative">
                        <img class="mb-2 size-4" src="../../assets/user/image/icons/category.svg" alt="">
                        <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
                after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
                group-hover:after:scale-x-100">
                            دسته بندی ها
                        </div>
                        <svg class="group-hover:rotate-180 transition-all duration-300 fill-zinc-600 mb-2 group-hover:fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#000000" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    </a>
                    <script>
                        // مدیریت نمایان‌سازی زیرمنوها
                        document.querySelectorAll('.category-item').forEach(catItem => {
                            catItem.addEventListener('mouseenter', function () {
                                const catId = catItem.getAttribute('data-category');
                                document.querySelectorAll('.subcategory-item').forEach(sub => {
                                    sub.classList.add('hidden'); // مخفی کردن همه زیرمنوها
                                    if (sub.getAttribute('data-parent') === catId) {
                                        sub.classList.remove('hidden'); // نمایش زیرمنوی مرتبط
                                    }
                                });
                            });
                        });

                        // مخفی کردن زیرمنوها هنگام ترک منو
                        document.getElementById('dropdown-menu').addEventListener('mouseleave', function() {
                            document.querySelectorAll('.subcategory-item').forEach(sub => {
                                sub.classList.add('hidden');
                            });
                        });
                    </script>
                    <?php
                    $categories = getAllCategory(); // دریافت همه دسته‌بندی‌ها
                    ?>
                    <div id="dropdown-menu" class="absolute z-10 right-0 mt-2 md:w-2xl lg:w-4xl xl:w-7xl h-fit bg-white p-5 shadow-lg rounded-3xl flex opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                        <ul class="w-1/4 rounded-2xl bg-white drop-shadow-custom flex flex-col gap-y-3 p-3">
                            <?php foreach ($categories as $category): ?>
                                <li class="category-item group/cat flex items-center gap-x-1 text-sm rounded-lg px-4 py-3 text-gray-600 hover:text-primary-500 cursor-pointer hover:bg-gradient-to-l hover:from-zinc-100 hover:to-transparent transition-all" data-category="<?php echo $category['id']; ?>">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M15.25 2.75H8.75C7.09315 2.75 5.75 4.09315 5.75 5.75V18.25C5.75 19.9069 7.09315 21.25 8.75 21.25H15.25C16.9069 21.25 18.25 19.9069 18.25 18.25V5.75C18.25 4.09315 16.9069 2.75 15.25 2.75Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="stroke-gray-600 group-hover/cat:stroke-primary-500 transition" d="M11 17.75H13" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <?php echo htmlspecialchars($category['title']); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="w-2/3 p-4" id="subcategory-container">
                            <?php foreach ($categories as $category): ?>
                                <div data-parent="<?php echo $category['id']; ?>" class="subcategory-item grid grid-cols-2 xl:grid-cols-3 gap-y-5 gap-x-10 hidden">
                                    <?php
                                    // بارگذاری زیردسته‌ها
                                    $subcategories = getSubcategories($category['id']);
                                    foreach ($subcategories as $subcategory):
                                        ?>
                                        <div>
                                            <a href="#" class="flex gap-x-2 items-center mb-5">
                                                <div class="w-fit min-w-fit text-primary-500 text-sm hover:text-primary-700 transition">
                                                    <?php echo htmlspecialchars($subcategory['title']); ?>
                                                </div>
                                                <div class="w-full h-0.5 border-t border-dashed border-primary-500/30"></div>
                                            </a>
                                            <ul class="pr-4 flex flex-col gap-y-3 text-xs mb-3">
                                                <?php
                                                // بارگذاری زیرزیردسته‌ها
                                                $subsubcategories = getSubcategories($subcategory['id']);
                                                foreach ($subsubcategories as $subsubcategory):
                                                    ?>
                                                    <li>
                                                        <a href="#" class="text-zinc-500 hover:text-zinc-700 transition">
                                                            <?php echo htmlspecialchars($subsubcategory['title']); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="pt-1 flex gap-x-2 items-center group relative">
                    <img class="mb-2 size-4.5" src="../../assets/user/image/icons/discount.svg" alt="">
                    <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
              after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
              after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
              group-hover:after:scale-x-100">
                        شگفت انگیزها
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="pt-1 flex gap-x-1 items-center group relative">
                    <img class="mb-2 size-4.5" src="../../assets/user/image/icons/award.svg" alt="">
                    <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
              after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
              after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
              group-hover:after:scale-x-100">
                        پرفروش ترین‌ها
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="pt-1 flex gap-x-2 items-center group relative">
                    <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
              after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
              after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
              group-hover:after:scale-x-100">
                        وبلاگ
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="pt-1 flex gap-x-2 items-center group relative">
                    <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
              after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
              after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
              group-hover:after:scale-x-100">
                        درباره ما
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="pt-1 flex gap-x-2 items-center group relative">
                    <div class="relative text-zinc-600 text-sm group-hover:text-primary-500 transition pb-2
              after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px]
              after:bg-primary-500 after:scale-x-0 after:origin-right after:transition-transform after:duration-300
              group-hover:after:scale-x-100">
                        تماس با ما
                    </div>
                </a>
            </li>
        </ul>
        <!-- buttons -->
        <div class="flex gap-x-5">
            <!-- cart -->
            <div class="absolute top-14 left-16 md:top-0 md:left-0 md:relative group cursor-pointer border-2 border-primary-500 hover:shadow-lg hover:bg-zinc-200 transition rounded-xl p-2.5">
                <img src="../../assets/user/image/icons/cart.svg" alt="">
                <span class="absolute -right-2 -top-2 flex size-6 drop-shadow-lg items-center justify-center rounded-full bg-white text-sm font-semibold text-primary-500">
            3
          </span>
                <div class="z-50 hidden group-hover:block absolute -left-16 sm:left-0 top-11 w-96 md:w-[400px] rounded-2xl border border-zinc-300 bg-white shadow-lg">
                    <!-- Items -->
                    <!-- <div class="text-zinc-600 text-center py-10 font-yekanBakhRegular flex justify-center items-center gap-x-1">
                      <img src="./assets/image/icons/cancel.svg" alt="">
                      سبد خرید خالی است !
                    </div> -->
                    <div class="h-72 md:h-64">
                        <ul class="main-scroll h-full space-y-2 divide-y divide-gray-100 overflow-y-auto p-5 pl-2">
                            <li>
                                <div class="flex gap-x-2 pt-5">
                                    <!-- Product -->
                                    <div class="relative min-w-fit">
                                        <a href="./single-product.html">
                                            <img alt="" class="h-[120px] w-[120px]" src="../../assets/user/image/products/1.webp">
                                        </a>
                                    </div>
                                    <div class="w-full flex gap-x-1">
                                        <!-- Title -->
                                        <a class="line-clamp-2 h-12 text-zinc-700" href="./single-product.html">
                                            لپ تاپ مدل لنوو دارای 2 پورت حرفه ای با قیمت مناسب
                                        </a>
                                        <!-- delete -->
                                        <div class="size-8 group cursor-pointer rounded-lg p-1 bg-primary-400 hover:bg-primary-500 transition">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-white" d="M20.5 6H3.5M9.5 11L10 16M14.5 11L14 16" stroke="" stroke-width="1.5" stroke-linecap="round"/>
                                                <path class="stroke-white" d="M6.5 6H6.61C7.01245 5.98972 7.40242 5.85822 7.72892 5.62271C8.05543 5.3872 8.30325 5.05864 8.44 4.68L8.474 4.577L8.571 4.286C8.654 4.037 8.696 3.913 8.751 3.807C8.85921 3.59939 9.01451 3.41999 9.20448 3.28316C9.39444 3.14633 9.6138 3.05586 9.845 3.019C9.962 3 10.093 3 10.355 3H13.645C13.907 3 14.038 3 14.155 3.019C14.3862 3.05586 14.6056 3.14633 14.7955 3.28316C14.9855 3.41999 15.1408 3.59939 15.249 3.807C15.304 3.913 15.346 4.037 15.429 4.286L15.526 4.577C15.6527 4.99827 15.9148 5.36601 16.2717 5.62326C16.6285 5.88051 17.0603 6.01293 17.5 6" stroke="black" stroke-width="1.5"/>
                                                <path class="stroke-white" d="M18.374 15.4C18.197 18.054 18.108 19.381 17.243 20.19C16.378 20.999 15.048 21 12.387 21H11.613C8.95299 21 7.62299 21 6.75699 20.19C5.89199 19.381 5.80399 18.054 5.62699 15.4L5.16699 8.5M18.833 8.5L18.633 11.5" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between px-6 w-full pb-2">
                                    <!-- Quantity Container 1 -->
                                    <div class="quantity-container flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                        <button class="cursor-pointer" type="button" data-action="increment">
                                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                        </button>
                                        <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                                        <button class="cursor-pointer" type="button" data-action="decrement">
                                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                        </button>
                                    </div>
                                    <!-- Price -->
                                    <div class="text-gray-700">
                                        <span class="text-lg font-bold">1,800,000</span>
                                        <span class="text-sm">تومان</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="flex gap-x-2 pt-5">
                                    <!-- Product -->
                                    <div class="relative min-w-fit">
                                        <a href="./single-product.html">
                                            <img alt="" class="h-[120px] w-[120px]" src="../../assets/user/image/products/1.webp">
                                        </a>
                                    </div>
                                    <div class="w-full flex gap-x-1">
                                        <!-- Title -->
                                        <a class="line-clamp-2 h-12 text-zinc-700" href="./single-product.html">
                                            لپ تاپ مدل لنوو دارای 2 پورت حرفه ای با قیمت مناسب
                                        </a>
                                        <!-- delete -->
                                        <div class="size-8 group cursor-pointer rounded-lg p-1 bg-primary-400 hover:bg-primary-500 transition">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="stroke-white" d="M20.5 6H3.5M9.5 11L10 16M14.5 11L14 16" stroke="" stroke-width="1.5" stroke-linecap="round"/>
                                                <path class="stroke-white" d="M6.5 6H6.61C7.01245 5.98972 7.40242 5.85822 7.72892 5.62271C8.05543 5.3872 8.30325 5.05864 8.44 4.68L8.474 4.577L8.571 4.286C8.654 4.037 8.696 3.913 8.751 3.807C8.85921 3.59939 9.01451 3.41999 9.20448 3.28316C9.39444 3.14633 9.6138 3.05586 9.845 3.019C9.962 3 10.093 3 10.355 3H13.645C13.907 3 14.038 3 14.155 3.019C14.3862 3.05586 14.6056 3.14633 14.7955 3.28316C14.9855 3.41999 15.1408 3.59939 15.249 3.807C15.304 3.913 15.346 4.037 15.429 4.286L15.526 4.577C15.6527 4.99827 15.9148 5.36601 16.2717 5.62326C16.6285 5.88051 17.0603 6.01293 17.5 6" stroke="black" stroke-width="1.5"/>
                                                <path class="stroke-white" d="M18.374 15.4C18.197 18.054 18.108 19.381 17.243 20.19C16.378 20.999 15.048 21 12.387 21H11.613C8.95299 21 7.62299 21 6.75699 20.19C5.89199 19.381 5.80399 18.054 5.62699 15.4L5.16699 8.5M18.833 8.5L18.633 11.5" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between px-6 w-full pb-2">
                                    <!-- Quantity Container 1 -->
                                    <div class="quantity-container flex h-10 max-w-28 items-center justify-between rounded-lg border border-gray-100 px-2 py-1">
                                        <button class="cursor-pointer" type="button" data-action="increment">
                                            <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H134v82a6,6,0,0,1-12,0V134H40a6,6,0,0,1,0-12h82V40a6,6,0,0,1,12,0v82h82A6,6,0,0,1,222,128Z"></path></svg>
                                        </button>
                                        <input value="1" disabled type="number" class="flex h-5 w-full grow select-none items-center justify-center bg-transparent text-center text-sm text-zinc-700 outline-none">
                                        <button class="cursor-pointer" type="button" data-action="decrement">
                                            <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 256 256"><path d="M222,128a6,6,0,0,1-6,6H40a6,6,0,0,1,0-12H216A6,6,0,0,1,222,128Z"></path></svg>
                                        </button>
                                    </div>
                                    <!-- Price -->
                                    <div class="text-gray-700">
                                        <span class="text-lg font-bold">1,800,000</span>
                                        <span class="text-sm">تومان</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Down Price -->
                    <div class="flex items-center justify-between border-t border-gray-100 p-5">
                        <div class="flex flex-col items-center gap-y-1">
                            <div class="text-sm text-zinc-600">
                                مبلغ قابل پرداخت
                            </div>
                            <div class="text-zinc-600">
                                <span class="font-bold">3,600,000</span>
                                <span class="text-xs">تومان</span>
                            </div>
                        </div>
                        <a href="./checkout.html" class="w-28 py-3 text-sm bg-primary-400 hover:bg-primary-500 transition text-gray-100 rounded-xl text-center">
                            <button type="button">
                                ثبت سفارش
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- login / register -->

            <?php
            if (isset($_SESSION['user_sending'])){
                $getInfoUser = getInfoUser($_SESSION['user_sending']);
            ?>
                <div class="group md:relative">
                    <a href="#" data-modal="modal1" class="open-modal absolute md:static top-[58px] left-3 md:flex bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 hover:shadow-lg transition rounded-xl p-2.5 items-center gap-x-2 text-sm text-white">
                        <p class="hidden lg:block">
                            ورود | ثبت نام
                        </p>
                        <img src="../../assets/user/image/icons/user.svg" alt="">
                    </a>
                    <div class="z-50 group-hover:block left-4 md:left-0 top-16 md:top-[43px] w-60 rounded-xl bg-white shadow-lg hidden absolute">
                        <ul class="space-y-1 p-2">
                            <li>
                                <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="./profile.html">
                              <span class="flex items-center gap-x-2">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M229.19,213c-15.81-27.32-40.63-46.49-69.47-54.62a70,70,0,1,0-63.44,0C67.44,166.5,42.62,185.67,26.81,213a6,6,0,1,0,10.38,6C56.4,185.81,90.34,166,128,166s71.6,19.81,90.81,53a6,6,0,1,0,10.38-6ZM70,96a58,58,0,1,1,58,58A58.07,58.07,0,0,1,70,96Z"></path></svg>
                                </span>
                                <span class="text-sm"><?= $getInfoUser['userFullName'] ?></span>
                              </span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="./profile-order.html">
                              <span class="flex items-center gap-x-2">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M237.9,198.36l-14.25-120a14.06,14.06,0,0,0-14-12.36H174V64a46,46,0,0,0-92,0v2H46.33a14.06,14.06,0,0,0-14,12.36l-14.25,120a14,14,0,0,0,14,15.64H223.92a14,14,0,0,0,14-15.64ZM94,64a34,34,0,0,1,68,0v2H94ZM225.5,201.3a2.07,2.07,0,0,1-1.58.7H32.08a2.07,2.07,0,0,1-1.58-.7,1.92,1.92,0,0,1-.49-1.53l14.26-120A2,2,0,0,1,46.33,78H209.67a2,2,0,0,1,2.06,1.77l14.26,120A1.92,1.92,0,0,1,225.5,201.3Z"></path></svg>
                                </span>
                                <span class="text-sm">سفارش ها</span>
                              </span>
                                </a>
                            </li>
                            <li>
                                <a  class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="/favorites">
                              <span class="flex items-center gap-x-2">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M178,34c-21,0-39.26,9.47-50,25.34C117.26,43.47,99,34,78,34A60.07,60.07,0,0,0,18,94c0,29.2,18.2,59.59,54.1,90.31a334.68,334.68,0,0,0,53.06,37,6,6,0,0,0,5.68,0,334.68,334.68,0,0,0,53.06-37C219.8,153.59,238,123.2,238,94A60.07,60.07,0,0,0,178,34ZM128,209.11C111.59,199.64,30,149.72,30,94A48.05,48.05,0,0,1,78,46c20.28,0,37.31,10.83,44.45,28.27a6,6,0,0,0,11.1,0C140.69,56.83,157.72,46,178,46a48.05,48.05,0,0,1,48,48C226,149.72,144.41,199.64,128,209.11Z"></path></svg>
                                </span>
                                <span class="text-sm">علاقه مندی ها</span>
                              </span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-zinc-700 hover:text-zinc-800 transition hover:bg-gray-100" href="./profile-messages.html">
                              <span class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M227.33,91l-96-64a6,6,0,0,0-6.66,0l-96,64A6,6,0,0,0,26,96V200a14,14,0,0,0,14,14H216a14,14,0,0,0,14-14V96A6,6,0,0,0,227.33,91ZM100.18,152,38,195.9V107.65Zm12.27,6h31.1l62.29,44H50.16Zm43.37-6L218,107.65V195.9ZM128,39.21l85.43,57L143.53,146H112.47L42.57,96.17Z"></path></svg>
                                <span>پیغام ها</span>
                              </span>
                                    <span class="relative flex h-5 w-5">
                                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary-500 opacity-75"></span>
                                <span class="relative inline-flex h-5 w-5 items-center justify-center rounded-full bg-primary-500 text-sm text-white">
                                  4
                                </span>
                              </span>
                                </a>
                            </li>
                            <li>
                                <a onclick="logout()" class="flex items-center justify-between gap-x-2 rounded-lg p-2 text-red-500 hover:text-red-600 transition hover:bg-red-100" href="">
                                    <div class="flex items-center gap-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M110,216a6,6,0,0,1-6,6H48a14,14,0,0,1-14-14V48A14,14,0,0,1,48,34h56a6,6,0,0,1,0,12H48a2,2,0,0,0-2,2V208a2,2,0,0,0,2,2h56A6,6,0,0,1,110,216Zm110.24-92.24-40-40a6,6,0,0,0-8.48,8.48L201.51,122H104a6,6,0,0,0,0,12h97.51l-29.75,29.76a6,6,0,1,0,8.48,8.48l40-40A6,6,0,0,0,220.24,123.76Z"></path></svg>
                                        <span>خروج از حساب کاربری</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php
            }else{
                ?>
                <div class="group md:relative">
                    <a href="/login" class="open-modal absolute md:static top-[58px] left-3 md:flex bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 hover:shadow-lg transition rounded-xl p-2.5 items-center gap-x-2 text-sm text-white">
                        <p class="hidden lg:block">
                            ورود | ثبت نام
                        </p>
                        <img src="../../assets/user/image/icons/user.svg" alt="">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</header>
<?= $_SESSION['page']['content'] ?>

<footer class="bg-white border-t border-zinc-200 w-full px-5 md:px-10 py-5">
    <!-- fixed btn social media -->
    <div id="CTAWrapper"
         class="group fixed bottom-5 right-5 z-50 cursor-pointer">
        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-zinc-300 opacity-75"></span>
        <button id="CTA"
                class="p-3.5 bg-primary-500 rounded-[20px] flex items-center justify-center transition duration-300 text-white relative overflow-hidden cursor-pointer">
            <svg id="icon-open" class="size-6 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M4.02513 4.0716L3.4949 3.54117H3.4949L4.02513 4.0716ZM8.97487 4.0716L9.5051 3.54117L8.97487 4.0716ZM8.97487 9.01942L8.44465 8.48898L8.97487 9.01942ZM14.9853 15.0275L14.4551 14.497L14.9853 15.0275ZM19.935 19.9753L19.4048 19.4449L19.935 19.9753ZM7.56066 16.4411L7.03043 16.9716L7.56066 16.4411ZM3.01853 6.90616L3.76852 6.9019C3.76838 6.87764 3.76707 6.8534 3.76458 6.82926L3.01853 6.90616ZM17.0994 20.9815L17.1762 20.2354C17.1521 20.233 17.1279 20.2316 17.1036 20.2315L17.0994 20.9815ZM7.05559 10L6.9372 9.25944C6.69728 9.29779 6.49081 9.44999 6.38319 9.66782C6.27556 9.88565 6.28013 10.1421 6.39544 10.356L7.05559 10ZM14.0043 16.946L13.6486 17.6063C13.8624 17.7215 14.1188 17.726 14.3366 17.6184C14.5543 17.5108 14.7065 17.3043 14.7449 17.0645L14.0043 16.946ZM4.55535 4.60203C5.62932 3.52849 7.37068 3.52849 8.44465 4.60203L9.5051 3.54117C7.8454 1.88211 5.1546 1.88211 3.4949 3.54117L4.55535 4.60203ZM8.44465 4.60203C9.51845 5.67542 9.51845 7.4156 8.44465 8.48898L9.5051 9.54985C11.165 7.89063 11.165 5.20039 9.5051 3.54117L8.44465 4.60203ZM15.5155 15.5579C16.5895 14.4844 18.3308 14.4844 19.4048 15.5579L20.4653 14.497C18.8055 12.838 16.1148 12.838 14.4551 14.497L15.5155 15.5579ZM19.4048 15.5579C20.4786 16.6313 20.4786 18.3715 19.4048 19.4449L20.4653 20.5057C22.1251 18.8465 22.1251 16.1563 20.4653 14.497L19.4048 15.5579ZM8.09089 15.9107C5.26504 13.086 3.78435 9.69148 3.76852 6.9019L2.26854 6.91041C2.28711 10.1813 3.99291 13.9352 7.03043 16.9716L8.09089 15.9107ZM3.76458 6.82926C3.6825 6.03286 3.94644 5.21071 4.55535 4.60203L3.4949 3.54117C2.5532 4.4825 2.14608 5.75662 2.27248 6.98305L3.76458 6.82926ZM19.4048 19.4449C18.7959 20.0536 17.9732 20.3175 17.1762 20.2354L17.0225 21.7275C18.2491 21.8539 19.5236 21.447 20.4653 20.5057L19.4048 19.4449ZM17.1036 20.2315C14.3127 20.2157 10.9167 18.7354 8.09089 15.9107L7.03043 16.9716C10.068 20.0079 13.8232 21.7129 17.0951 21.7315L17.1036 20.2315ZM8.44465 8.48898C8.01844 8.91502 7.48913 9.17121 6.9372 9.25944L7.17398 10.7406C8.02737 10.6042 8.84804 10.2067 9.5051 9.54985L8.44465 8.48898ZM10.5658 13.4368C9.37781 12.2493 8.42284 10.9555 7.71575 9.6441L6.39544 10.356C7.17383 11.7997 8.21742 13.2103 9.50531 14.4977L10.5658 13.4368ZM14.7449 17.0645C14.8331 16.513 15.0893 15.9839 15.5155 15.5579L14.4551 14.497C13.798 15.1539 13.4002 15.9743 13.2637 16.8275L14.7449 17.0645ZM14.36 16.2857C13.048 15.5789 11.7537 14.6243 10.5658 13.4368L9.50531 14.4977C10.7932 15.785 12.2044 16.8282 13.6486 17.6063L14.36 16.2857Z" fill="#ffffff"></path>
            </svg>
            <svg id="icon-close" class="size-6 hidden opacity-0 transition-all duration-300"
                 xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24">
                <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <div id="popup" class="absolute bottom-16 right-0 w-56 opacity-0 pointer-events-none translate-y-5 transition-all duration-300">
            <div class="flex flex-col">
            <?php
            $getAllLink = getAllLink();
            if ($getAllLink){
                foreach ($getAllLink as $AllLink){
                if ($AllLink['title'] == 'instagram'){
                    ?>
                    <a href="<?= $AllLink['link'] ?>" class="flex items-center gap-x-3 text-sm text-zinc-700 py-3">
                        <svg class="bg-gradient-to-tr from-[#feda75] via-[#e93787] via-40% to-[#962fbf] p-3 size-14 rounded-2xl shadow-custom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 256 256" version="1.1" preserveAspectRatio="xMidYMid" >
                            <g>
                                <path d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z" fill="#ffffff">
                                </path>
                            </g>
                        </svg>
                        <p class="bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 px-4">
                            پیج اینستاگرام
                        </p>
                    </a>
            <?php
                }
                    if ($AllLink['title'] == 'whatsapp'){
                        ?>
                        <a href="<?= $AllLink['link'] ?>" class="flex items-center gap-x-3 text-sm text-zinc-700 py-3">
                            <svg class="bg-green-500 p-3 size-14 rounded-2xl shadow-custom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" width="800px" height="800px" viewBox="0 0 1024 1024" t="1569683925316"  version="1.1" p-id="14972"><defs><style type="text/css"/></defs><path d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8-10.1-3.8-17.5-5.6-24.8 5.6-7.4 11.1-28.4 35.8-35 43.3-6.4 7.4-12.9 8.3-23.8 2.8-64.8-32.4-107.3-57.8-150-131.1-11.3-19.5 11.3-18.1 32.4-60.2 3.6-7.4 1.8-13.7-1-19.3-2.8-5.6-24.8-59.8-34-81.9-8.9-21.5-18.1-18.5-24.8-18.9-6.4-0.4-13.7-0.4-21.1-0.4-7.4 0-19.3 2.8-29.4 13.7-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5 70 30.2 97.4 32.8 132.4 27.6 21.3-3.2 65.2-26.6 74.3-52.5 9.1-25.8 9.1-47.9 6.4-52.5-2.7-4.9-10.1-7.7-21-13z" p-id="14973"/><path d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6 0.3-119.3 12.3-174.5 35.9-53.3 22.8-101.1 55.2-142 96.5-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9 0.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3 53.5-22.3 101.6-54.3 142.8-95.2 41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5 0.3-60.9-11.5-120-34.8-175.6z m-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-0.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-0.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-0.6 99.6-39.7 192.9-110.1 262.7z" p-id="14974"/></svg>
                            <p class="bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 px-4">
                                پشتیانی واتساپ
                            </p>
                        </a>
            <?php
                    }
                    if ($AllLink['title'] == 'etaa'){
                        ?>
                        <a href="<?= $AllLink['link'] ?>" class="flex items-center gap-x-3 text-sm text-zinc-700 py-3">
                            <svg class="bg-amber-500 p-3 size-14 rounded-2xl shadow-custom" width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Frame" clip-path="url(#clip0_4667_548)">
                                    <g id="Isolation Mode">
                                        <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.72696 8.16637e-05H21.2724C25.8728 8.16637e-05 29.6361 3.75792 29.6361 8.35796V12.3916C25.512 14.2453 21.3518 23.4008 15.2883 21.4114C14.7889 21.7663 13.6378 23.2288 13.557 24.3385C11.4574 24.0589 9.03679 21.6527 9.32727 19.058C5.83255 16.5301 8.71846 11.8638 11.4897 9.9856C17.4293 5.96007 25.6751 9.42212 21.0884 12.3004C18.2994 14.0505 12.3354 15.2066 12.9554 10.9101C11.3194 11.382 10.2721 14.4326 12.2419 16.0223C10.4172 17.815 10.768 21.1105 12.7185 22.1925C14.6912 17.0814 21.5571 17.7494 24.3311 11.6481C26.4182 7.05861 23.3239 1.82911 17.1373 2.63243C12.4682 3.23879 8.09169 7.17735 5.90294 11.8486C3.68218 16.588 4.01267 22.9345 8.57278 26.1331C13.9393 29.8971 19.6528 26.4118 23.1132 21.8565C25.1529 19.1715 26.935 16.1972 29.6361 14.4792V21.6307C29.6361 26.2306 25.8723 30.0001 21.2724 30.0001H8.72696C4.12692 30.0001 0.363281 26.2364 0.363281 21.6364V8.36368C0.363281 3.76364 4.12692 0 8.72696 0V8.16637e-05Z" fill="#ffffff"></path>
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4667_548">
                                        <rect width="30" height="30" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            <p class="bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 px-4">
                                پشتیانی ایتا
                            </p>
                        </a>
                <?php
                    }
                    if ($AllLink['title'] == 'telegram'){
                        ?>
                        <a href="<?= $AllLink['link'] ?>" class="flex items-center gap-x-3 text-sm text-zinc-700 py-3">
                            <svg class="bg-blue-500 p-3 size-14 rounded-2xl shadow-custom" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" width="800px" height="800px" viewBox="0 0 32 32" version="1.1" >
                                <title>telegram</title>
                                <path d="M22.122 10.040c0.006-0 0.014-0 0.022-0 0.209 0 0.403 0.065 0.562 0.177l-0.003-0.002c0.116 0.101 0.194 0.243 0.213 0.403l0 0.003c0.020 0.122 0.031 0.262 0.031 0.405 0 0.065-0.002 0.129-0.007 0.193l0-0.009c-0.225 2.369-1.201 8.114-1.697 10.766-0.21 1.123-0.623 1.499-1.023 1.535-0.869 0.081-1.529-0.574-2.371-1.126-1.318-0.865-2.063-1.403-3.342-2.246-1.479-0.973-0.52-1.51 0.322-2.384 0.221-0.23 4.052-3.715 4.127-4.031 0.004-0.019 0.006-0.040 0.006-0.062 0-0.078-0.029-0.149-0.076-0.203l0 0c-0.052-0.034-0.117-0.053-0.185-0.053-0.045 0-0.088 0.009-0.128 0.024l0.002-0.001q-0.198 0.045-6.316 4.174c-0.445 0.351-1.007 0.573-1.619 0.599l-0.006 0c-0.867-0.105-1.654-0.298-2.401-0.573l0.074 0.024c-0.938-0.306-1.683-0.467-1.619-0.985q0.051-0.404 1.114-0.827 6.548-2.853 8.733-3.761c1.607-0.853 3.47-1.555 5.429-2.010l0.157-0.031zM15.93 1.025c-8.302 0.020-15.025 6.755-15.025 15.060 0 8.317 6.742 15.060 15.060 15.060s15.060-6.742 15.060-15.060c0-8.305-6.723-15.040-15.023-15.060h-0.002q-0.035-0-0.070 0z"/>
                            </svg>
                            <p class="bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 px-4">
                                پشتیانی تلگرام
                            </p>
                        </a>
                <?php

                    }
                }
            }
            ?>
                <a href="tel:<?= $getInformation['mobileHeather'] ?>" class="flex items-center gap-x-3 text-sm text-zinc-700 py-3">
                    <svg class="bg-primary-500 p-3 size-14 rounded-2xl shadow-custom" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none" >
                        <path d="M21 5.5C21 14.0604 14.0604 21 5.5 21C5.11378 21 4.73086 20.9859 4.35172 20.9581C3.91662 20.9262 3.69906 20.9103 3.50103 20.7963C3.33701 20.7019 3.18146 20.5345 3.09925 20.364C3 20.1582 3 19.9181 3 19.438V16.6207C3 16.2169 3 16.015 3.06645 15.842C3.12515 15.6891 3.22049 15.553 3.3441 15.4456C3.48403 15.324 3.67376 15.255 4.05321 15.117L7.26005 13.9509C7.70153 13.7904 7.92227 13.7101 8.1317 13.7237C8.31637 13.7357 8.49408 13.7988 8.64506 13.9058C8.81628 14.0271 8.93713 14.2285 9.17882 14.6314L10 16C12.6499 14.7999 14.7981 12.6489 16 10L14.6314 9.17882C14.2285 8.93713 14.0271 8.81628 13.9058 8.64506C13.7988 8.49408 13.7357 8.31637 13.7237 8.1317C13.7101 7.92227 13.7904 7.70153 13.9509 7.26005L13.9509 7.26005L15.117 4.05321C15.255 3.67376 15.324 3.48403 15.4456 3.3441C15.553 3.22049 15.6891 3.12515 15.842 3.06645C16.015 3 16.2169 3 16.6207 3H19.438C19.9181 3 20.1582 3 20.364 3.09925C20.5345 3.18146 20.7019 3.33701 20.7963 3.50103C20.9103 3.69907 20.9262 3.91662 20.9581 4.35173C20.9859 4.73086 21 5.11378 21 5.5Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p class="bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 px-4">
                        تماس تلفنی
                    </p>
                </a>
            </div>
        </div>
        <div class="opacity-0 w-20 transition-all bg-white text-zinc-800 shadow-custom text-center text-xs rounded-lg py-2 absolute z-10 top-3 -left-24 group-hover:opacity-100 pointer-events-none border border-zinc-200">
            ارتباط با ما
        </div>
    </div>
    <div id="blurOverlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 z-40"></div>
    <!-- logo, des, go to up -->
    <div class="flex gap-x-8 gap-y-4 items-center md:items-start flex-wrap md:flex-nowrap justify-between">
        <div class="w-4/12 md:w-1/12 order-1 md:order-none">
            <img class="w-full" src="<?= $thumbnailLogo ? "../../" . $thumbnailLogo : '' ?>" alt="">
        </div>
        <div class="md:w-10/12 text-xs text-zinc-400 leading-7 order-3 md:order-none text-justify">
            <?= $getInformation['text'] ?>
        </div>
        <div class="md:w-1/12 order-2 md:order-none">
            <button type="button" class="flex items-center cursor-pointer w-28 gap-x-2 px-3 py-2 text-zinc-400 text-xs md:text-sm" id="btn-back-to-top">
                برو به بالا
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2028_6)">
                        <path d="M12.707 3.63599C12.5194 3.44852 12.2651 3.3432 12 3.3432C11.7348 3.3432 11.4805 3.44852 11.293 3.63599L5.63598 9.29299C5.54047 9.38523 5.46428 9.49558 5.41188 9.61758C5.35947 9.73959 5.33188 9.87081 5.33073 10.0036C5.32957 10.1364 5.35487 10.268 5.40516 10.3909C5.45544 10.5138 5.52969 10.6255 5.62358 10.7194C5.71747 10.8133 5.82913 10.8875 5.95202 10.9378C6.07492 10.9881 6.2066 11.0134 6.33938 11.0122C6.47216 11.0111 6.60338 10.9835 6.72538 10.9311C6.84739 10.8787 6.95773 10.8025 7.04998 10.707L11 6.75699V20C11 20.2652 11.1053 20.5196 11.2929 20.7071C11.4804 20.8946 11.7348 21 12 21C12.2652 21 12.5195 20.8946 12.7071 20.7071C12.8946 20.5196 13 20.2652 13 20V6.75699L16.95 10.707C17.1386 10.8891 17.3912 10.9899 17.6534 10.9877C17.9156 10.9854 18.1664 10.8802 18.3518 10.6948C18.5372 10.5094 18.6424 10.2586 18.6447 9.99639C18.6469 9.73419 18.5461 9.48159 18.364 9.29299L12.707 3.63599Z" fill="#9f9fa9"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2028_6">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
    <!-- services -->
    <div class="grid grid-cols-2 md:grid-cols-5 mt-16 mb-14 gap-y-8">
        <div class="flex justify-center items-center gap-2">
            <div>
                <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M38.94 39.435C39.365 39.415 39.764 39.395 40.136 39.375C42.413 39.254 44.236 37.539 44.449 35.27C44.694 32.671 44.954 28.86 44.994 24.152C45.001 23.332 44.834 22.518 44.452 21.793C43.462 19.915 41.143 16.1 37.655 13.799C36.917 13.313 36.043 13.1 35.159 13.07C32.623 12.985 29.829 12.922 26.986 12.875" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.015 25.75C3.005 26.29 3 26.837 3 27.386C3 30.882 3.21 33.641 3.439 35.603C3.685 37.72 5.419 39.242 7.547 39.359C8.007 39.384 8.511 39.41 9.06 39.436" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.336 17.929C36.517 19.166 38.107 21.549 39.038 23.277C39.608 24.337 38.96 25.579 37.76 25.682C36.12 25.824 34.617 25.72 33.558 25.589C32.638 25.475 32 24.674 32 23.747V19.37C32.0003 18.9405 32.1711 18.5287 32.4748 18.2251C32.7786 17.9215 33.1905 17.751 33.62 17.751C33.87 17.751 34.118 17.805 34.336 17.929Z" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M27 25.75H15H3V14.75C3 11.773 3.094 9.487 3.206 7.82C3.349 5.691 4.991 4.085 7.121 3.957C8.962 3.847 11.558 3.75 15 3.75C18.442 3.75 21.038 3.847 22.878 3.957C25.009 4.085 26.651 5.691 26.794 7.821C26.906 9.487 27 11.773 27 14.75V25.75Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.9771 39.73C22.6596 39.7569 25.3425 39.7569 28.0251 39.73" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M28 40.25C28 41.7087 28.5795 43.1076 29.6109 44.1391C30.6424 45.1705 32.0413 45.75 33.5 45.75C34.9587 45.75 36.3576 45.1705 37.3891 44.1391C38.4205 43.1076 39 41.7087 39 40.25C39 38.7913 38.4205 37.3924 37.3891 36.3609C36.3576 35.3295 34.9587 34.75 33.5 34.75C32.0413 34.75 30.6424 35.3295 29.6109 36.3609C28.5795 37.3924 28 38.7913 28 40.25Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 40.25C9 41.7087 9.57946 43.1076 10.6109 44.1391C11.6424 45.1705 13.0413 45.75 14.5 45.75C15.9587 45.75 17.3576 45.1705 18.3891 44.1391C19.4205 43.1076 20 41.7087 20 40.25C20 38.7913 19.4205 37.3924 18.3891 36.3609C17.3576 35.3295 15.9587 34.75 14.5 34.75C13.0413 34.75 11.6424 35.3295 10.6109 36.3609C9.57946 37.3924 9 38.7913 9 40.25Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-sm text-zinc-600">
                    ارسال سریع
                </div>
                <div class="text-xs text-zinc-400">
                    ارسال با جدیدترین تکنولوژی
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-2">
            <div>
                <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M44.279 18.75C44.465 18.436 44.596 18.078 44.659 17.678C44.846 16.49 45 14.752 45 12.252C45 9.752 44.846 8.014 44.66 6.826C44.413 5.263 43.124 4.329 41.547 4.209C38.852 4.006 33.575 3.752 24 3.752C14.425 3.752 9.148 4.006 6.453 4.209C4.876 4.329 3.587 5.263 3.341 6.826C3.154 8.014 3 9.752 3 12.252C3 14.752 3.154 16.49 3.34 17.678C3.404 18.078 3.535 18.436 3.721 18.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M36.316 10.713C37.819 10.838 38.961 12.093 38.976 13.602C39.037 19.418 38.999 27.71 38.636 38.214C38.542 40.898 36.646 43.118 33.971 43.359C31.647 43.568 28.355 43.75 23.943 43.75C19.555 43.75 16.295 43.57 13.998 43.362C11.338 43.122 9.45799 40.913 9.36599 38.244C8.99999 27.725 8.96299 19.423 9.02299 13.602C9.03899 12.094 10.181 10.838 11.684 10.712C14.77 10.456 18.842 10.252 24 10.252C29.158 10.252 33.23 10.456 36.316 10.712V10.713Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M25 43.746V10.254" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M32 43.51V10.432" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.221 37.75C16.078 37.75 15.123 36.963 15.056 35.822C15.017 35.132 14.9984 34.4411 15 33.75C15 32.915 15.023 32.23 15.056 31.678C15.123 30.537 16.078 29.75 17.22 29.75H17.778C18.921 29.75 19.876 30.537 19.944 31.678C19.976 32.23 19.999 32.915 19.999 33.75C19.999 34.585 19.976 35.27 19.944 35.822C19.877 36.963 18.922 37.75 17.779 37.75H17.221Z" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-sm text-zinc-600">
                    ارسال سریع
                </div>
                <div class="text-xs text-zinc-400">
                    ارسال با جدیدترین تکنولوژی
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-2">
            <div>
                <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.44404 8.207C5.21404 8.373 3.53104 9.969 3.32404 12.197C3.16972 13.9221 3.06168 15.6511 3.00004 17.382C2.96504 18.306 3.60004 19.099 4.40004 19.562C5.31149 20.0871 6.06861 20.8429 6.59524 21.7534C7.12187 22.664 7.39944 23.6971 7.40004 24.749C7.39927 25.8007 7.12161 26.8337 6.59499 27.744C6.06837 28.6544 5.31134 29.41 4.40004 29.935C3.60004 30.399 2.96504 31.192 3.00004 32.116C3.08504 34.316 3.20304 36.013 3.32304 37.303C3.53004 39.53 5.21304 41.126 7.44304 41.293C10.417 41.515 15.553 41.75 24 41.75C32.447 41.75 37.583 41.516 40.556 41.293C42.786 41.127 44.469 39.531 44.676 37.303C44.796 36.014 44.913 34.317 44.998 32.118C45.034 31.193 44.398 30.401 43.598 29.937C42.687 29.4116 41.9304 28.6557 41.4041 27.7452C40.8778 26.8347 40.6005 25.8017 40.6 24.75C40.6007 23.6981 40.8783 22.665 41.405 21.7545C41.9316 20.844 42.6887 20.0881 43.6 19.563C44.4 19.1 45.035 18.307 45 17.383C44.9388 15.6514 44.8311 13.9218 44.677 12.196C44.47 9.969 42.787 8.373 40.557 8.206C37.583 7.985 32.446 7.75 24 7.75C15.553 7.75 10.417 7.984 7.44404 8.207Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33.022 33.69C33.674 32.983 34 32 34 30.737C34 29.492 33.674 28.517 33.022 27.81C32.37 27.103 31.529 26.75 30.5 26.75C29.456 26.75 28.609 27.103 27.956 27.81C27.319 28.517 27 29.492 27 30.737C27 31.999 27.319 32.983 27.956 33.69C28.609 34.397 29.456 34.75 30.5 34.75C31.529 34.75 32.37 34.397 33.022 33.69Z" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.022 21.69C20.674 20.983 21 20 21 18.737C21 17.492 20.674 16.517 20.022 15.81C19.37 15.103 18.529 14.75 17.5 14.75C16.456 14.75 15.609 15.103 14.957 15.81C14.319 16.517 14 17.492 14 18.737C14 19.999 14.319 20.983 14.957 21.69C15.609 22.397 16.457 22.75 17.5 22.75C18.529 22.75 19.37 22.397 20.022 21.69Z" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M32 16.75L16 32.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-sm text-zinc-600">
                    ارسال سریع
                </div>
                <div class="text-xs text-zinc-400">
                    ارسال با جدیدترین تکنولوژی
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-2">
            <div>
                <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 21.563V31.75C6 35.788 6.16 38.79 6.343 40.894C6.553 43.316 8.425 45.114 10.848 45.306C13.63 45.526 17.942 45.75 24 45.75C30.058 45.75 34.369 45.527 37.152 45.306C39.575 45.114 41.448 43.316 41.657 40.894C41.84 38.79 42 35.788 42 31.75V21.562" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.29 20.02C3.582 21.038 4.59 21.524 5.647 21.553C8.28 21.627 14.167 21.75 24 21.75C33.833 21.75 39.72 21.627 42.353 21.553C43.411 21.523 44.418 21.038 44.71 20.02C44.873 19.45 45 18.7 45 17.75C45 16.8 44.873 16.05 44.71 15.48C44.418 14.462 43.41 13.976 42.353 13.947C39.72 13.873 33.833 13.75 24 13.75C14.167 13.75 8.28 13.873 5.647 13.947C4.589 13.977 3.582 14.462 3.29 15.48C3.127 16.05 3 16.8 3 17.75C3 18.7 3.127 19.45 3.29 20.02Z" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24 21.75V45.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24 13.75C24 10.75 20.5 3.75 15.25 3.75C12.187 3.75 10 6.436 10 9.75C10 11.287 10.505 12.688 11.337 13.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24 13.75C24 10.75 27.5 3.75 32.75 3.75C35.813 3.75 38 6.436 38 9.75C38 11.287 37.495 12.688 36.663 13.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-sm text-zinc-600">
                    ارسال سریع
                </div>
                <div class="text-xs text-zinc-400">
                    ارسال با جدیدترین تکنولوژی
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-2">
            <div>
                <svg width="40" height="40" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 3.75C15 3.75 10.885 3.75 6.734 4.022C5.8344 4.07821 4.98626 4.46087 4.34881 5.09813C3.71137 5.73539 3.32847 6.58342 3.272 7.483C3 11.635 3 15.75 3 15.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33 3.75C33 3.75 37.115 3.75 41.266 4.022C42.1656 4.07821 43.0137 4.46087 43.6512 5.09813C44.2886 5.73539 44.6715 6.58342 44.728 7.483C45 11.635 45 15.75 45 15.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33 45.75C33 45.75 37.115 45.75 41.266 45.478C42.1656 45.4218 43.0137 45.0391 43.6512 44.4019C44.2886 43.7646 44.6715 42.9166 44.728 42.017C45 37.865 45 33.75 45 33.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 45.75C15 45.75 10.885 45.75 6.734 45.478C5.8344 45.4218 4.98626 45.0391 4.34881 44.4019C3.71137 43.7646 3.32847 42.9166 3.272 42.017C3 37.865 3 33.75 3 33.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M36 13.75V35.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 13.75V35.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M30 13.75V29.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M30 35.75V34.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24 13.75V29.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24 35.75V34.75" stroke="#ed1945" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 13.75V29.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 35.75V34.75" stroke="#a1a1aa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="flex flex-col gap-y-2">
                <div class="text-sm text-zinc-600">
                    ارسال سریع
                </div>
                <div class="text-xs text-zinc-400">
                    ارسال با جدیدترین تکنولوژی
                </div>
            </div>
        </div>
    </div>
    <!-- links -->
    <div class="flex flex-col md:flex-row gap-y-8">
        <div class="md:w-4/12 flex justify-between">
            <div>
                <div class="text-zinc-500 mb-4 text-sm">
                    دسترسی سریع
                </div>
                <div class="">
                    <ul class="flex flex-col gap-y-3">
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-zinc-500 mb-4 text-sm">
                    دسترسی سریع
                </div>
                <div class="">
                    <ul class="flex flex-col gap-y-3">
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="text-zinc-500 mb-4 text-sm">
                    دسترسی سریع
                </div>
                <div class="">
                    <ul class="flex flex-col gap-y-3">
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:text-primary-500 transition-all text-xs hover:pr-1 ease-out duration-300">
                                تعرفه ها
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="md:w-4/12 flex justify-center gap-x-7">
            <img class="h-fit max-w-20 md:max-w-28" src="../../assets/user/image/service/symbol-02.png" alt="">
            <img class="h-fit max-w-20 md:max-w-28" src="../../assets/user/image/service/zarinPal.png" alt="">
        </div>
        <div class="md:w-4/12">
            <p class="text-xs text-zinc-400 pb-3 pr-2">
                ایمیل خود را وارد کنید تا از آخرین تخفیفات باخبر بشید.
            </p>
            <div class="relative">
                <input class="rounded-3xl rounded-tr-sm text-zinc-600 w-full bg-[#f0f0f0] px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300" type="text" placeholder="ایمیل خود را وارد کنید.">
                <a href="#" class="top-2 absolute left-3 -rotate-90 bg-primary-500 p-1 rounded-2xl">
                    <svg class="size-7" width="36" height="36" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2029_2)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.536 13.707C15.4431 13.8 15.3328 13.8738 15.2114 13.9241C15.09 13.9744 14.9599 14.0003 14.8285 14.0003C14.6971 14.0003 14.5669 13.9744 14.4455 13.9241C14.3241 13.8738 14.2138 13.8 14.121 13.707L12 11.586L9.87897 13.707C9.69146 13.8947 9.43709 14.0001 9.17182 14.0002C8.90655 14.0003 8.65211 13.895 8.46447 13.7075C8.27683 13.52 8.17136 13.2657 8.17126 13.0004C8.17117 12.7351 8.27646 12.4807 8.46397 12.293L11.293 9.46503C11.4805 9.27756 11.7348 9.17224 12 9.17224C12.2651 9.17224 12.5194 9.27756 12.707 9.46503L15.536 12.293C15.7234 12.4806 15.8288 12.7349 15.8288 13C15.8288 13.2652 15.7234 13.5195 15.536 13.707Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2029_2">
                                <rect width="24" height="24" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <p class="text-xs text-zinc-400 pt-6 pb-3 pr-2">
                شبکه های اجتماعی
            </p>
            <div class="grid grid-cols-6">
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Frame" clip-path="url(#clip0_4667_548)">
                            <g id="Isolation Mode">
                                <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M8.72696 8.16637e-05H21.2724C25.8728 8.16637e-05 29.6361 3.75792 29.6361 8.35796V12.3916C25.512 14.2453 21.3518 23.4008 15.2883 21.4114C14.7889 21.7663 13.6378 23.2288 13.557 24.3385C11.4574 24.0589 9.03679 21.6527 9.32727 19.058C5.83255 16.5301 8.71846 11.8638 11.4897 9.9856C17.4293 5.96007 25.6751 9.42212 21.0884 12.3004C18.2994 14.0505 12.3354 15.2066 12.9554 10.9101C11.3194 11.382 10.2721 14.4326 12.2419 16.0223C10.4172 17.815 10.768 21.1105 12.7185 22.1925C14.6912 17.0814 21.5571 17.7494 24.3311 11.6481C26.4182 7.05861 23.3239 1.82911 17.1373 2.63243C12.4682 3.23879 8.09169 7.17735 5.90294 11.8486C3.68218 16.588 4.01267 22.9345 8.57278 26.1331C13.9393 29.8971 19.6528 26.4118 23.1132 21.8565C25.1529 19.1715 26.935 16.1972 29.6361 14.4792V21.6307C29.6361 26.2306 25.8723 30.0001 21.2724 30.0001H8.72696C4.12692 30.0001 0.363281 26.2364 0.363281 21.6364V8.36368C0.363281 3.76364 4.12692 0 8.72696 0V8.16637e-05Z" fill="#EE7F22"></path>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_4667_548">
                                <rect width="30" height="30" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Frame">
                            <g id="Vector" filter="url(#filter0_f_4667_553)">
                                <path d="M12.4639 31.5463L12.9732 31.848C15.112 33.1174 17.5644 33.7889 20.0653 33.79H20.0706C27.7508 33.79 34.0013 27.5409 34.0044 19.8602C34.0058 16.1383 32.5578 12.6382 29.927 10.0054C28.6367 8.70693 27.1016 7.67732 25.4107 6.97613C23.7198 6.27495 21.9066 5.91612 20.076 5.92043C12.3899 5.92043 6.1392 12.1688 6.13647 19.8491C6.13268 22.4716 6.87121 25.0417 8.26666 27.2623L8.59819 27.789L7.19029 32.929L12.4639 31.5463ZM3.16504 36.9109L5.54359 28.2265C4.07668 25.6851 3.30494 22.8018 3.30585 19.8479C3.30973 10.6071 10.8298 3.08936 20.0708 3.08936C24.5552 3.09163 28.7643 4.83676 31.9298 8.0046C35.0954 11.1724 36.8371 15.3832 36.8355 19.8614C36.8314 29.1015 29.3102 36.6206 20.0706 36.6206H20.0633C17.2577 36.6195 14.5009 35.9156 12.0522 34.5804L3.16504 36.9109Z" fill="#B3B3B3"></path>
                            </g>
                            <path id="Vector_2" d="M2.99219 36.7385L5.37074 28.0542C3.9013 25.5065 3.12945 22.6166 3.133 19.6756C3.13687 10.4348 10.6569 2.91699 19.8979 2.91699C24.3823 2.91927 28.5914 4.66439 31.757 7.83223C34.9226 11.0001 36.6643 15.2108 36.6627 19.689C36.6586 28.9291 29.1374 36.4483 19.8977 36.4483H19.8904C17.0849 36.4471 14.3281 35.7433 11.8794 34.4081L2.99219 36.7385Z" fill="white"></path>
                            <path id="Vector_3" d="M19.9035 5.74809C12.2173 5.74809 5.96662 11.9965 5.96388 19.6767C5.9601 22.2993 6.69862 24.8694 8.09408 27.0899L8.4256 27.6169L7.0177 32.7568L12.2916 31.374L12.8008 31.6757C14.9397 32.945 17.3921 33.6163 19.893 33.6177H19.8982C27.5784 33.6177 33.8291 27.3686 33.8321 19.6879C33.8379 17.8572 33.4805 16.0436 32.7806 14.352C32.0807 12.6604 31.0522 11.1244 29.7547 9.83303C28.4643 8.53456 26.9292 7.50493 25.2383 6.80375C23.5473 6.10256 21.734 5.74375 19.9035 5.74809Z" fill="url(#paint0_linear_4667_553)"></path>
                            <path id="Vector_4" fill-rule="evenodd" clip-rule="evenodd" d="M15.7086 12.6695C15.3946 11.972 15.0643 11.9579 14.766 11.9458L13.963 11.936C13.6837 11.936 13.2298 12.0408 12.8461 12.4601C12.4624 12.8793 11.3799 13.8926 11.3799 15.9535C11.3799 18.0145 12.881 20.0059 13.0901 20.2857C13.2993 20.5655 15.988 24.9296 20.2459 26.6086C23.7842 28.004 24.5042 27.7265 25.2725 27.6567C26.0408 27.587 27.7509 26.6435 28.0997 25.6653C28.4486 24.6871 28.4488 23.8491 28.3442 23.6739C28.2396 23.4986 27.9603 23.3945 27.541 23.1849C27.1218 22.9753 25.0627 21.962 24.6787 21.8221C24.2948 21.6822 24.0157 21.6127 23.7361 22.032C23.4565 22.4512 22.6547 23.3943 22.4102 23.6739C22.1657 23.9534 21.9217 23.9885 21.5025 23.7791C21.0832 23.5697 19.7343 23.1272 18.1339 21.7002C16.8887 20.5899 16.0481 19.2187 15.8034 18.7996C15.5587 18.3806 15.7774 18.1537 15.9875 17.945C16.1755 17.7572 16.4063 17.4558 16.6162 17.2113C16.826 16.9668 16.8951 16.792 17.0345 16.5129C17.174 16.2338 17.1045 15.9886 16.9996 15.7792C16.8948 15.5698 16.0809 13.498 15.7086 12.6695Z" fill="white"></path>
                        </g>
                        <defs>
                            <filter id="filter0_f_4667_553" x="1.55594" y="1.48026" width="36.8891" height="37.04" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                <feGaussianBlur stdDeviation="0.804548" result="effect1_foregroundBlur_4667_553"></feGaussianBlur>
                            </filter>
                            <linearGradient id="paint0_linear_4667_553" x1="19.6143" y1="7.42052" x2="19.7556" y2="31.2368" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#57D163"></stop>
                                <stop offset="1" stop-color="#23B33A"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Livello_1" clip-path="url(#clip0_4667_561)">
                            <path id="Vector" d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="url(#paint0_linear_4667_561)"></path>
                            <path id="Vector_2" d="M10.8301 17.1695L12.7283 22.4236C12.7283 22.4236 12.9657 22.9152 13.2198 22.9152C13.4739 22.9152 17.2538 18.9829 17.2538 18.9829L21.4571 10.8643L10.8978 15.8132L10.8301 17.1695Z" fill="#C8DAEA"></path>
                            <path id="Vector_3" d="M13.3473 18.5171L12.9829 22.3899C12.9829 22.3899 12.8304 23.5766 14.0168 22.3899C15.2032 21.2032 16.3388 20.2882 16.3388 20.2882" fill="#A9C6D8"></path>
                            <path id="Vector_4" d="M10.8653 17.3569L6.96047 16.0846C6.96047 16.0846 6.4938 15.8953 6.64407 15.466C6.675 15.3774 6.7374 15.3021 6.92407 15.1726C7.78927 14.5696 22.9382 9.12463 22.9382 9.12463C22.9382 9.12463 23.3659 8.98049 23.6182 9.07636C23.6806 9.09568 23.7368 9.13123 23.7809 9.17937C23.8251 9.22751 23.8557 9.28652 23.8695 9.35036C23.8968 9.46311 23.9082 9.57912 23.9034 9.69503C23.9022 9.79529 23.8901 9.88823 23.8809 10.034C23.7886 11.5226 21.0275 22.633 21.0275 22.633C21.0275 22.633 20.8623 23.2832 20.2705 23.3054C20.125 23.3101 19.9801 23.2855 19.8444 23.233C19.7087 23.1805 19.5849 23.1012 19.4805 22.9998C18.319 22.0008 14.3046 19.3029 13.4175 18.7096C13.3975 18.6959 13.3807 18.6782 13.3681 18.6575C13.3556 18.6368 13.3476 18.6136 13.3447 18.5896C13.3323 18.527 13.4003 18.4496 13.4003 18.4496C13.4003 18.4496 20.3905 12.2362 20.5765 11.584C20.5909 11.5334 20.5365 11.5085 20.4634 11.5306C19.9991 11.7014 11.9509 16.784 11.0626 17.3449C10.9987 17.3642 10.9311 17.3683 10.8653 17.3569Z" fill="white"></path>
                        </g>
                        <defs>
                            <linearGradient id="paint0_linear_4667_561" x1="16" y1="32" x2="16" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1D93D2"></stop>
                                <stop offset="1" stop-color="#38B0E3"></stop>
                            </linearGradient>
                            <clipPath id="clip0_4667_561">
                                <rect width="32" height="32" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint0_linear_1_921)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M124.541 256.001C124.541 183.397 183.397 124.541 256.001 124.541C328.603 124.541 387.459 183.397 387.459 256.001C387.459 328.603 328.603 387.459 256.001 387.459C183.397 387.459 124.541 328.603 124.541 256.001ZM256 341.333C208.871 341.333 170.667 303.129 170.667 256.001C170.667 208.871 208.871 170.667 256 170.667C303.128 170.667 341.333 208.871 341.333 256.001C341.333 303.129 303.128 341.333 256 341.333Z" fill="url(#paint1_radial_1_921)"/>
                        <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint2_linear_1_921)"/>
                        <path d="M392.653 150.066C409.62 150.066 423.374 136.313 423.374 119.347C423.374 102.38 409.62 88.6263 392.653 88.6263C375.688 88.6263 361.934 102.38 361.934 119.347C361.934 136.313 375.688 150.066 392.653 150.066Z" fill="url(#paint3_radial_1_921)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint4_linear_1_921)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M256.001 0C186.475 0 177.757 0.294696 150.452 1.54055C123.203 2.78335 104.594 7.11132 88.3103 13.4402C71.476 19.9814 57.1995 28.7349 42.9667 42.9667C28.7349 57.1995 19.9814 71.476 13.4402 88.3103C7.11132 104.594 2.78335 123.203 1.54055 150.452C0.294696 177.757 0 186.475 0 256.001C0 325.525 0.294696 334.243 1.54055 361.548C2.78335 388.797 7.11132 407.406 13.4402 423.69C19.9814 440.524 28.7349 454.8 42.9667 469.033C57.1995 483.265 71.476 492.019 88.3103 498.561C104.594 504.889 123.203 509.217 150.452 510.459C177.757 511.705 186.475 512 256.001 512C325.525 512 334.243 511.705 361.548 510.459C388.797 509.217 407.406 504.889 423.69 498.561C440.524 492.019 454.8 483.265 469.033 469.033C483.265 454.8 492.019 440.524 498.561 423.69C504.889 407.406 509.217 388.797 510.459 361.548C511.705 334.243 512 325.525 512 256.001C512 186.475 511.705 177.757 510.459 150.452C509.217 123.203 504.889 104.594 498.561 88.3103C492.019 71.476 483.265 57.1995 469.033 42.9667C454.8 28.7349 440.524 19.9814 423.69 13.4402C407.406 7.11132 388.797 2.78335 361.548 1.54055C334.243 0.294696 325.525 0 256.001 0ZM256.001 46.126C324.355 46.126 332.452 46.3872 359.446 47.6188C384.406 48.757 397.961 52.9274 406.982 56.4333C418.931 61.0773 427.459 66.6247 436.417 75.5835C445.375 84.5412 450.923 93.0691 455.567 105.019C459.073 114.039 463.243 127.594 464.381 152.554C465.613 179.548 465.874 187.645 465.874 256.001C465.874 324.355 465.613 332.452 464.381 359.446C463.243 384.406 459.073 397.961 455.567 406.981C450.923 418.931 445.375 427.459 436.417 436.417C427.459 445.375 418.931 450.923 406.982 455.567C397.961 459.073 384.406 463.243 359.446 464.381C332.456 465.613 324.36 465.874 256.001 465.874C187.64 465.874 179.545 465.613 152.554 464.381C127.594 463.243 114.039 459.073 105.019 455.567C93.0692 450.923 84.5413 445.375 75.5835 436.417C66.6258 427.459 61.0774 418.931 56.4333 406.981C52.9275 397.961 48.757 384.406 47.6189 359.446C46.3873 332.452 46.1261 324.355 46.1261 256.001C46.1261 187.645 46.3873 179.548 47.6189 152.554C48.757 127.594 52.9275 114.039 56.4333 105.019C61.0774 93.0691 66.6248 84.5412 75.5835 75.5835C84.5413 66.6247 93.0692 61.0773 105.019 56.4333C114.039 52.9274 127.594 48.757 152.554 47.6188C179.548 46.3872 187.645 46.126 256.001 46.126Z" fill="url(#paint5_radial_1_921)"/>
                        <defs>
                            <linearGradient id="paint0_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4E60D3"/>
                                <stop offset="0.142763" stop-color="#913BAF"/>
                                <stop offset="0.761458" stop-color="#D52D88"/>
                                <stop offset="1" stop-color="#F26D4F"/>
                            </linearGradient>
                            <radialGradient id="paint1_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                                <stop stop-color="#FED276"/>
                                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"/>
                                <stop offset="0.454081" stop-color="#F6804D"/>
                                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"/>
                            </radialGradient>
                            <linearGradient id="paint2_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4E60D3"/>
                                <stop offset="0.142763" stop-color="#913BAF"/>
                                <stop offset="0.761458" stop-color="#D52D88"/>
                                <stop offset="1" stop-color="#F26D4F"/>
                            </linearGradient>
                            <radialGradient id="paint3_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                                <stop stop-color="#FED276"/>
                                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"/>
                                <stop offset="0.454081" stop-color="#F6804D"/>
                                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"/>
                            </radialGradient>
                            <linearGradient id="paint4_linear_1_921" x1="29.8736" y1="26.9173" x2="191.303" y2="651.345" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4E60D3"/>
                                <stop offset="0.142763" stop-color="#913BAF"/>
                                <stop offset="0.761458" stop-color="#D52D88"/>
                                <stop offset="1" stop-color="#F26D4F"/>
                            </linearGradient>
                            <radialGradient id="paint5_radial_1_921" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(155.005 512) rotate(32.1601) scale(478.18 344.131)">
                                <stop stop-color="#FED276"/>
                                <stop offset="0.17024" stop-color="#FDBD61" stop-opacity="0.975006"/>
                                <stop offset="0.454081" stop-color="#F6804D"/>
                                <stop offset="1" stop-color="#E83D5C" stop-opacity="0.01"/>
                            </radialGradient>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="mt-10 pt-5 text-xs text-zinc-400 border-t border-zinc-200">
        تمامی حقوق توسط تیم برنامه نویسی امیران محفوظ است.
    </div>
</footer>
<script src="../../assets/user/js/swiper.min.js"></script>
<script src="../../assets/user/js/sliders.js"></script>
<script src="../../assets/user/js/main.js"></script>
<script src='../../assets/user/js/jquery-3.2.1.min.js'></script>
<script src='./../../assets/user/js/sweetalert.js'></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            document.getElementById('btnSearchProduct').click();
        }
    });
</script>
<?= $_SESSION['page']['script'] ?>
</body>



</html>