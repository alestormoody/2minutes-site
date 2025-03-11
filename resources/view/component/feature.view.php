<div class="overflow-hidden bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:pt-4 lg:pr-8">
        <div class="lg:max-w-lg">
          <h2 class="text-base font-semibold text-indigo-600"><?= $title; ?></h2>
          <p class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl"><?= $subtitle; ?></p>
          <dl class="mt-10 max-w-xl space-y-8 text-base text-gray-600 lg:max-w-none">
            <?php foreach ($highlights as $highlight): ?>
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <?= $highlight['title']; ?>
                </dt>
                <dd class="inline"><?= $highlight['description']; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </div>
      <img src="<?= $image; ?>" alt="Feature screenshot" class="w-[48rem] max-w-none rounded-xl ring-1 shadow-xl ring-gray-400/10 sm:w-[57rem] md:-ml-4 lg:-ml-0" width="2432" height="1442">
    </div>
  </div>
</div>