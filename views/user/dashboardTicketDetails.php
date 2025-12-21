<?php
$getTicketsCode = getTicketsCode(GET('id'));
if(!$getTicketsCode) {
    abort();
}
$time = jdate("B", (dateToTimestamp($getTicketsCode['timeSend'])));
$date = jdate("r", (dateToTimestamp($getTicketsCode['timeSend'])));
$date_org = $date ;
$getChatTickets = getChatTickets($getTicketsCode['id']);
?>
<main class="p-6 flex-1 overflow-y-auto">
      <div class="bg-white rounded-2xl min-h-80 h-auto p-4 shadowLarge">
        <div class="px-2 md:px-3 pt-3 pb-5 mb-3 text-zinc-700 text-sm md:text-base flex items-center gap-x-2 border-b border-zinc-200">
          <svg class="fill-primary-500" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>
          جزئیات تیکت #<?= $getTicketsCode['code_tickets'] ?>
        </div>
        <div class="flex flex-col flex-auto h-fit">
          <div class="flex justify-between mb-4 px-4">
            <p class="text-zinc-700">
              موضوع: <?= $getTicketsCode['title'] ?>
            </p>
            <p class="text-zinc-700">
                تاریخ:   <?= $date_org; ?>
            </p>
          </div>
            <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full border border-stone-300">
                <div class="flex flex-col h-full overflow-x-auto mb-4">
                    <div class="grid grid-cols-12 gap-y-2 p-3">
                        <?php
                        if ($getChatTickets) {
                            foreach ($getChatTickets as $ChatTickets) {
                                $time = jdate("B", (dateToTimestamp($ChatTickets['timeSend'])));
                                $date = jdate("r", (dateToTimestamp($ChatTickets['timeSend'])));
                                $date_org1 = $date ;
                                ?>
                                <div class="<?= $ChatTickets['sender'] == 2 ? "col-start-1 col-end-8 text-sm w-fit bg-green-500 text-white py-2 px-4 shadow rounded-lg" : "col-start-6 col-end-13" ?>">
                                    <div class="<?= $ChatTickets['sender'] == 2 ? "" : "w-fit mr-auto text-sm bg-zinc-200 py-2 px-4 shadow rounded-lg" ?>">
                                        <div class="<?= $ChatTickets['sender'] == 2 ? "text-right" : "text-right" ?>">
                                            <?= $ChatTickets['text'] ?></div>
                                        <?php
                                        if ($ChatTickets['fileUrl'] !== null) {
                                            ?>
                                            <div class="<?= $ChatTickets['sender'] == 2 ? "text-right" : "text-left" ?>">
                                                <form method="get">
                                                    <a href="/profile/downloadFile?id=<?= $ChatTickets['id'] ?>" class="flex mx-auto items-center justify-center  <?= $ChatTickets['sender'] == 2 ? "bg-green-700" : "bg-zinc-500" ?> hover:bg-zinc-600 transition rounded-xl h-8 w-10">
                                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </a>
                                                </form>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class=" <?= $ChatTickets['sender'] == 2 ? "text-xs mt-2 opacity-70" : "text-xs mt-2 opacity-70 text-end" ?>">
                                            <?= $date_org1 ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div id="ticket" style="margin-right:10px "></div>
                <?php
                if ($getTicketsCode['status'] == 1){
                    ?>
                    <div class="flex flex-row flex-wrap gap-x-2 items-center rounded-2xl bg-white dark:bg-zinc-100 p-2 mt-4">
                        <form method="post" enctype="multipart/form-data" style="display: contents;">
                            <div class="flex items-center justify-center w-16 h-16 order-2">
                                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center p-1">
                                        <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"></path>
                                        </svg>
                                    </div>
                                    <input accept=".png, .jpg, .jpeg , .zip" name="fileUrl" id="dropzone-file" type="file" class="hidden">
                                </label>
                            </div>
                            <div class="flex-grow order-1">
                                <input placeholder="متن پیام" id="textMasseg" type="text" name="text" class="text-right flex w-full border border-zinc-300 rounded-xl focus:outline-none focus:border-indigo-300 pr-4 h-10 dark:bg-zinc-50">
                            </div>
                            <button type="button" onclick="AddTicketDetails(<?= $getTicketsCode['id'] ?>)" class="order-3 flex items-center justify-center bg-green-600 hover:bg-green-700 rounded-lg text-white px-4 py-1 flex-shrink-0">
                                <span>ارسال</span>
                                <svg class="w-4 h-4 transform rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>
      </div>
    </main>
