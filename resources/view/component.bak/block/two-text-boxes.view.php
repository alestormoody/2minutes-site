<div id="block-two-text-boxes">
    <div class="flex w-full">
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

        <div class=" w-1/2 aspect-square flex flex-col justify-center items-center bg-gray-200">
            <div class="w-[50%] h-[50%] p-4 flex flex-col justify-center">
                <h2 class="mb-2 text-5xl">
                    <?= $right['title'] ?>
                </h2>
                <p class="text-xl">
                    <?= $right['subtitle'] ?>
                </p>
            </div>
        </div>
    </div>
</div>