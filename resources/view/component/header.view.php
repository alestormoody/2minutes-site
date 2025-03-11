<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  <img src="<?= $background ?>" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl"><?= $title ?></h2>
      <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8"><?= $subtitle; ?></p>
    </div>
    <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
        <?php foreach ($links as $url): ?>
          <a href="<?= $url['url']; ?>"><?= $url['label']; ?> <span aria-hidden="true">&rarr;</span></a>
        <?php endforeach; ?>
      </div>
      <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($stats as $value): ?>
          <div class="flex flex-col-reverse gap-1">
            <dt class="text-base/7 text-gray-300"><?= $value['label']; ?></dt>
            <dd class="text-3xl font-semibold tracking-tight text-white"><?= $value['value']; ?></dd>
          </div>
        <?php endforeach; ?>
      </dl>
    </div>
  </div>
</div>
