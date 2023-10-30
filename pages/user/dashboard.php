<?php
defined("APPLICATION_NAME") OR die("Direct script access is not allowed.");

// Check user login
if (!Session::has("logged") || (Session::get("logged")["role"] !== "user")) {
    redirect(baseUrl("logout"));
}

Template::extend("includes/layouts/master.php");
Template::section("title", "Dashboard");
Template::section("content");
?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">User Dashboard</h1>
</div>
<?php
Template::endSection();
Template::execute();
