<div id="block-four-boxes">
    <div class="flex w-full">
        <div class="sm:hidden md:block w-1/2 aspect-square bg-blue-500">
            <img src="<?= $left['desktopImage'] ?>" alt="Background" class="w-full h-full object-cover"" />
        </div>
        <div class=" sm:block md:hidden">
            <img src="<?= $left['mobileImage'] ?>" alt="Background" class="w-full h-full object-cover""/>
        </div>
        <div class=" w-1/2 aspect-square flex flex-col justify-center items-center">
            <div class="w-[50%] h-[50%] p-4 flex flex-col justify-center">
                <h2 class="mb-2 text-5xl">
                    <?= $left['title'] ?>
                </h2>
                <p class="text-xl">
                    <?= $left['subtitle'] ?>
                </p>
            </div>
        </div>
    </div>
    <div class="flex w-full">
        <div class=" w-1/2 aspect-square flex flex-col justify-center items-center">
            <div class="w-[50%] h-[50%] p-4 flex flex-col justify-center">
                <h2 class="mb-2 text-5xl">
                    <?= $right['title'] ?>
                </h2>
                <p class="text-xl">
                    <?= $right['subtitle'] ?>
                </p>
            </div>
        </div>
        <div class="sm:hidden md:block w-1/2 aspect-square bg-blue-500">
            <img src="<?= $right['desktopImage'] ?>" alt="Background" class="w-full h-full object-cover"" >
        </div>
        <div class=" sm:block md:hidden">
            <img src="<?= $right['mobileImage'] ?>" alt="Background" class="w-full h-full object-cover"" >
        </div>

    </div>
</div>