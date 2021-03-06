<?php require('partials/head.php'); ?>
<?php if(isset($_SESSION['logged'])): ?>
     <?php header ( 'Location: index' ); ?>
<?php endif;?>
    <div class="credentials-box">
        <form class=" credentials-form ml-4 mt-6 w-10/12 h-auto bg-indigo-700 rounded-lg" action="<?= root(); ?>register/reg" method="post">
        <h1 class="p-6 font-bold text-2xl text-white">Registro</h1>
            <label for="email" class="sr-only">Email address:</label>
            <input required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email..." type="email" name="email" id="email"><br>
            <label for="username" class="sr-only">Username:</label>
            <input required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username..." type="text" name="username" id="username"><br>
            <label class="sr-only" for="password">Password:</label>
            <input required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" type="password" name="password" id="password" placeholder="Password..."><br>
            <label class="sr-only" for="password2">Repeat Password:</label>
            <input required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" type="password" name="password2" id="password2" placeholder="Confirm password...">
            <label class="text-white ml-4 mr-4" for="role">Role:</label>
            <select class="my-8 rounded-lg bg-indigo-500 border cursor-pointer text-white p-2" name="role" id="role">
            <?php foreach($roles as $role):?>
                <option value="<?php echo $role->id;?>" class="m-4"><?php echo $role->name;?></option>
            <?php endforeach; ?>
            </select><br>

            <button type="submit" class="flex mx-auto mt-2 mb-4 text-white bg-indigo-500 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer border border-white-100 border-opacity-50 transition-colors">Registro</button>

            <p class="pb-6"><a class="m-4  hover:text-indigo-100 text-indigo-300" href="/login">Ya tienes cuenta? Logueate!</a></p>
        </form>
    </div>
<?php require('partials/footer.php'); ?>