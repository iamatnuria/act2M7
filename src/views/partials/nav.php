<nav class="bg-gray-300">
    <ul class="text-center ">
        <li class="p-2 border-b-2 border-gray-500"><a href="/">Home</a></li>
        <?php if(isset($_SESSION['logged'])): ?>
            <li class="p-2 border-b-2 border-gray-500">
                 <a href="/login/logout">Logout</a>
            </li>
        <?php else: ?>
        <li class="p-2 border-b-2 border-gray-500"><a href="/register">Register</a></li>
        <li class="p-2 border-b-2 border-gray-500"><a href="/login">Login</a></li>
        <?php endif;?>
        <?php if(isset($_SESSION['logged'])): ?>
            <li class="p-2 border-b-2 border-gray-500">
                 <a href="/dashboard">Dashboard</a>
            </li>
        <?php endif;?>
        <li class="p-2 border-b-2 border-gray-500"><a href="/contact">Contact</a></li>
    </ul>
</nav>