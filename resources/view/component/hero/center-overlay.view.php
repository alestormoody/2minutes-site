
<style>
    @media screen and (max-width: 768px) {
        #hero-center-overlay {
            padding: 0 10px;
        }

        .hero-content {
            width: 100%;
            padding: 40px 20px;
        }

        .background-image {
            display: none;
        }

        .background-image-mobile img {
            display: block;
        }
    }
</style>


<div id="hero-center-overlay" class="relative flex justify-center items-center h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="background-image absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $desktopImage; ?>" alt="Background" class="h-[80vh] w-full object-cover" />
    </div>

    <div class="background-image-mobile absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $mobileImage; ?>" alt="Background" class="hidden h-[80vh] w-full object-cover" />
    </div>

    <div class="overlay absolute top-0 left-0 w-full h-[80vh] z-1 bg-black opacity-50"></div>

    <div class="hero-content text-center w-full md:w-2/3 z-10 px-5">
        <h1 class="hero-title text-white text-[48px] font-semibold leading-tight mb-4 uppercase"><?= $title; ?></h1>
        <p class="hero-subtitle text-white text-[20px] leading-relaxed mb-6 mx-auto max-w-[500px] font-normal"><?= $subtitle; ?></p>
        <button class="primary-button bg-blue-600 text-white py-[8px] px-[16px] border-none rounded-[4px] text-[14px] font-semibold transition-all duration-300 ease-in-out hover:bg-blue-700" form="action-hero"><?= $buttonLabel; ?></button>
    </div>
    <form id="action-hero" action="<?= $buttonUrl; ?>" method="GET" class="hidden"></form>
</div>