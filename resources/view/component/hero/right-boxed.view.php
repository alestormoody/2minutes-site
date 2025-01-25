<style>
    @media screen and (max-width: 768px) {
        #hero-right-boxed {
            padding: 0;
        }

        .hero-content {
            width: 90%;
            padding: 30px;
            right: 5%;
            left: 5%;
        }

        .background-image {
            display: none;
        }

        .background-image-mobile img {
            display: block;
        }
    }
</style>

<div id="hero-right-boxed" class="relative flex justify-end items-center h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="background-image absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $desktopImage ?>" alt="Background" class="h-[80vh] w-full object-cover" />
    </div>

    <div class="background-image-mobile absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $mobileImage ?>" alt="Background" class="hidden h-[80vh] w-full object-cover" />
    </div>

    <div class="absolute top-[10%] mx-[10px] w-[calc(100%-20px)] md:w-[40%] md:mx-0 md:right-[5%] h-[80%] z-1 bg-white rounded-lg shadow-xl"></div>

    <div class="hero-content text-center md:w-[40%] z-10 px-8 absolute right-[5%]">
        <h1 class="hero-title text-black text-[48px] font-semibold leading-tight mb-4 uppercase"><?= $title ?></h1>
        <p class="hero-subtitle text-black text-[20px] leading-relaxed mb-6 mx-auto max-w-[500px] font-normal"><?= $subtitle ?></p>
        <button class="primary-button bg-blue-600 text-white py-[8px] px-[16px] border-none rounded-[4px] text-[14px] font-semibold transition-all duration-300 ease-in-out hover:bg-blue-700" form="action-hero"><?= $buttonLabel ?></button>
    </div>
</div>
