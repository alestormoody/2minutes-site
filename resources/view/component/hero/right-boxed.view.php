<div id="hero-right-boxed" class="relative flex justify-end items-center h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="background-image absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $desktopImage ?>" alt="Background" class="h-[80vh] w-full object-cover" />
    </div>

    <div class="background-image-mobile absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $mobileImage ?>" alt="Background" class="hidden h-[80vh] w-full object-cover" />
    </div>

    <div class="absolute top-[10%] mx-[10px] w-[calc(100%-20px)] md:w-[40%] md:mx-0 md:right-[5%] h-[80%] z-1 bg-white rounded-lg shadow-xl"></div>

    <div class="hero-content text-center md:w-[40%] z-10 px-8 absolute right-[5%]">
        <div class="text-5xl font-semibold tracking-tight text-black sm:text-5xl">
            <?= $title ?>
        </div>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">
            <?= $subtitle ?>
        </p>
        <p class="mt-8">
            <button class="primary-button bg-blue-600 text-white py-[8px] px-[16px] border-none rounded-[4px] text-[14px] font-semibold transition-all duration-300 ease-in-out hover:bg-blue-700" form="action-hero">
                <?= $buttonLabel ?>
            </button>
        </p>
    </div>
</div>
