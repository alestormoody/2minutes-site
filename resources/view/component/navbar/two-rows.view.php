<div id="nav-two-rows" class="bg-gray-100 text-black mx-auto max-w-screen-xl">
    <!-- Prima riga -->
    <div class="flex items-center justify-between py-3 px-8">
        <div class="flex flex-col items-left pt-1 md:pt-0">
            <!-- Logo -->
            <div class="font-bold text-2xl text-black uppercase">
                <?php if ($logo): ?>
                    <img src="path/to/logo.png" alt="Logo">
                <?php else: ?>
                    <?= $name ?>
                <?php endif; ?>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <?php foreach ($menuLinks as $link): ?>
                    <a href="<?= $link['url'] ?>"
                        class="text-bl75,970ack text-sm font-semibold uppercase tracking-wider hover:text-blue-700 <?= $link['css'] ?>">
                        <?= $link['label'] ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>

        <!-- Actions (Button and Community) -->
        <div class="hidden md:flex items-center flex-col gap-3">
            <button class="bg-blue-600 text-white font-bold uppercase py-2 px-6 rounded hover:bg-blue-700 w-full">
                <?= $buttonLabel ?>
            </button>
            <a href="<?= $communityUrl ?>"
                class="text-sm text-black font-medium uppercase hover:text-blue-700">
                <?= $communityLabel ?>
            </a>
        </div>

        <!-- Mobile Menu Icon -->
        <button class="md:hidden text-2xl text-black" onclick="toggleMobileMenu()">
            ☰
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="hidden md:hidden flex-col gap-4 bg-gray-300 text-white px-8 py-4 w-full">
        <?php foreach ($menuLinks as $link): ?>
            <a href="<?= $link['url'] ?>"
                class="text-sm font-semibold uppercase tracking-wider hover:text-blue-300 <?= $link['css'] ?>">
                <?= $link['label'] ?>
            </a>
        <?php endforeach; ?>
        <button class="bg-white text-blue-700 font-bold uppercase py-2 px-6 rounded hover:bg-gray-100 mt-4">
            <?= $buttonLabel ?>
        </button>
        <a href="<?= $communityUrl ?>" class="text-white text-sm font-medium uppercase hover:text-blue-300">
            <?= $communityLabel ?>
        </a>
    </div>
</div>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
        } else {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        }
    }

    window.addEventListener('resize', function () {
        const mobileMenu = document.getElementById('mobileMenu');
        if (window.innerWidth >= 768) {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
        }
    });
</script>
