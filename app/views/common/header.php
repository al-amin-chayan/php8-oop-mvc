<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?? 'Welcome' ?></title>
        <style>
            header{
                background-color: #eee;
                padding: 2em;
            }

            nav {
                text-align: center;
            }
            nav ul>li {
                list-style-type: none;
                display: inline;
                padding: 5px 15px;
            }

            li a {
                text-decoration: none;
            }
        </style>

    </head>
    <body>
        <?php include BASE_PATH . 'app/views/common/nav.php' ?>
        