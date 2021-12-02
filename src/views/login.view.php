<?php require('partials/head.php'); ?>
<div class="credentials-box">
        <form action="#" class="credentials-form ml-4 mt-6 w-3/4 h-1/4 bg-indigo-700 rounded-lg">
        <h1 class="p-6 font-bold text-2xl text-white">Login</h1>

            <label class="sr-only" for="username">Username:</label>
            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" type="text" name="username" id="username" placeholder="Username..."><br>
            <label class="sr-only" for="password">Password:</label>
            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" type="password" name="" id="password" placeholder="Password...">
            <br>
            <button type="button" class="flex mx-auto mt-2 mb-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer border border-white-100 border-opacity-50">Login</button>
            <p class="pb-6"><a class="m-4  hover:text-indigo-100 text-indigo-300" href="/register">No tienes cuenta? Registrate!</a></p>
        </form>
    </div>
<?php require('partials/footer.php'); ?>