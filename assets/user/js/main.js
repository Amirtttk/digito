//////////////////////////////////// product image in single product
const mainImage = document.getElementById('mainImage');
const zoomBox = document.getElementById('zoomBox');
const zoomLens = document.getElementById('zoomLens');
function isMobile() {
    return window.innerWidth <= 768;
}
if (mainImage) {
  mainImage.addEventListener('mousemove', function(event) {
      if (isMobile()) return;
      const { left, top, width, height } = mainImage.getBoundingClientRect();
      const x = event.clientX - left;
      const y = event.clientY - top;
      const lensSize = 80;
      const lensX = Math.max(0, Math.min(x - lensSize / 2, width - lensSize));
      const lensY = Math.max(0, Math.min(y - lensSize / 2, height - lensSize));
      zoomLens.style.left = `${lensX}px`;
      zoomLens.style.top = `${lensY}px`;
      const zoomLevel = 2;
      zoomBox.style.backgroundImage = `url(${mainImage.src})`;
      zoomBox.style.backgroundSize = `${width * zoomLevel}px ${height * zoomLevel}px`;
      zoomBox.style.backgroundPosition = `-${lensX * zoomLevel}px -${lensY * zoomLevel}px`;
      zoomLens.classList.remove('hidden');
      zoomBox.classList.remove('hidden');
  });
}
if (mainImage) {
  mainImage.addEventListener('mouseleave', function() {
      zoomLens.classList.add('hidden');
      zoomBox.classList.add('hidden');
  });
}
function changeImage(element) {
    mainImage.src = element.src;
}
//////////////////////////////// Quantity input
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".quantity-container").forEach(container => {
    const input = container.querySelector("input[type='number']");
    const incrementButton = container.querySelector("button[data-action='increment']");
    const decrementButton = container.querySelector("button[data-action='decrement']");

    incrementButton.addEventListener("click", function () {
      let value = parseInt(input.value, 10);
      input.value = value + 1;
    });

    decrementButton.addEventListener("click", function () {
      let value = parseInt(input.value, 10);
      if (value > 1) {
        input.value = value - 1;
      }
    });
  });
});
////////////////////////////////////////// modal login register
document.querySelectorAll(".open-modal").forEach((button) => {
  button.addEventListener("click", () => {
    const modalId = button.getAttribute("data-modal");
    const modal = document.getElementById(modalId);
    const modalBox = modal.querySelector(".modal-box");

    modal.classList.remove("hidden");
    setTimeout(() => {
      modal.classList.add("opacity-100");
      modalBox.classList.remove("opacity-0", "scale-90");
    }, 10);
  });
});
document.querySelectorAll(".close-modal").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".modal");
    const modalBox = modal.querySelector(".modal-box");
    modal.classList.remove("opacity-100");
    modalBox.classList.add("opacity-0", "scale-90");
    setTimeout(() => modal.classList.add("hidden"), 300);
  });
});
document.querySelectorAll(".modal").forEach((modal) => {
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      const modalBox = modal.querySelector(".modal-box");
      modal.classList.remove("opacity-100");
      modalBox.classList.add("opacity-0", "scale-90");
      setTimeout(() => modal.classList.add("hidden"), 300);
    }
  });
});
///////////////////////////////////////// verify 6 code
const inputElements = [...document.querySelectorAll('input.code-input')]
if (inputElements) {
  // window.addEventListener("load", () => inputElements[0].focus());
  inputElements.forEach((ele,index)=>{
    ele.addEventListener('keydown',(e)=>{
      if(e.keyCode === 8 && e.target.value==='') inputElements[Math.max(0,index-1)].focus()
    })
    ele.addEventListener('input',(e)=>{
      const [first,...rest] = e.target.value
      e.target.value = first ?? ''
      const lastInputBox = index===inputElements.length-1
      const didInsertContent = first!==undefined
      if(didInsertContent && !lastInputBox) {
        inputElements[index+1].focus()
        inputElements[index+1].value = rest.join('')
        inputElements[index+1].dispatchEvent(new Event('input'))
      }
    })
  })
}
function onSubmit(e){
  e.preventDefault()
  const code = inputElements.map(({value})=>value).join('')
  console.log(code)
}
///////////////////////////////////////// category header desktop
const categories = document.querySelectorAll(".category-item");
  const subcategories = document.querySelectorAll(".subcategory-item");

  categories.forEach(cat => {
    cat.addEventListener("mouseenter", () => {
      const category = cat.getAttribute("data-category");
      subcategories.forEach(sub => {
        sub.classList.add("hidden");
        if (sub.getAttribute("data-parent") === category) {
          sub.classList.remove("hidden");
        }
      });
    });
  });
