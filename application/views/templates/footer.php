<footer class="text-center text-sm text-gray-500 my-10">
  &copy; 2022 <a href="#" class="hover:underline">Lajoan.com</a>. All rights reserved.
  </foot>
  </div>
  </div>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
  <script>
    // topbar
    const myHover = document.querySelector('.myHover')
    const myContent = document.querySelector('.myContent')
    // komen
    // const btKomen = document.querySelector('.btnKomen')
    const valueKomen = document.querySelector('.valueKomen')

    const btnKomen = () => {
      valueKomen.classList.toggle('hidden')
    }

    myHover.addEventListener('click', () => {
      myContent.classList.toggle('hidden')
    })
    window.addEventListener("click", function(e) {
      if (e.target != myHover && e.target != myContent) {
        myContent.classList.add("hidden");
      }
    });
  </script>

  </div>
  </body>


  </html>