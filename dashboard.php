<?php
$page = 'index';

require_once "./header.php";
require_once "./lib/Auth.php";
require_once "./lib/Dashboard.php";

if (!Auth::isAdmin()) {
    header('Location: index.php');
}

$error = false;
if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'register.products':
            require_once "./lib/Products.php";
            $valid = Products::create($_POST);
            if (!$valid) {
                $error = 'Products failed.';
            }
            break;
        case 'register.slider':
            require_once "./lib/Products.php";
            $valid = Products::createslider($_POST);
            if (!$valid) {
                $error = 'Products slider failed.';
            }
            break;
        case 'register.team':
            require_once "./lib/Registration.php";
            $valid = Registration::create($_POST);
            if (!$valid) {
                $error = 'Products failed.';
            }
            break;
        case 'product.delete':
            require_once "./lib/Products.php";
            $valid = Products::delete($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting User failed.';
            }
            break;
        case 'team.delete':
            require_once "./lib/Registration.php";
            $valid = Registration::deleteteam($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting User failed.';
            }
            break;
        case 'slider.delete':
            require_once "./lib/Products.php";
            $valid = Products::deleteSlider($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting User failed.';
            }
            break;
        case 'user.delete':
            require_once "./lib/User.php";
            $valid = User::delete($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting User failed.';
            }
            break;
        case 'contact.delete':
            require_once "./lib/Contact.php";
            $valid = Contact::delete($_REQUEST['id']);
            if (!$valid) {
                $error = 'Deleting Contact failed.';
            }
            break;
        case 'edit.user':
            $valid = Auth::edit($_REQUEST['id']);
            if (!$valid) {
                $error = 'Editing profile failed.';
            }
            break;
    }
}


$show = Auth::showprofile();
$users = Dashboard::getUsers();
$products = Dashboard::getProducts();
$team = Dashboard::getTeam();
$slider = Dashboard::getSlider();
$contact = Dashboard::getContacts();

?>

<link rel="stylesheet" href="css/style.css">
</head>

