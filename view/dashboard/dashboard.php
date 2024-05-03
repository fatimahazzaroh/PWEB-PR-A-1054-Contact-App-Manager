<?php
require_once 'model/contact.php';
$arr = contact::select();
?>
<div class="h-screen w-screen flex flex-row gap-8">
    <!-- sidebar -->
    <div class="bg-teal-400 h-screen w-80 gap-11">
        <p class="text-center m-24 font-bold text-lg">G-ADVENTURE</p>
        <div class=" gap flex flex-col mx-9">
            <a href class="bg-white h-16 w-auto rounded-lg text-left flex items-center p-8">Dashboard</a>
            <a href class=" h-16 w-auto rounded-lg text-left flex items-center p-8">Product</a>
            <!-- <a href
                        class=" h-16 w-auto rounded-lg text-left flex items-center p-8">Rekomendsi
                        Pendakian</a>
                    <a href
                        class=" h-16 w-auto rounded-lg text-left flex items-center p-8">Tentang
                        Kami</a> -->
            <a href="./login_page.html" class=" h-16 w-auto rounded-lg text-left flex items-center p-8">Logout</a>
        </div>
    </div>
    <!-- table -->
    <div>
        <table class="w-auto flex flex-col flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5 ">
            <thead class="text-white" style="display: table; width: 100%;">
                <tr class="bg-teal-800 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0 ">
                    <!-- <th class="p-3 text-left">No</th> -->
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Nama</th>
                    <th class="p-3 text-left">No. Telepon</th>
                    <th class="p-3 text-left" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($arr['id']); $i++) {
                ?>
                    <tr>
                        <!-- <td class="p-3 text-left"><?= $i ?></td> -->
                        <td class="p-3 text-left"><?= $arr['id'][$i] ?></td>
                        <td class="p-3 text-left"><?= $arr['name'][$i] ?></td>
                        <td class="p-3 text-left"><?= $arr['phone_number'][$i] ?></td>
                        <td>
                            <button class="btn-ubah border-grey-light border hover:bg-gray-100 p-3 text-blue-400 hover:text-blue-600 hover:font-medium cursor-pointer">Ubah</button>
                        </td>
                        <td>
                            <a href="delete.php?id=<?= $arr['id'][$i] ?>" class="btn-delete border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer" onclick="return confirm('Apakah Anda yakin ingin menghapus kontak ini?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>