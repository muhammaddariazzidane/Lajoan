<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/output.css') ?>">
</head>

<body>
  <div class="min-h-screen bg-purple-400 flex justify-center items-center">
    <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
    </div>
    <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
    </div>
    <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
      <div>
        <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
        <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an
          account to enjoy all the services without any ads for free!</p>
      </div>
      <form action="" method="post">
        <div class="space-y-4">
          <input type="text" name="name" id="" placeholder="name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
          <input type="text" name="email" id="" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
          <input type="password" name="password1" id="" placeholder="Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
          <input type="password" name="password2" id="" placeholder="Confirm Password" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
        </div>
        <div class="text-center mt-6">
          <button type="submit" class="py-3 w-64 text-xl text-white bg-purple-400 rounded-2xl">Create Account</button>
        </div>
      </form>
      <p class="mt-4 text-center text-sm">Already Have An Account? <a href="<?= base_url('auth') ?>" class="underline cursor-pointer"> Sign In</a>
      </p>
    </div>
    <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
    <div class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
    </div>
  </div>

</body>

</html>