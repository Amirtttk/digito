<main class="p-6 flex-1 overflow-y-auto">
      <div class="bg-white rounded-2xl min-h-80 h-auto shadow-custom p-4">
        <div class="px-2 md:px-3 pt-3 pb-5 mb-3 text-zinc-700 text-sm md:text-base flex items-center gap-x-2 border-b border-zinc-200">
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>
          تیکت ها
        </div>
        <div
          class="relative flex flex-col w-full h-full overflow-scroll text-gray-700">
          <div class="flex justify-end items-center mb-4">
            <a href="#" data-modal="addAddress" class="open-modal text-xs md:text-sm bg-zinc-400 hover:opacity-90 hover:shadow-lg transition rounded-lg px-4 py-2.5 text-white">
              ثبت تیکت جدید
            </a>
          </div>
          <!-- modal add address -->
          <div id="addAddress" class="modal fixed inset-0 bg-black/20 bg-opacity-50 flex items-center justify-center transition-opacity duration-300 z-50 hidden">
            <div class="modal-box bg-white p-2 rounded-xl shadow-lg w-11/12 md:w-6/12 
              transition-transform duration-300 opacity-0 scale-90 
              max-h-[90vh] overflow-y-auto">
              <div class="flex justify-between items-center p-4 border-b border-zinc-300">
                <h3 class="text-gray-700">
                  ثبت تیکت جدید
                </h3>
              </div>
              <form method="post" enctype="multipart/form-data" style="display: contents;" class="space-y-6 px-2 lg:px-8 pb-4 sm:pb-6 pt-4 text-xs md:text-base">
                  <div id="errors"></div>
                <div class="sm:flex gap-x-5">
                  <div class="sm:w-1/2 mb-2 sm:mb-0 flex flex-col gap-y-1">
                    <label class="text-zinc-700 flex">
                      موضوع
                      <svg class="fill-red-500" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#4d4d4d" viewBox="0 0 256 256"><path d="M210.23,101.57l-72.6,29,51.11,65.71a6,6,0,0,1-9.48,7.36L128,137.77,76.74,203.68a6,6,0,1,1-9.48-7.36l51.11-65.71-72.6-29a6,6,0,1,1,4.46-11.14L122,119.14V40a6,6,0,0,1,12,0v79.14l71.77-28.71a6,6,0,1,1,4.46,11.14Z"></path></svg>
                    </label>
                    <input name="title"  class="rounded-2xl rounded-tr-sm text-sm text-zinc-600 w-full bg-[#f0f0f0] px-5 py-3.5 placeholder:text-zinc-400 placeholder:text-xs focus:outline-1 focus:outline-zinc-300" type="text" placeholder="موضوع تیکت">
                  </div>
                </div>
                <div class="mt-5">
                  <div class="flex flex-col gap-y-1">
                    <label class="text-zinc-700 flex">
                      متن تیکت
                    </label>
                      <div class="flex items-center justify-center w-16 h-16 order-2">
                          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                              <div class="flex flex-col items-center justify-center px-2 py-1.5">
                                  <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                                  </svg>
                              </div>
                              <input id="dropzone-file" type="file" class="hidden">
                          </label>
                      </div>
                      <div class="flex-grow order-1">
                          <input placeholder="متن پیام" type="text" name="text" class="text-right flex w-full border border-zinc-300 rounded-xl focus:outline-none focus:border-zinc-400 pr-4 h-11">
                      </div>
                  </div>
                </div>
                <a type="button" onclick="AddNewTicket()" class="block bg-primary-500 hover:bg-primary-400 text-white text-center w-8/12 mx-auto mt-10 px-5 py-3 rounded-xl shadow-lg transition-all font-yekanBakhBold">
                   ثبت تیکت
                </a>
              </form>
            </div>
          </div>
          <table class="w-full text-right table-auto min-w-max">
            <thead>
              <tr>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    شماره تیکت
                  </p>
                </th>
                  <th class="p-4 border-b border-b-zinc-400">
                      <p class="block text-sm opacity-70">
                          عنوان تیکت
                      </p>
                  </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    تاریخ
                  </p>
                </th>
                  <th class="p-4 border-b border-b-zinc-400">
                      <p class="text-xs md:text-sm font-normal flex items-center text-zinc-400">
                          وضعیت پیغام
                      </p>
                  </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    وضعیت
                  </p>
                </th>
                <th class="p-4 border-b border-b-zinc-400">
                  <p class="block text-sm opacity-70">
                    جزئیات
                  </p>
                </th>
              </tr>
            </thead>
            <tbody>
            <?php
            $getTickets = getTickets($_SESSION['user_sending']);
            if ($getTickets) {
            foreach ($getTickets as $Tickets) {
            $date = jdate("r", (dateToTimestamp($Tickets['timeSend'])));
            $date_org = $date;
            ?>
              <tr class="even:bg-zinc-100">
                <td class="p-4">
                  <p class="block text-sm">
                      #<?= $Tickets['code_tickets'] ?>
                  </p>
                </td>
                <td class="p-4">
                  <p class="block text-sm">
                      <?= $Tickets['title'] ?>
                  </p>
                </td>
                  <td class="p-4">
                      <p class="block text-sm">
                          <?= $date_org; ?>
                      </p>
                  </td>
                <td class="p-4">
                    <?php
                    if ($Tickets['last_sender'] == 1) {
                        echo '
                             <p class="block text-xs bg-green-500 text-white w-fit px-2 py-1 rounded-full">
                                پاسخ داده شده 
                            </p>
                                                         ';
                    } else {
                        echo '
                            <p class="block text-xs bg-yellow-600 text-white w-fit px-2 py-1 rounded-full">
                                درانتظار پاسخ
                            </p>
                                                         ';
                    }
                    ?>
                </td>
                  <td style="min-width:100px;" id="statusShow<?= $Tickets['id'] ?>" class="p-4">
                      <?php
                      if ($Tickets['status'] == 1) {
                          echo '
                             <p class="block text-xs bg-green-500 text-white w-fit px-2 py-1 rounded-full">
                         باز
                            </p>
                                                         ';
                      } else {
                          echo '
                            <p class="block text-xs bg-red-600 text-white w-fit px-2 py-1 rounded-full">
                                بسته شده 
                            </p>
                                                         ';
                      }
                      ?>
                  </td>
                <td class="p-4">
                  <a href="/ticketDetails?id=<?= $Tickets['code_tickets'] ?>" class="block text-xs">مشاهده</a>
                </td>
              </tr>
            <?php
            }
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>