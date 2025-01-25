<style>
    @media screen and (max-width: 768px) {
        #hero-right-overlay {
            padding: 0 10px;
        }

        .hero-content {
            width: 100%;
            padding: 40px 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            right: auto;
        }

        .background-image {
            display: none;
        }

        .background-image-mobile img {
            display: block;
        }

        .overlay {
            background: linear-gradient(to top, black, transparent);
        }
    }
</style>


<div id="hero-right-overlay" class="relative flex justify-end items-center h-[80vh] max-h-[666px] w-full overflow-hidden">
    <div class="background-image absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $desktopImage ?>" alt="Background" class="h-[80vh] w-full object-cover" />
    </div>

    <div class="background-image-mobile absolute top-0 left-0 w-full h-[80vh] z-0">
        <img src="<?= $mobileImage ?>" alt="Background" class="hidden h-[80vh] w-full object-cover" />
    </div>

    <div class="overlay absolute top-0 right-0 w-full h-[80vh] z-1 bg-gradient-to-l from-black to-transparent opacity-75"></div>

    <div class="hero-content text-left md:w-1/2 z-10 m-5 md:m-0">
        <h1 class="hero-title text-white text-[48px] font-semibold leading-tight mb-4 uppercase"><?= $title ?></h1>
        <p class="hero-subtitle text-white text-[20px] leading-relaxed mb-6 max-w-[500px] font-normal"><?= $subtitle ?></p>
        <button class="primary-button bg-blue-600 text-white py-[8px] px-[16px] border-none rounded-[4px] text-[14px] font-semibold transition-all duration-300 ease-in-out hover:bg-blue-700" form="action-hero"><?= $buttonLabel ?></button>
    </div>
    <form id="action-hero" action="<?= $buttonUrl ?>" method="GET" class="hidden"></form>
</div>
