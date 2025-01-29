<div id="hero-center-overlay"
    class="relative flex justify-center items-center h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="background-image absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $desktopImage; ?>" alt="Background" class="h-[80vh] w-full object-cover" />
    </div>

    <div class="background-image-mobile absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $mobileImage; ?>" alt="Background" class="hidden h-[80vh] w-full object-cover" />
    </div>

    <div class="overlay absolute top-0 left-0 w-full h-[80vh] z-1 bg-black opacity-50"></div>

    <div class="hero-content text-center w-full md:w-2/3 z-10 px-5 flex flex-col justify-center items-center">
        <div class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">
            <?= $title; ?>
        </div>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8 md:w-2/3">
            <?= $subtitle; ?>
        </p>
        <p class="mt-8">
            <button
                class="bg-blue-600 text-white py-[8px] px-[16px] border-none rounded-[4px] text-[14px] font-semibold transition-all duration-300 ease-in-out hover:bg-blue-700"
                form="action-hero">
                <?= $buttonLabel; ?>
            </button>
        </p>
    </div>
    <form id="action-hero" action="<?= $buttonUrl; ?>" method="GET" class="hidden"></form>
</div>