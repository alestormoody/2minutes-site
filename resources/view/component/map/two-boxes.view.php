<div id="map-two-boxes">
    <div class="flex w-full">
        <div class="hidden md:block w-1/2 flex-col justify-end justify-items-end">
            <div class="w-full h-full flex flex-col justify-end items-end justify-center">
                <iframe class="aspect-square" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d261188.98326338848!2d-79.4427289413379!3d43.674006088689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34baf3dae513%3A0xc98434e11ec5f592!2sRoyal%20Ontario%20Museum!5e0!3m2!1scs!2scz!4v1737039485136!5m2!1scs!2scz" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="block md:hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d261188.98326338848!2d-79.4427289413379!3d43.674006088689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34baf3dae513%3A0xc98434e11ec5f592!2sRoyal%20Ontario%20Museum!5e0!3m2!1scs!2scz!4v1737039485136!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=" w-1/2 flex flex-col justify-center items-center">
            <div class="w-[70%] h-full flex flex-col justify-center">
                <h2 class="mb-2 text-5xl">
                    <?= $title ?>
                </h2>
                <p class="text-xl">
                    <?= $subtitle ?>
                </p>
                <p class="text-xl">
                    <?= $address ?>
                </p>
                <p class="text-xl">
                    <?= $phone ?>
                </p>
                <p class="text-xl">
                    <?= $email ?>
                </p>

            </div>
        </div>
    </div>
</div>