<div id="block-two-boxes">
    <div class="flex w-full">
        <div class="sm:hidden md:block w-1/2 aspect-square bg-blue-500">
            <img src="<?= $desktopImage ?>" alt="Background" class="w-full h-full object-cover"" />
        </div>
        <div class=" sm:block md:hidden">
            <img src="<?= $mobileImage ?>" alt="Background" class="w-full h-full object-cover""/>
        </div>
        <div class=" w-1/2 aspect-square flex flex-col justify-center items-center">
            <div class="w-[50%] h-[50%] p-4 flex flex-col justify-center">
                <h2 class="mb-2 text-5xl">
                    <?= $title ?>
                </h2>
                <p class="text-xl">
                    <?= $subtitle ?>
                </p>
            </div>
        </div>
    </div>
</div>