//////////////////////////////////////////// open and close mobile navbar
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.getElementById("mobile-menu");
  const overlay = document.getElementById("overlay");
  const openBtn = document.querySelector(".menu-mobile");
  function openMenu() {
    menu.classList.remove("translate-x-full");
    overlay.classList.remove("hidden");
    overlay.classList.add("opacity-100");
  }
  function closeMenu() {
    menu.classList.add("translate-x-full");
    overlay.classList.add("hidden");
    overlay.classList.remove("opacity-100");
  }
  if (openBtn){
    openBtn.addEventListener("click", openMenu);
    overlay.addEventListener("click", closeMenu);
  }
});
//////////////////////////////////////////// open and close menu/submenu mobile
document.addEventListener("DOMContentLoaded", function () {
  const menuToggles = document.querySelectorAll(".menu-toggle");
  menuToggles.forEach((toggle) => {
    toggle.addEventListener("click", function () {
      const submenu = this.nextElementSibling;
      const icon = this.querySelector("img");
      if (submenu.classList.contains("hidden")) {
        submenu.classList.remove("hidden");
        icon.classList.add("rotate-180");
      } else {
        submenu.classList.add("hidden");
        icon.classList.remove("rotate-180");
      }
    });
  });
});
/////////////////////////////////////////// progressBar
window.addEventListener("scroll", function () {
  let scrollTop = document.documentElement.scrollTop;
  let scrollHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollPercentage = (scrollTop / scrollHeight) * 100;
  document.getElementById("progressBar").style.width = scrollPercentage + "%";
});
//////////////////////////////// loading
window.addEventListener("load", function () {
  if (document.getElementById("loading")){
    const loadingScreen = document.getElementById("loading");
    setTimeout(() => {
      loadingScreen.classList.add("opacity-0");
    }, 500);
    setTimeout(() => {
      loadingScreen.classList.add("hidden");
    }, 1000);
  }

});
//////////////////////////////// btn go to top
if (document.getElementById("btn-back-to-top")){
  document.getElementById("btn-back-to-top").addEventListener("click", function() {
    window.scrollTo({
      top: 0,
    });
  });
}
/////////////////////////////// fixed btn social media
if (document.getElementById("CTA")){
  const blurOverlay = document.getElementById("blurOverlay");
  const btn = document.getElementById("CTA");
  const popup = document.getElementById("popup");
  const iconOpen = document.getElementById("icon-open");
  const iconClose = document.getElementById("icon-close");
  let isOpen = false;
  function showElement(el) {
    el.classList.remove("pointer-events-none");
    requestAnimationFrame(() => {
      el.classList.remove("opacity-0", "translate-y-5");
      el.classList.add("opacity-100", "translate-y-0");
    });
  }

  function hideElement(el) {
    el.classList.remove("opacity-100", "translate-y-0");
    el.classList.add("opacity-0", "translate-y-5");
    setTimeout(() => {
      el.classList.add("pointer-events-none");
    }, 300);
  }
  function showOverlay() {
    blurOverlay.classList.remove("pointer-events-none");
    requestAnimationFrame(() => {
      blurOverlay.classList.remove("opacity-0");
      blurOverlay.classList.add("opacity-100");
    });
  }

  function hideOverlay() {
    blurOverlay.classList.remove("opacity-100");
    blurOverlay.classList.add("opacity-0");
    setTimeout(() => {
      blurOverlay.classList.add("pointer-events-none");
    }, 300);
  }
  btn.addEventListener("click", () => {
    isOpen = !isOpen;
    if (isOpen) {
      showElement(popup);
      showOverlay();
      iconOpen.classList.remove("opacity-100");
      iconOpen.classList.add("opacity-0");
      setTimeout(() => {
        iconOpen.classList.add("hidden");
        iconClose.classList.remove("hidden");
        requestAnimationFrame(() => {
          iconClose.classList.remove("opacity-0");
          iconClose.classList.add("opacity-100");
        });
      }, 180);
    } else {
      hideElement(popup);
      hideOverlay();
      iconClose.classList.remove("opacity-100");
      iconClose.classList.add("opacity-0");
      setTimeout(() => {
        iconClose.classList.add("hidden");
        iconOpen.classList.remove("hidden");
        requestAnimationFrame(() => {
          iconOpen.classList.remove("opacity-0");
          iconOpen.classList.add("opacity-100");
        });
      }, 180);
    }
  });
  document.addEventListener("DOMContentLoaded", () => {
    iconOpen.classList.remove("hidden");
    iconOpen.classList.add("opacity-100");
  });
  blurOverlay.addEventListener("click", () => {
    if(isOpen){
      isOpen = false;
      hideElement(popup);
      hideOverlay();
      iconClose.classList.remove("opacity-100");
      iconClose.classList.add("opacity-0");
      setTimeout(() => {
        iconClose.classList.add("hidden");
        iconOpen.classList.remove("hidden");
        requestAnimationFrame(() => {
          iconOpen.classList.remove("opacity-0");
          iconOpen.classList.add("opacity-100");
        });
      }, 180);
    }
  });
}
/////////////////////////////// faq
function toggleFAQ(id) {
  const content = document.getElementById(`faq${id}`);
  const icon = content.previousElementSibling.querySelector('.icon');
  if (content.classList.contains('open')) {
      content.classList.remove('open');
      icon.textContent = '+';
  } else {
      content.classList.add('open');
      icon.textContent = '-';
  }
}
/////////////////////////////// rules
function toggleRules(id) {
  const content = document.getElementById(`rules${id}`);
  const icon = content.previousElementSibling.querySelector('.icon');
  if (content.classList.contains('open')) {
      content.classList.remove('open');
      icon.textContent = '+';
  } else {
      content.classList.add('open');
      icon.textContent = '-';
  }
}
/////////////////////////////// price filter
let priceFilter = document.querySelectorAll("#shop-price-slider"),
  priceMinFilter = document.querySelectorAll("#shop-price-slider-min"),
  priceMaxFilter = document.querySelectorAll("#shop-price-slider-max");
  priceFilter.forEach((e) => {
    noUiSlider.create(e, {
      cssPrefix: "range-slider-",
      start: [0, 1e8],
      direction: "rtl",
      margin: 1,
      connect: !0,
      range: { min: 0, max: 1e8 },
      format: {
        to: function (e) {
          return e.toLocaleString("en-US", {
            style: "decimal",
            maximumFractionDigits: 0,
          });
        },
        from: function (e) {
          return parseFloat(e.replace(/,/g, ""));
        },
      },
    }),
      e.noUiSlider.on("update", function (e, t) {
        t
          ? priceMaxFilter.forEach((a) => {
              a.innerHTML = e[t];
            })
          : priceMinFilter.forEach((a) => {
              a.innerHTML = e[t];
            });
      });
  })
