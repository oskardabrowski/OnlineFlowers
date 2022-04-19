<?php include "./inc/account/accountHead.php"; ?>
<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}



?>

<body>
    <?php include "./inc/accountNav.php"; ?>
    <article class="UserApp">
        <?php include "./inc/accountMenu.php"; ?>
        <div class="UserApp-container">
            <?php

            if (empty($page)) {
                include "./inc/account/home.php";
            } else {
                switch ($page) {
                    case "home":
                        include "./inc/account/home.php";
                        break;
                    case "announcements":
                        include "./inc/account/announcements.php";
                        break;
                    case "cart":
                        include "./inc/account/cart.php";
                        break;
                    case "changePassword":
                        include "./inc/account/changePassword.php";
                        break;
                    case "chat":
                        include "./inc/account/chat.php";
                        break;
                    case "edit":
                        include "./inc/account/edit.php";
                        break;
                    case "form":
                        include "./inc/account/form.php";
                        break;
                    case "profile":
                        include "./inc/account/profile.php";
                        break;
                    case "payments":
                        include "./inc/account/payments.php";
                        break;
                    default:
                        include "./inc/account/home.php";
                        break;
                }
            }







            ?>








        </div>
    </article>
</body>
<script src="./js/menu.js"></script>
<script src="./js/cart.js"></script>
<script src="./vendors/summernote/summernote.init.js"></script>

</html>