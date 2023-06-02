<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="alert1" class="alert">
        <span class="alert-text">Пользвателя с такими данными не существует</span>
        <img role="button" class="alert-close" src="./images/close.png" alt="">
    </div>
    <section class="auth">
        <div class="container">
            <div class="auth-inner">
                <form class="form-auth">
                    <h3 class="form-title">Форма авторизации</h3>
                    <div class="form-item">
                        <label for="username">Логин</label>
                        <input require class="form-item__input" name="login" type="text" id="username">
                    </div>
                    <div class="form-item">
                        <label for="password">Пароль</label>
                        <input require class="form-item__input" name="password" type="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-green form-btn">Отправить</button>

                </form>

            </div>
        </div>
    </section>

    <section class="user d-none">
        <div class="container">
            <div class="user-inner">
                <div class="user-profile">
                    <div class="user-img">
                        <img src="https://sun9-10.userapi.com/impg/YTkcTUtaJi4_-9pDgjl2WraRHLypsnbLa7gf2g/3jfF65C-uvs.jpg?size=1280x800&quality=95&sign=f22965b85317fd0c847a0a89de6424c7&c_uniq_tag=V_yP1ZfQJ50oAbHYd253Y0hi5o7cIe9keWK_VM0Vjkc&type=album" alt="">
                    </div>
                    <div class="user-info">
                        <h2 class="user-name">awdawd</h2>
                        <h3 class="user-login">Bebzopilla2132</h3>
                        <h4 class="user-date">2023-06-09</h4>
                        <button id="btn-logout" class="btn btn-danger user-info__btn">Выход</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/userHandler.js"></script>
    <script src="./js/alertHandler.js"></script>
    <script src="./js/index.js"></script>

    <script>
        // function installUserData(userData) {
        //     const name = document.querySelector(".user-name")
        //     const login = document.querySelector(".user-login")
        //     const date = document.querySelector(".user-date")
        //     const img = document.querySelector(".user-img")

        //     name.textContent = userData.name
        //     login.textContent = userData.login
        //     date.textContent = userData.date_birth
        //     img.src = userData.photo
        // }
    </script>
</body>

</html>