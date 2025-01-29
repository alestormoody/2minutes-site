<div id="animated-three-count" class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base/7 text-gray-600"><?= $n1_title ?></dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    <span id="stats1" data-target="<?= $n1 ?>">0</span> %
                </dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base/7 text-gray-600"><?= $n2_title ?></dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    <span id="stats2" data-target="<?= $n2 ?>">0</span> %
                </dd>
            </div>
            <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                <dt class="text-base/7 text-gray-600"><?= $n3_title ?></dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
                    <span id="stats3" data-target="<?= $n3 ?>">0</span> %
                </dd>
            </div>
        </dl>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('#animated-three-count [id^="stats"]');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});
</script>
