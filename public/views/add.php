<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/navigation.css">
    <script src="https://kit.fontawesome.com/c648cced1d.js" crossorigin="anonymous"></script>
    <title>MAIN PAGE</title>
</head>
<body>
<header>
    <div class="left-items">
        <ul>
            <li><a href="#">B</a> </li>
            <li><a href="#"><i class="fas fa-toggle-off"></i></a></li>
        </ul>
    </div>
    <div class="add-bar">
        <button id="add-button"><i class="fas fa-plus-square"></i> add something interesting...</button>
    </div>
    <div class="right-items">
        <ul>
            <li><a href="#"><i class="far fa-bell"></i></a> </li>
            <li><a href="#"><i class="fas fa-user"></i></a></li>
        </ul>
    </div>
</header>
<div class="main-container">
    <section>
        <div class="up-items">
            <ul>
                <li>
                    <a href="mainpage"><i class="fas fa-columns"></i></a>
                </li>
                <li>
                    <a href="saved"><i class="far fa-save"></i></a>
                </li>
            </ul>
        </div>
        <div class="down-items">
            <ul>
                <li>
                    <a href="upgrade"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <li>
                    <a href=""><i class="fas fa-search"></i></a>
                </li>
                <li>
                    <a href="groups"><i class="fas fa-user-friends"></i></a>
                </li>
                <li>
                    <a href="messenger"><i class="fab fa-facebook-messenger"></i></a>
                </li>
                <li>
                    <a href="settings"><i class="fas fa-cog"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <main>
        <form action="addHobby" method="POST" ENCTYPE="multipart/form-data">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="title" type="text" placeholder="title">
            <textarea name="description" rows=5 placeholder="description"></textarea>

            <input type="file" name="file"/><br/>
            <button type="submit">send</button>
        </form>
    </main>
</div>
</body>