/////////////////////////////// copy link page to clipboard
document.querySelectorAll('a[data-copy]').forEach(link => {
  link.addEventListener('click', async (e) => {
    e.preventDefault(); // از رفتن به href جلوگیری می‌کنه

    const text = link.getAttribute('data-copy');

    try {
      await navigator.clipboard.writeText(text);

      console.log("Copied:", text);
    } catch (err) {
      console.error("Copy failed:", err);
    }
  });
});
//////////////////////////////////// open filter in search products
if (document.getElementById("mobile-filter")) {
  const filters = document.getElementById("mobile-filter");
  const openFilter = document.querySelector(".filter-mobile");
  const closeFilter = document.getElementById("closeFilter");
  function openMenu() {
    filters.classList.remove("translate-y-full");
  }
  function closeMenu() {
    filters.classList.add("translate-y-full");
  }
  openFilter.addEventListener("click", openMenu);
  closeFilter.addEventListener("click", closeMenu);
}
let domain = window.location.origin + "/";
function createContactus() {
  let nameAndFamily = $('input[name="nameAndFamily"]').val(),
      mobile = $('input[name="mobile"]').val(),
      text = $('textarea[name="text"]').val(),
      getErrors = document.getElementById("getErrors");
  $.ajax({
    url: `${domain}requests/contactUs/create.php`,
    type: "POST",
    data: {
      nameAndFamily,
      mobile,
      text
    },
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        getErrors.innerHTML = "";
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        setTimeout(() => location.replace("contactUs"), 3000);
      } else {
        getErrors.innerHTML = response.error;
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        scroll(5000, 200);
      }
    },
  });
}
function checkMobile() {
  let mobile = document.getElementById("mobile").value;
  $.ajax({
    url: `${domain}requests/login/checkMobile.php`,
    type: "POST",
    dataType: "json",
    data: {
      mobile,
    },
    success: function (response) {
      if (response.status == 200) {
        document
            .getElementById("showError")
            .classList.replace("text-danger", "text-success");
        document.getElementById("showError").innerHTML = "کمی صبر کنید ...";

        setTimeout(() => {
          document.getElementById("formNowLogin").style.display = "none";
          document.getElementById("formNewLogin").style.display = "block";

          document.getElementById("showCode").innerHTML = response.code;
          timers(
              120,
              document.getElementById("nowTime"),
              document.getElementById("spanTimer")
          );
        }, 1000);
      } else if (response.status == 400) {
        document
            .getElementById("showError")
            .classList.replace("text-success", "text-danger");
        document.getElementById("showError").innerHTML = response.text;
      } else if (response.status == 500) {
        document
            .getElementById("showError")
            .classList.replace("text-success", "text-danger");
        document.getElementById("showError").innerHTML = response.text;
        document
            .getElementById("btnCheckMobile")
            .setAttribute("disabled", true);
        document.getElementById("btnCheckMobile").removeAttribute("onclick");
        document.getElementById("btnCheckMobile").removeAttribute("id");
      } else {
        document
            .getElementById("showError")
            .classList.replace("text-success", "text-danger");
        document.getElementById("showError").innerHTML = response.text;
      }
    },
  });
}
function checkCode() {
  let codeInputs = document.getElementsByName("code[]");
  let codeUser = Array.from(codeInputs).map(input => input.value).join('');
  if (codeUser.length !== 6) {
    document.getElementById("showError2").classList.replace("text-success", "text-danger");
    document.getElementById("showError2").innerHTML = "لطفا تمام 6 رقم کد را وارد کنید.";
    return;
  }
  $.ajax({
    url: `${domain}requests/login/checkCode.php`,
    type: "POST",
    dataType: "json",
    data: {
      codeUser,
    },
    success: function (response) {
      if (response.status == 200) {
        document
            .getElementById("showError2")
            .classList.replace("text-danger", "text-success");
        document.getElementById("showError2").innerHTML = "کمی صبر کنید ...";
        setTimeout(() => {
          location.replace(response.url);
        }, 1500);
      } else {
        document
            .getElementById("showError2")
            .classList.replace("text-success", "text-danger");
        document.getElementById("showError2").innerHTML = response.text;
      }
    },
  });
}
function autoClickForLogin() {
  if (document.getElementById("codeUser").value.length == 6)
    document.getElementById("btnSubmitCode").click();
}
function timers(counter, element, element2) {
  let timer = setInterval(function () {
    counter--;
    element.innerHTML = counter;
    if (counter == 0) {
      clearInterval(timer);
      element2.innerHTML =
          '<a id="btnResend" style="cursor : pointer" onclick="resend()">درخواست مجدد کد</a>';
      $.ajax({
        url: "requests/login/unsetCode.php",
        type: "POST",
        dataType: "json",
        data: {},
        success: function (response) {
          if (response.status == 200) {
            document.getElementById("btnResend").remove();
            document.getElementById(
                "spanTimer"
            ).innerHTML = `کد ارسالی تا <span id="nowTime"></span> ثانیه دیگر منقضی میشود`;
            timers(
                120,
                document.getElementById("nowTime"),
                document.getElementById("spanTimer")
            );
          }
        },
      });
    }
  }, 1000);
}
function logout() {
  $.ajax({
    url: `${domain}requests/user/logout.php`,
    type: "POST",
    data: {},
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        location.replace("/");
      }
    },
  });
}
function loadCitiesByProvince() {
  let provinceId = $('#province-select').val();
  let citySelect = document.getElementById('city-select');
  let getErrors = document.getElementById('getErrors1');  // فرض کردم بخوای خطاها رو نشون بدی

  if (!provinceId) {
    citySelect.innerHTML = '<option value="">ابتدا استان را انتخاب کنید</option>';
    citySelect.disabled = true;
    return;
  }

  $.ajax({
    url: `${domain}requests/address/get_cities.php`,
    type: "GET",
    data: { province_id: provinceId },
    success: function(response) {
      // فرض می‌کنیم سرور JSON برمی‌گردونه
      let data;
      try {
        data = JSON.parse(response);
      } catch (e) {
        getErrors.innerHTML = "خطا در بارگذاری داده‌ها";
        citySelect.innerHTML = '<option value="">خطا در بارگذاری شهرها</option>';
        citySelect.disabled = true;
        return;
      }

      if (data.length > 0) {
        getErrors.innerHTML = "";
        citySelect.innerHTML = "";
        data.forEach(city => {
          let option = document.createElement('option');
          option.value = city.id;
          option.textContent = city.name;
          citySelect.appendChild(option);
        });
        citySelect.disabled = false;
      } else {
        citySelect.innerHTML = '<option value="">شهر یافت نشد</option>';
        citySelect.disabled = true;
      }
    },
    error: function() {
      getErrors.innerHTML = "خطا در برقراری ارتباط با سرور";
      citySelect.innerHTML = '<option value="">خطا در بارگذاری شهرها</option>';
      citySelect.disabled = true;
    }
  });
}
function delteAddress(Id) {
  $.ajax({
    url: `${domain}requests/address/delete.php`,
    type: "POST",
    data: {
      Id,
    },
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        if(response.len == 0){
          document.getElementById('deleteAddres').innerHTML=` <img src="./../../assets/user/image/address.svg" alt="">
                      <p class="fs-8">هنوز هیچ آدرسی ثبت نکرده اید.</p>`;
        }
        document.getElementById('deleteAddres'+Id).style.display="none";
      } else {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
      }
    },
  });
}
function createAddress() {
  let name = $('input[name="name"]').val(),
      family = $('input[name="family"]').val(),
      city_id = $('select[name="city_id"]').val(),
      address = $('input[name="address"]').val(),
      mobile = $('input[name="mobile"]').val(),
      post_code = $('input[name="post_code"]').val(),
      description = $('textarea[name="description"]').val(),
      getErrors = document.getElementById("getErrors");
  $.ajax({
    url: `${domain}requests/address/create.php`,
    type: "POST",
    data: {
      name,
      family,
      city_id,
      address,
      mobile,
      post_code,
      description,
    },
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        getErrors.innerHTML = "";
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        document.getElementById('addAddressBox').innerHTML+=`
        <div id="deleteAddres${response.id}" class="border border-zinc-300 rounded-md">
                <div class="border-b border-b-zinc-400 p-3 text-zinc-800 text-sm flex justify-between items-center">
                  ${response.city}
                </div>
                <div class="px-5 py-4 text-zinc-600 fill-zinc-600 space-y-4 text-sm">
                    <div class="flex gap-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path></svg>
                       ${response.address}
                    </div>
                    <div class="flex gap-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M228.44,89.34l-96-64a8,8,0,0,0-8.88,0l-96,64A8,8,0,0,0,24,96V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V96A8,8,0,0,0,228.44,89.34ZM96.72,152,40,192V111.53Zm16.37,8h29.82l56.63,40H56.46Zm46.19-8L216,111.53V192ZM128,41.61l81.91,54.61-67,47.78H113.11l-67-47.78Z"></path></svg>
                         ${response.post_code}
                    </div>
                    <div class="flex gap-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path></svg>
                         ${response.mobile}
                    </div>
                    <div class="flex gap-x-1 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path></svg>
                         ${response.fullName}
                    </div>
                </div>
                <a onclick="delteAddress(${response.id})" class="text-zinc-50 hover:text-zinc-100 transition bg-red-500 hover:bg-red-600 px-3 py-1 block w-fit mb-2 mr-5 text-xs rounded-md">
                    حذف آدرس
                </a>
            </div>`;
        if(document.getElementById('messegeAddress')){
          document.getElementById('messegeAddress').innerHTML='';
        }


      } else {

        getErrors.innerHTML = response.error;
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        scroll(600, 700);
      }
    },
  });
}
function selectDataInBlog(selectId = null) {
  let startTime; // لحظه شروع

  $.ajax({
    url: `${domain}requests/selectData/selectData.php`,
    type: "POST",
    data: {
      selectId,
    },
    beforeSend: function () {
      startTime = new Date().getTime();
      Swal.fire({
        title: '',
        html: `
        <div class="flex flex-col items-center justify-center p-2 text-center">
          <img src="./../../assets/user/image/logo.png" alt="لوگو سایت" class="w-32 h-32 mb-3 object-contain" />
          <div class="w-12 h-12 border-4 border-primary-500 border-t-transparent border-solid rounded-full animate-spin"></div>
          <p class="mt-2 text-sm font-medium text-gray-700">در حال بارگذاری اطلاعات...</p>
        </div>
`,
        showConfirmButton: false,
        allowOutsideClick: false,
        backdrop: true,
        customClass: {
          popup: 'rounded-3xl shadow-lg'
        }
      });
    },
    success: function (response) {
      const endTime = new Date().getTime();
      const elapsedTime = endTime - startTime;
      const remainingTime = 2000 - elapsedTime;
      if (remainingTime > 0) {
        setTimeout(() => {
          Swal.close();
          fillData(response);
        }, remainingTime);
      } else {
        Swal.close();
        fillData(response);
      }
    }
  });
  function fillData(response) {
    response = JSON.parse(response);
    if (response.status == 200) {
      let result = Object.keys(response.itemsCart).map((key) => [key, response.itemsCart[key]]);
      document.getElementById('selectData').innerHTML = '';
      for (let items in result) {
        document.getElementById('selectData').innerHTML += `
          <div class="bg-white rounded-3xl border transition border-zinc-300 group p-2 md:p-3 hover:drop-shadow-lg">
            <a href="/blogSingle?trak=${result[items][1].id}&slug=${result[items][1].slug}" class="image-box block overflow-hidden rounded-xl md:rounded-2xl">
              <img class="rounded-xl md:rounded-2xl w-full transition-transform duration-300 ease-in-out group-hover:rotate-3 group-hover:scale-110" src="${result[items][1].image}" alt="blog"/>
            </a>
            <div class="p-2 mt-2">
              <a href="/blogSingle?trak=${result[items][1].id}&slug=${result[items][1].slug}" class="text-xs md:text-sm font-normal md:font-DANAREGULAR h-8 lg:h-10 line-clamp-2 text-zinc-700">
                ${result[items][1].description}
              </a>
              <div class="flex justify-between mt-8">
                <div class="text-xs flex gap-x-1 items-center text-zinc-400">
                  <svg class="fill-zinc-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                    <path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Z"></path>
                  </svg>
                  ${result[items][1].createAt}
                </div>
                <a href="/blogSingle?trak=${result[items][1].id}&slug=${result[items][1].slug}" class="flex justify-center items-center gap-x-1 group w-fit text-xs md:text-sm transition text-zinc-600 group-hover:text-primary-500">
                  ادامه مطلب
                  <svg class="fill-zinc-600 transition group-hover:fill-primary-500 size-2 md:size-4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        `;
      }
    }
  }
}
function updateInfoUser() {
  let userFullName = $('input[name="userFullName"]').val(),
      gender = $('select[name="gender"]').val(),
      btnUpdateInfo = document.getElementById("btnUpdateInfo");

  btnUpdateInfo.disabled = true;
  $.ajax({
    url: `${domain}requests/user/updateInformation.php`,
    type: "POST",
    data: {
      userFullName,
      gender,
    },
    success: function (response) {
      response = JSON.parse(response);
      setTimeout(() => {
        btnUpdateInfo.disabled = false;
      }, 3000);
      if (response.status == 200) {
        document.getElementById("showFullName").innerHTML = userFullName;
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
      } else {
        //document.getElementById("divShowError").classList.remove("d-none");
        //document.getElementById("showError").innerHTML = response.text;
        scroll(150, 1000);
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
      }
    },
  });
}
function AddToFavourites(userId, product_id) {
  setTimeout(() => {
    $.ajax({
      url: 'requests/favourites/addToFavourites.php',
      method: 'post',
      dataType: 'json',
      data: {
        userId,
        product_id
      },
      success: function (response) {
        if (response.status === 200) {
          Toast.fire({
            icon: response.type,
            title: response.text,
          })
          let mystar = document.getElementById("mystar" + product_id);
          mystar.innerHTML = '<svg id="addToFavorites" class="transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red" viewBox="0 0 256 256"><path d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path></svg>\n<path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path></svg>\n';
          mystar.setAttribute("onclick", `removeFromFavourites(${userId},${product_id}, ${response.id})`);
        } else {
          Toast.fire({
            icon: response.type,
            title: response.text,
          });
        }
      },
      error: function (error) {
        console.log(error)
      },
    });
  }, 300)
}
function removeFromFavourites(userId, product_id, id) {
  setTimeout(() => {
    $.ajax({
      url: 'requests/favourites/removeToFavourites.php',
      method: 'post',
      dataType: 'json',
      data: {
        userId,
        product_id,
        id
      },
      success: function (response) {
        if (response.status === 200) {
          Toast.fire({
            icon: response.type,
            title: response.text,
          })
          let mystar = document.getElementById('mystar' + product_id);
          if (mystar) {
            mystar.innerHTML = ' <svg class="fill-zinc-700 hover:fill-red-400 transition" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="" viewBox="0 0 256 256"><path d="M178,40c-20.65,0-38.73,8.88-50,23.89C116.73,48.88,98.65,40,78,40a62.07,62.07,0,0,0-62,62c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,228.66,240,172,240,102A62.07,62.07,0,0,0,178,40ZM128,214.8C109.74,204.16,32,155.69,32,102A46.06,46.06,0,0,1,78,56c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,155.61,146.24,204.15,128,214.8Z"></path></svg>\n';
            mystar.setAttribute("onclick", `AddToFavourites(${userId},${product_id}, ${id})`);
            document.getElementById('myDivFavourte' + id).remove();
          } else {

            document.getElementById('myDivFavourte' + id).remove();
          }
          if (response.len == 0) {
            document.getElementById('Favourte').innerHTML = `
                     <div id="myDivFavourte">
                        <div class="text-center my-5">
                            <img src="./../../assets/user/image/favorites-list-empty.svg" alt="">
                            <p class="fs-8">لیست علاقه مندی های شما خالی است.</p>
                        </div>
                        <!--        User Panel Content:end-->   
                    </div>
                    `;
          }
        }
        else {
          Toast.fire({
            icon: response.type,
            title: response.text,
          });
        }
      },
      error: function (error) {
        console.log(error)
      },
    });
  }, 300)
}
function AddNewTicket() {
  let formData = new FormData();
  formData.append("fileUrl", $("#dropzone-file")[0].files[0]);
  formData.append("text", $('input[name="text"]').val());
  formData.append("title", $('input[name="title"]').val());
  $.ajax({
    enctype: "multipart/form-data",
    url: `${domain}requests/tickets/createNewTicket.php`,
    type: "POST",
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        setTimeout(() => location.replace("/ticket"), 2000);
      } else {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
      }
    },
  });
}
function AddTicketDetails(ticketId) {
  let formData = new FormData();
  formData.append("fileUrl", $("#dropzone-file")[0].files[0]);
  formData.append("text", $('input[name="text"]').val());
  formData.append("ticketId", ticketId);
  $.ajax({
    enctype: "multipart/form-data",
    url: `${domain}requests/tickets/addTicketDetails.php`,
    type: "POST",
    processData: false,
    contentType: false,
    cache: false,
    data: formData,
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 200) {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
        let downloadFile = "";
        if (response.fileUrl)
          downloadFile = `
                    <div class="text-right">
                         <a href="downloadFile.php?id=${response.id}" class="flex mx-auto items-center justify-center bg-green-700 hover:bg-zinc-600 transition rounded-xl h-8 w-10">
                             <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                             </svg>
                         </a>
                    </div>
        `;
        if (!response.textTicket) {
          response.textTicket = "";
        }
        document.getElementById("ticket").innerHTML = `
                  <div class="col-start-1 col-end-8 text-sm w-fit bg-green-500 text-white py-2 px-4 shadow rounded-lg">
                      <div class="">
                          <div class="text-right">${response.textTicket}
                          </div>
                            ${downloadFile}
                             <div class="text-xs mt-2 opacity-70">
                             ${response.date_org}
                          </div>
                      </div>
                  </div>
                `;
        document.getElementById('textMasseg').value = "";

      } else {
        Toast.fire({
          icon: response.type,
          title: response.text,
        });
      }
    },
  });
}
function addToCart(product_id) {
  const cartButtonContainer = document.getElementById('parentButtonCart');
  if (!cartButtonContainer) return;

  let data = null;

  // بررسی محصولات چندقیمتی
  const checkedColor = document.querySelector('input[name="colorSelect"]:checked');
  if (checkedColor) {
    data = JSON.parse(checkedColor.value); // {id, price, discount, count, titleColor, color}
  } else {
    // محصول تک‌قیمتی
    const priceAttr = cartButtonContainer.getAttribute('data-price');
    const discountAttr = cartButtonContainer.getAttribute('data-discount') || priceAttr;
    const countAttr = cartButtonContainer.getAttribute('data-count') || 1;

    if (!priceAttr) {
      alert('اطلاعات محصول در دسترس نیست!');
      return;
    }

    data = {
      id: null,
      price: parseFloat(priceAttr),
      discount: parseFloat(discountAttr),
      count: parseInt(countAttr),
      titleColor: null,
      color: null
    };
  }

  // تعداد انتخاب شده
  const quantityInput = cartButtonContainer.querySelector('input[type="number"]');
  let quantity = quantityInput ? parseInt(quantityInput.value) : 1;
  if (quantity > data.count) quantity = data.count;

  // ارسال AJAX به add.php
  $.ajax({
    url: `${domain}requests/cart/add.php`,
    type: "POST",
    dataType: 'json',
    data: {
      product_id: product_id,
      variant_id: data.id || '',
      color: data.color || '',
      titleColor: data.titleColor || '',
      price: data.price,
      discount: data.discount,
      quantity: quantity
    },
    success: function(response) {
      if (response.status == 200) {
        Toast.fire({ icon: response.type, title: response.text });

        const listCart = document.getElementById('listCart');
        if (listCart) listCart.innerHTML = '';
        document.getElementById('countCart').innerHTML = response.count + ' محصول';
        document.getElementById('countCart2').innerHTML = response.count;
        document.getElementById('priceCart').innerHTML = response.sumPrice;

        Object.values(response.itemsCart).forEach(item => {
          if (listCart) listCart.innerHTML += `
                        <li id="product${item.product_id}_${item.variant_id || 'default'}">
                            <div class="flex gap-x-2 py-5">
                                <div class="relative min-w-fit">
                                    <a href="./single-product.html">
                                        <img alt="" class="h-[120px] w-[120px]" src="${item.image}">
                                    </a>
                                </div>
                                <div class="w-full space-y-1.5">
                                    <a class="line-clamp-2 h-12 text-zinc-700">${item.title}</a>
                                    ${item.titleColor ? `<div class="text-sm text-gray-500">رنگ: ${item.titleColor}</div>` : ''}
                                    <div class="flex items-center justify-between gap-x-2 pt-4">
                                        <div class="text-gray-700">
                                            <span class="text-lg font-bold">${numberWithCommas(item.discount)}</span>
                                            <span class="text-sm">تومان</span>
                                        </div>
                                        <div class="text-gray-500">تعداد: ${item.quantity}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    `;
        });

        // تغییر دکمه به "مشاهده سبد"
        cartButtonContainer.innerHTML = `
                    <a href="/cart" class="block text-center mx-auto w-full mt-6 px-2 py-3 bg-gradient-to-bl from-blue-400 to-blue-600 hover:opacity-85 transition text-gray-100 rounded-2xl">
                        مشاهده سبد خرید
                    </a>
                `;
      } else if (response.status == 4000) {
        location.reload();
      }
    }
  });
}



