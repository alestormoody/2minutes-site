<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button"
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <?php if ($logo): ?>
            <img class="h-8 w-auto" src="<?= $logo ?>" alt="<?= $name ?>">
          <?php else: ?>
            <span class="text-white text-lg font-bold"><?= $name ?></span>
          <?php endif; ?>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <?php foreach ($menuLinks as $link): ?>
              <a href="<?= $link['url'] ?>"
                class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 text-sm font-medium <?= $link['css'] ?>">
                <?= $link['label'] ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 hidden">
        <button type="button"
          class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View updates</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu" hidden>
    <div class="space-y-1 px-2 pt-2 pb-3">
      <?php foreach ($menuLinks as $link): ?>
        <a href="<?= $link['url'] ?>"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white <?= $link['css'] ?>">
          <?= $link['label'] ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</nav>

<script>

  const button = document.querySelector('[aria-controls="mobile-menu"]');
  const menu = document.getElementById('mobile-menu');

  button.addEventListener('click', () => {
    const expanded = button.getAttribute('aria-expanded') === 'true' || false;
    button.setAttribute('aria-expanded', !expanded);
    menu.hidden = expanded;
  });

</script>