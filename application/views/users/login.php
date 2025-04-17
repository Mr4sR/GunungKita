<?php $this->load->view('templates/header'); ?>

<section class="flex justify-center items-center min-h-screen bg-gray-900 bg-opacity-75" style="background: url('<?= base_url("assets/images/gunung-bromo.jpg") ?>') no-repeat center center; background-size: cover;">>
    <div class="container flex justify-center items-center">
        <div class="card p-6 w-full max-w-md border border-green-700 bg-white shadow-md rounded-lg">
            <h2 class="text-center text-green-700 text-2xl font-bold">Login</h2>

            <?php if ($this->session->flashdata('error')): ?>
                <p class="text-red-500 text-center font-bold mt-2"><?= $this->session->flashdata('error') ?></p>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success')): ?>
                <p class="text-green-500 text-center font-bold mt-2"><?= $this->session->flashdata('success') ?></p>
            <?php endif; ?>

            <form method="post" action="<?= base_url('users/proses_login') ?>" class="mt-4">
                <div class="mb-4">
                    <input type="text" name="username" class="form-input w-full border-black border-2 rounded-md h-12 pl-3" placeholder="Username" value="<?= set_value('username') ?>" required>
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-input w-full border-black border-2 rounded-md h-12 pl-3" placeholder="Password" required>
                </div>
                <button type="submit" class="btn bg-green-700 text-white w-full py-2 rounded-md hover:bg-green-800">Login</button>
            </form>

            <p class="text-center mt-4">Belum punya akun? 
                <a href="<?= base_url('register') ?>" class="text-green-700 hover:underline">Register</a>
            </p>
        </div>
    </div>
</section>


<?php $this->load->view('templates/footer'); ?>
