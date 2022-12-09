<main>
	<div class="pt-6 px-4">
		<div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
			<!-- mapping here -->
			<?php foreach ($map as $m) : ?>
				<div class="bg-white shadow rounded-lg p-4">
					<div class="flex items-center flex-wrap">
						<!-- <video class="w-full aspect-video" poster="<?= base_url('assets/img/default.jpg') ?>" src="<?= base_url('assets/video/') . $m['video'] ?>" controls></video> -->
						<h3 class="text-base mt-2 font-normal "><?= $m['title'] ?></h3>
						<p class="text-xs text-gray-500 mt-1 "><?= $m['description'] ?></p>


					</div>
				</div>
			<?php endforeach ?>



		</div>

	</div>
</main>