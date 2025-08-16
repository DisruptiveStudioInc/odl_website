<div class="lang-switcher mr-2 lg:mr-4 lg:ml-10">
  <button id="lang-btn" class="lang-btn fill-white text-white bg-transparent border border-white rounded py-3 px-4">
    <?php foreach ($langSwitch as $value): ?>
      <?php if ($value['active'] == 'active'):?>
        <span class="text-sm leading-none uppercase font-bold"><?= $value['text']; ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
    <svg class="lang-arrow w-3 ml-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 10 10" xml:space="preserve">
      <path class="fill-inherit" d="M0,3.18L1.36,1.82l3.64,3.64,3.64-3.64,1.36,1.36-5,5L0,3.18Z"/>
    </svg>
  </button>
  <div id="lang-options" class="lang-options bg-secondary-200 rounded">
    <?php foreach ($langSwitch as $value): ?>
      <?php $page = ($Actual_Page != '') ? "&p={$Actual_Page}" : '' ?>
      <?php if ($value['active'] != 'active'):?>
        <a href="?language=<?= "{$value['link']}{$page}"; ?>" id="<?= $value['id']; ?>" class="lang-op text-white/75 hover:text-white">
          <div class="w-5 mr-1.5">
            <?php include("svgs/{$value['flag']}.php") ?>
          </div>
          <span class="inline-block"><?= $value['text']; ?></span>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
