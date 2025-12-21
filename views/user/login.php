<?php
$getInformation = getInformation();
if ($getInformation['image']) {
    $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getInformation['image']);
}

?>
<body class="max-w-[1700px] mx-auto">

  <div class="fixed inset-0 bg-zinc-100 bg-opacity-50 flex items-center justify-center transition-opacity duration-300 z-50">
    <div class="modal-box bg-white p-6 rounded-3xl shadow-lg w-full md:w-6/12 lg:w-5/12 xl:w-3/12 scale-90 transition-transform duration-300">
      <!-- logo -->
      <img src="<?= $thumbnail ? "../../" . $thumbnail : '' ?>" class="max-w-32 h-fit mx-auto" alt="">
      <!-- login -->
        <div id="formNowLogin" >
            <form name="registerForm" method="post">
      <div class="pt-5">
        <p class="text-lg text-zinc-800">
          ورود / عضویت
        </p>
        <p class="text-sm text-zinc-500 mt-8">
          شماره موبایل خود را وارد کنید:
        </p>
        <div class="relative mt-2">
          <input id="mobile" name="mobile" class="rounded-xl text-zinc-600 bg-[#f0f0f0] pl-10 pr-4 py-3 w-full placeholder:text-zinc-400 placeholder:text-sm focus:outline-0" type="tel" placeholder="09.........">
            <span id="showError" class="text-danger"></span>

            <a>
            <img class="top-3 absolute left-3 size-5" src="../../assets/user/image/icons/phone.svg" alt="">
          </a>

        </div>
          <?php
          $count = checkLoginAttempts($_SERVER['REMOTE_ADDR'], time());
          $count2 = checkLoginAttempts($_SERVER['REMOTE_ADDR'], time(), 'req');
          if ($count < 5 && $count2 < 15) {

          ?>
        <a type="button" onclick="checkMobile()" id="btnCheckMobile" class="text-center w-1/2 mx-auto mt-7 bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 hover:shadow-lg transition rounded-2xl px-2.5 py-3 flex justify-center items-center gap-x-2 text-sm text-white">
          ارسال کد تایید
        </a>
              <?php
          }
          ?>
      </div>
    </form>
</div>
      <!-- verify -->
        <div style="display: none" id="formNewLogin">
            <form name="registerForm" method="post">
                <div id="showCode"></div>
       <div class="pt-5">
        <p class="text-lg text-zinc-800">
          تایید شماره موبایل
        </p>
        <p class="text-sm text-zinc-500 mt-8">
          کد 6 رقمی ارسال شده را وارد کنید:
        </p>
        <div class="input-field mb-5 flex flex-row-reverse gap-x-4 justify-center mt-2">
          <input name="code[]" class="code-input 213 border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
          <input name="code[]" class="code-input border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
          <input name="code[]" class="code-input border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
          <input name="code[]" class="code-input border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
          <input name="code[]" class="code-input border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
          <input name="code[]" class="code-input border-2 border-zinc-400 focus:border-primary-400 transition w-10 h-12 rounded-md outline-none text-center focus:outline-0 focus:shadow-lg text-zinc-700" required/>
        </div>
           <span id="showError2" class="text-danger"></span>
           <span id="spanTimer">کد ارسالی تا <span
                       id="nowTime"></span> ثانیه دیگر منقضی
                        میشود</span>
        <a onclick="checkCode()" id="btnSubmitCode" class="text-center w-1/2 mx-auto mt-7 bg-gradient-to-bl from-primary-500 to-primary-400 hover:opacity-90 hover:shadow-lg transition rounded-2xl px-2.5 py-3 flex justify-center items-center gap-x-2 text-sm text-white">
          ورود
        </a>
      </div>
            </form>
        </div>
    </div>
  </div>

</body>
<script src="./../../assets/user/js/main.js"></script>

<script src="./../../assets/user/js/swiper.min.js"></script>
<script src="./../../assets/user/js/sliders.js"></script>
<script src='./../../assets/user/js/jquery-3.2.1.min.js'></script>
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
<?php
if (pageName() == "/login" && GET("action") == "cart") {
    $_SESSION['loginForPayment'] = true;
    ?>
    <script>
        Toast.fire({
            icon: "warning",
            title: "برای خرید ابتدا وارد سایت شوید",
        })
    </script>
    <?php
}
?>
