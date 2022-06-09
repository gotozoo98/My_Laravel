<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/login.css')}}">
    <style>
    </style>
</head>

<body>
    <main>
        <div class="banner d-flex">
            <!-- 左方區塊 -->
            <div id="section1">
                <!-- 左方區塊 -->
                <div class="left-box d-flex">
                    <!-- 左區塊標題 -->
                    <h3>Keep it special</h3>
                    <!-- 左區塊副標題 -->
                    <h5>Capture your personal memory in unique way, anywhere.</h5>

                </div>
            </div>
            <!-- 右方區塊 -->
            <div id="section2">
                <!-- 右方區塊 -->
                <div class="right-box d-flex">
                    <!-- LOGO -->
                    <div class="logo-box d-flex">
                        <div class="logo">
                            <img src="{{asset('img/login-page/logo.png')}}" alt="">
                        </div>
                        <h3>數位方塊</h3>
                    </div>
                    <!-- SVG超連結 -->
                    <div class="svg-box d-flex">
                        <div class="box-top d-flex ">
                            <div class="box1 d-flex">f</div>
                            <div class="box2 d-flex">G+</div>
                            <div class="box3 d-flex">in</div>
                        </div>
                    </div>
                    <!-- 使用其他方式登入 -->
                    <div class="box-bot d-flex">
                        <p>or use email your account </p>
                    </div>
                    <!-- 登入表單 -->
                    <div class="login-form d-flex">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control email-adress" id="exampleInputEmail1" name="email"
                                    aria-describedby="emailHelp" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>

                            <div id="emailHelp" class="form-text ">
                                <input id="remember_me" type="checkbox" name="remember" style="width: 15px;height:15px;">
                                <label for="remember_me">記住我?</label>
                                <a href="" class="ms-5">Forgot your password?</a>
                                <a href="/register" class="ms-5">新用戶?請點此註冊</a>
                            </div>
                            <button type="submit" class="btn btn-primary">SIGN IN</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- logo連結 -->
            <div id="section3">
                <!-- svg連結 -->
                <div class="svg-link">
                    <div class="link1"><img src="{{asset('img/login-page/instagram-logo-fill.svg')}}" alt=""></div>
                    <div class="link2"><img src="{{asset('img/login-page/instagram-logo-fill.svg')}}" alt=""></div>
                    <div class="link3"><img src="{{asset('img/login-page/instagram-logo-fill.svg')}}" alt=""></div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>