<body>


    <?php
    require_once "./nav.php";

    ?>



    <h1 id="dashboard-text">Admin Dashboard</h1>


    <!-- shfaq user -->
    <h1 class="dashboard-h1"> Users </h1>
    <table class="table-1">
        <tr>
            <th class="rows">ID</th>
            <th class="rows">Name</th>
            <th class="rows">Email</th>
            <th class="rows">Password</th>
            <th class="rows">Role</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach ($users as $users) : ?>
            <tr>
                <td class="table-data"><?php echo $users['id']; ?></td>
                <td class="table-data"><?php echo $users['name']; ?></td>
                <td class="table-data"><?php echo $users['email']; ?></td>
                <td class="table-data"><?php echo $users['password']; ?></td>
                <td class="table-data"><?php echo $users['role']; ?></td>
                <td class="table-data"><a href="dashboard.php?action=user.delete&id=<?php echo $users['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- edit user -->
    <form action="dashboard.php?action=edit.user&id=<?php echo $show['id']; ?>" method="POST" type="text">

        <h1 class="dashboard-h1"> Edit Users </h1>

        <table class="table-1">
            <tr>
                <th class="rows">ID of user that you want to edit</th>
                <th class="rows">Name</th>
                <th class="rows">Email</th>
                <th class="rows">Password</th>
                <th class="rows">Role</th>
                <th class="rows">Update</th>

            </tr>
            <tr>

                <td class="table-data"><input type="text" name="id" value="" placeholder="Enter ID"></td>
                <td class="table-data"><input type="text" name="name" value="" placeholder="Enter name"></td>
                <td class="table-data"><input type="text" name="email" value="" placeholder="Enter email"></td>
                <td class="table-data"><input type="password" name="password" placeholder="password" data-validate="Password is required"></td>
                <td class="table-data"><input type="text" name="role" value="" placeholder="Enter Role"></td>
                <td class="table-data"><input type="submit" name="update" value="Update user"></td>
            </tr>
        </table>
    </form>
    <hr class="new4" style="border: solid 2px; margin-top: 40px;">
    <!-- shfaq produkt -->
    <h1 class="dashboard-h1"> Products </h1>
    <table class="table-1">
        <tr>
            <th class="rows">Admini</th>
            <th class="rows">ID Product</th>
            <th class="rows">Photo</th>
            <th class="rows">Title</th>
            <th class="rows">Text</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach ($products as $products) : ?>
            <tr>
                <td class="table-data"><?php
                                        $u = Dashboard::getUserById($products['iduser']);
                                        echo ($u) ? $u['name'] : 'Eshte fshire useri nga databaza';
                                        ?></td>
                <td class="table-data"><?php echo $products['idproduct']; ?></td>
                <td class="table-data"> <img src="<?php echo $products['foto']; ?>" style="max-width: 90%; max-height: 100px;" /></td>
                <td class="table-data"><?php echo $products['titulli']; ?></td>
                <td class="table-data"><?php echo $products['teksti']; ?></td>
                <td class="table-data"><a href="dashboard.php?action=product.delete&id=<?php echo $products['idproduct']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <!-- shto produkt -->
    <form action="dashboard.php?action=register.products" method="POST" type="text">

        <h1 class="dashboard-h1"> Register Products </h1>

        <table class="table-1">
            <tr>
                <th class="rows">Photo of product (Link)</th>
                <th class="rows">Title of product</th>
                <th class="rows">Text about product</th>

            </tr>
            <tr>

                <td class="table-data"><input type="text" name="foto" value="" placeholder="Enter link of photo"></td>
                <td class="table-data"><input type="text" name="titulli" value="" placeholder="Enter title of product"></td>
                <td class="table-data"><input type="text" name="teksti" value="" placeholder="Enter text about product"></td>
                <td class="table-data"><input type="submit" name="update" value="Register"></td>
            </tr>
        </table>
    </form>
    <hr class="new4" style="border: solid 2px; margin-top: 40px;">
    <!-- OK -->
    <!-- teamm show-->

    <h1 class="dashboard-h1"> Register Show </h1>

    <table class="table-1">
        <tr>
            <th class="rows">ID</th>
            <th class="rows">Name</th>
            <th class="rows">Position</th>
            <th class="rows">Bio</th>
            <th class="rows">Photo of team</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach ($team as $team) : ?>
            <tr>
                <td class="table-data"><?php echo $team['idteam']; ?></td>
                <td class="table-data"><?php echo $team['name']; ?></td>
                <td class="table-data"><?php echo $team['position']; ?></td>
                <td class="table-data"><?php echo $team['bio']; ?></td>
                <td class="table-data"><img src="<?php echo $team['foto']; ?>" style="max-width: 90%; max-height: 100px;" /></td>
                <td class="table-data"><a href="dashboard.php?action=team.delete&id=<?php echo $team['idteam']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- team register -->
    <form action="dashboard.php?action=register.team" method="POST" type="text">

        <h1 class="dashboard-h1"> Register Team </h1>

        <table class="table-1">
            <tr>
                <th class="rows">Name</th>
                <th class="rows">Position</th>
                <th class="rows">Bio</th>
                <th class="rows">Photo of person (Link)</th>
            </tr>
            <tr>

                <td class="table-data"><input type="text" name="name" value="" placeholder="Enter name"></td>
                <td class="table-data"><input type="text" name="position" value="" placeholder="Enter position"></td>
                <td class="table-data"><input type="text" name="bio" value="" placeholder="Enter bio"></td>
                <td class="table-data"><input type="text" name="foto" value="" placeholder="Enter link of photo"></td>
                <td class="table-data"><input type="submit" name="update" value="Register"></td>
            </tr>
        </table>
    </form>

    <!-- slider show-->
    <hr class="new4" style="border: solid 2px; margin-top: 40px;">

    <h1 class="dashboard-h1"> Slider Show </h1>

    <table class="table-1">
        <tr>
            <th class="rows">ID Slider</th>
            <th class="rows">Foto</th>
            <th class="rows">Text</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach ($slider as $slider) : ?>
            <tr>
                <td class="table-data"><?php echo $slider['idslider']; ?></td>
                <td class="table-data"><img src="<?php echo $slider['foto']; ?>" style="max-width: 90%; max-height: 100px;" /></td>
                <td class="table-data"><?php echo $slider['text']; ?></td>
                <td class="table-data"><a href="dashboard.php?action=slider.delete&id=<?php echo $slider['idslider']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- team register -->
    <form action="dashboard.php?action=register.slider" method="POST" type="text">

        <h1 class="dashboard-h1"> Slider Team </h1>

        <table class="table-1">
            <tr>
                <th class="rows">ID Slider</th>
                <th class="rows">Photo of products (Link)</th>
                <th class="rows">Text</th>
            </tr>
            <tr>

                <td class="table-data"><input type="text" name="idslider" value="" placeholder="Enter ID"></td>
                <td class="table-data"><input type="text" name="foto" value="" placeholder="Enter photo link"></td>
                <td class="table-data"><input type="text" name="text" value="" placeholder="Enter text"></td>
                <td class="table-data"><input type="submit" name="update" value="Register"></td>
            </tr>
        </table>
    </form>

    <hr class="new4" style="border: solid 2px; margin-top: 40px;">
    <h1 class="dashboard-h1"> Contact Us </h1>

    <table class="table-1" style="margin-bottom: 100px;">
        <tr>
            <th class="rows">Name</th>
            <th class="rows">Email</th>
            <th class="rows">Phone</th>
            <th class="rows">Message</th>
            <th class="rows">Delete</th>
        </tr>
        <?php foreach ($contact as $contact) : ?>
            <tr>
                <td class="table-data"><?php echo $contact['name']; ?></td>
                <td class="table-data"><?php echo $contact['email']; ?></td>
                <td class="table-data"><?php echo $contact['phone']; ?></td>
                <td class="table-data"><?php echo $contact['message']; ?></td>
                <td class="table-data"><a href="dashboard.php?action=contact.delete&id=<?php echo $contact['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>



    </div>



    <script src="js/page.js"></script>