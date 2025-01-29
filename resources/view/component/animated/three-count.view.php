<div id="animated-three-count">
    <div class="w-full mt-8 pt-8">
        <div class="flex flex-col justify-center items-center">
            <div class="text-5xl">
                <?= $title ?>
            </div>
            <p class="text-2xl w-1/2 text-center">
                <?= $subtitle ?>
            </p>
        </div>
        <div class="w-full flex">
            <div class="sm:hidden md:block w-1/3 aspect-square p-8">
                <div class="w-full p-4 flex flex-col justify-center items-center">
                    <div class="text-8xl"><span id="stats1"><?= $n1 ?></span> %</div>
                    <p class="text-2xl"><?= $n1_title ?></p>
                </div>
            </div>
            <div class="sm:hidden md:block w-1/3 aspect-square p-8">
                <div class="w-full p-4 flex flex-col justify-center items-center">
                    <div class="text-8xl"><span id="stats2"><?= $n2 ?></span> %</div>
                    <p class="text-2xl"><?= $n2_title ?></p>
                </div>
            </div>
            <div class="sm:hidden md:block w-1/3 aspect-square p-8">
                <div class="w-full p-4 flex flex-col justify-center items-center">
                    <div class="text-8xl"><span id="stats3"><?= $n3 ?></span> %</div>
                    <p class="text-2xl"><?= $n3_title ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TODO : animate the numbers loading -->