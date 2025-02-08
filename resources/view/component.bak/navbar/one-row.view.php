<div id="nav-one-row" class="bg-white border-b border-gray-200">
    <div class=" mx-auto flex items-center justify-between px-6 py-3">
        <!-- Logo -->
        <div class="font-bold text-xl text-blue-600 uppercase">
        <?php if ($logo): ?>
            <img>
        <?php else: ?>
            <?= $name ?>
        <?php endif; ?>
        </div>

        <!-- Navbar Links -->
        <div class="hidden md:flex items-center gap-12">
            <div class="flex items-center gap-8">
                <?php foreach($menuLinks as $link) : ?>
                    <a href="<?= $link['url'] ?>"
                        class="text-black font-semibold uppercase hover:text-blue-600 <?= $link['css'] ?>">
                        <?= $link['label'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <form id="action-navbar" action="<?= $buttonUrl ?>" method="GET">
                <button class="bg-blue-600 text-white font-bold uppercase py-2 px-6 rounded hover:bg-blue-700">
                    <?= $buttonLabel ?>
                </button>
            </form>
        </div>

        <!-- Hamburger Menu Icon -->
        <div class="md:hidden text-2xl text-blue-600 cursor-pointer" onclick="toggleMenu()">
            ☰
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="hidden flex-col gap-4 bg-white px-6 py-3 border-t border-gray-200 md:hidden">
        <?php foreach($menuLinks as $link) : ?>
            <a href="<?= $link['url'] ?>"
                class="text-black font-semibold uppercase hover:text-blue-600 <?= $link['css'] ?>">
                <?= $link['label'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
    }
</script>
