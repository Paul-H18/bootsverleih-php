

<?php $__env->startSection('title'); ?>
    Willkommen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="min-h-screen">
        <div class="relative h-[600px] overflow-hidden">
            <!-- Bildquelle: https://www.eventinc.de/eventlocation/schwerin/beech-resort-plauer-see  -->
            <img
                    src="<?php echo e(base_url('build/images/plauer-see.webp')); ?>"
                    alt="Plauer See"
                    class="w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/70 to-gray-900/50 flex items-center justify-center">
                <div class="text-center text-white px-4">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4">
                        Bootsverleih Plau am See
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-gray-200">
                        Erleben Sie die Schönheit der Mecklenburgischen Seenplatte
                    </p>
                    <a
                            href="<?php echo e(route_to('booking.index')); ?>"
                            class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-8 py-4 rounded-full text-lg transition transform hover:scale-105"
                    >
                        Jetzt buchen
                    </a>
                </div>
            </div>
        </div>



        <div class="container mx-auto px-4 py-16 max-w-4xl">

            <div class="text-center mb-12">

                <h2 class="text-3xl font-bold mb-6">Ihr Bootserlebnis am Plauer See</h2>

                <p class="text-lg text-gray-300 leading-relaxed mb-4">
                    Entdecken Sie den Plauer See, einen der schönsten Seen Mecklenburgs,
                    mit unseren komfortablen Booten. Ob für einen entspannten Tag auf dem Wasser,
                    einen Angelausflug oder eine romantische Fahrt in den Sonnenuntergang –
                    bei uns finden Sie das passende Boot.
                </p>

                <p class="text-lg text-gray-300 leading-relaxed">
                    Unsere modernen Liegeplätze bieten Ihnen den idealen Ausgangspunkt für
                    unvergessliche Momente auf dem Wasser. Buchen Sie noch heute Ihren Liegeplatz
                    und genießen Sie die Freiheit auf dem See.
                </p>

            </div>



            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="bg-gray-800 rounded-2xl p-6 text-center">
                    <div class="text-4xl mb-4">⚓</div>
                    <h3 class="text-xl font-semibold mb-2">Moderne Anlegestellen</h3>
                    <p class="text-gray-400">Sichere und gepflegte Liegeplätze direkt am Wasser</p>
                </div>

                <div class="bg-gray-800 rounded-2xl p-6 text-center">
                    <div class="text-4xl mb-4">🌊</div>
                    <h3 class="text-xl font-semibold mb-2">Traumhafte Lage</h3>
                    <p class="text-gray-400">Mitten in der Mecklenburgischen Seenplatte</p>
                </div>

                <div class="bg-gray-800 rounded-2xl p-6 text-center">
                    <div class="text-4xl mb-4">📅</div>
                    <h3 class="text-xl font-semibold mb-2">Einfache Buchung</h3>
                    <p class="text-gray-400">Online buchen und direkt loslegen</p>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/home.blade.php ENDPATH**/ ?>