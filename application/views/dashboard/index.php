<!-- /c:/xampp/htdocs/pendakian/application/views/dashboard/index.php -->
<?php $this->load->view('templates-dashboard/header'); ?>

<div class="container px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Card 1</h2>
            <p class="text-gray-600">This is the content of the first card.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Card 2</h2>
            <p class="text-gray-600">This is the content of the second card.</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">Card 3</h2>
            <p class="text-gray-600">This is the content of the third card.</p>
        </div>
    </div>
</div>

<?php $this->load->view('templates-dashboard/footer'); ?>