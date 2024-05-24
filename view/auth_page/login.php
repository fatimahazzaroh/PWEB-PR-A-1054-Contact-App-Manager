<div class="h-screen w-screen flex justify-center items-center bg-gray-200">
    <!-- Left -->
    <div class="w-1/2 h-screen bg-teal-400 flex flex-col justify-center items-center gap-4">
        <p class="text-4xl font-bold">G ADVENTURE</p>
        <p class="font-semibold text-center">Sewa Alat Gunung
            Terlengkap, Petualangan Makin Mantap</p>
    </div>
    <!-- Right -->
    <div class="w-1/2 p-8 flex flex-col gap-3">
        <!-- Login -->
        <p class="font-semibold text-3xl">Login</p>
        <form action="<?= urlpath('login'); ?>" method="POST" enctype="multipart/form-data" class="flex flex-col gap-3">
            <label for="username">Username : </label>
            <input type="text" id="username" class="w-full border border-gray-300 rounded-sm py-2">
            <label for="password">Password</label>
            <input type="password" name id="password" class="w-full border border-gray-300 rounded-sm py-2">
            <input type="submit" class="h-12 w-full bg-teal-800 text-white" value="Login">
        </form> 
    </div>
        <p class="w-full text-center p-8"> Belum punya akun? <a href="<?=urlpath('register');?>">Daftar</a></p>
</div>
