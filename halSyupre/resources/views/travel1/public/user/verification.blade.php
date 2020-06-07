<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>新規会員登録</title>
<link rel="stylesheet" href="{{$cssPath}}newAcount.css">

</head>
    <body>
        <header></header>

        <div>
            <section>
                <div id="login">
                    <img src="{{$imgPath}}/sample2.jpg" alt="">
                    <div class="form-wrapper">
                        <h1>新規登録</h1>
                        @csrf
                            <div id="formblock">
                                <div class="form-item">
                                    <label for="name"></label>
                                    {{$response["name"]}}
                                </div>

                                <div class="form-item">
                                    <label for="email"></label>
                                    <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
                                </div>

                                <div class="form-item">
                                    <label for="tell"></label>
                                    <input type="text" name="tell" required="required" placeholder="電話番号"></input>
                                </div>

                                <div class="form-item">
                                    <label for="birth"></label>
                                    <input type="date" name="birth" required="required" placeholder="生年月日"></input>
                                </div>

                                <div class="form-item">
                                    <label for="password"></label>
                                    <input type="password" name="password" required="required" placeholder="パスワード"></input>
                                </div>

                                <div class="form-item">
                                    <label for="VerificationPass"></label>
                                    <input type="password" name="VerificationPass" required="required" placeholder="パスワード確認"></input>
                                </div>
                            </div>
                            <div class="button-panel">
                                <input type="submit" class="button" title="Sign In" value="Sign In"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <footer></footer>
    </body>
</html>
