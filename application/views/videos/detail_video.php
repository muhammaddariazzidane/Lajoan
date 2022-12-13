<main>
  <div class="pt-6 lg:px-6 lg:w-11/12 w-full mx-auto flex justify-center">
    <!-- mapping here -->
    <div class="bg-white shadow rounded-lg p-4 w-full">
      <div class="flex items-center flex-wrap">
        <!-- <video class="w-full h-96 aspect-video" poster="<?= base_url('assets/img/default.jpg') ?>" src="<?= base_url('assets/video/') . $pid['video'] ?>" controls></video> -->
        <h3 class="text-base mt-2 font-normal "><?= $pid['title'] ?></h3>
      </div>
      <p class="text-xs text-gray-500 mt-1 "><?= $pid['description'] ?></p>
      <button onclick="btnKomen()" class="mb-4 w-1/4 mx-auto flex justify-center  text-lg font-semibold text-gray-900 text-center mt-5 btnKomen">Comments</button>
      <div class="hidden valueKomen">
        <form action="" method="post" class="my-2 relative">
          <input type="text" name="" id="" placeholder="comment here" class="w-full focus:outline-none p-2 border-b border-red-600">
          <button type="submit" class="absolute top-0 right-0 bg-lime-300 rounded-tr-lg p-2">Kirim</button>
        </form>
        <div class="space-y-4">
          <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
            <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
            <p class="text-sm">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et dolore
              magna aliquyam erat, sed diam voluptua.
            </p>
            <div class="space-y-4 mt-6">
              <div class="flex">
                <div class="flex-1 flex-col-reverse bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                  <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                  <p class="text-xs sm:text-sm">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                    sed diam nonumy eirmod tempor invidunt ut labore et dolore
                    magna aliquyam erat, sed diam voluptua.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</main>