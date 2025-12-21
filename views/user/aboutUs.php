<?php
$getAllaAboutUs = getAllaAboutUs();
if ($getAllaAboutUs['image']){
    $thumbnail = str_replace(PATH_UPLOADS_DIR, 'public/', $getAllaAboutUs['image']);
}
?>
<main class="mt-0 md:mt-8">
    <!-- about us -->
    <div class="mx-4 md:mx-10 mb-8 md:my-12 border border-zinc-200 rounded-2xl p-4">
      <img class="rounded-lg mb-6" src="<?= $thumbnail ? "../../" . $thumbnail : '' ?>" alt="">
       <?= $getAllaAboutUs['description'] ?>
    </div>
  </main>
 <?php
 $pageTitle = "درباره ما";
 $pageScript = "

";
 $pageLink = "
";
 ?>
