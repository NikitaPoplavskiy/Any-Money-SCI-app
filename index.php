<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
    <script src="index.js" defer></script>

</head>

<body class="container h-100">
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
        <form name="payment" method="post" action="send.php?>" class="form-control d-flex justify-content-center flex-sm-column" accept-charset="UTF-8">
            <div class="form-group d-flex justify-content-center flex-sm-column">
                <label for="merchant">Merchant Id</label>
                <input  class="form-control required" type="text" id="merchant" name="merchant" value="2479" />
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input  class="form-control required" type="text" id="amount" name="amount" value="10"/>
            </div>
            <div class="form-group">
                <label for="in_curr">Curency</label>
                <input  class="form-control required" type="text" id="in_curr" name="in_curr" value="UAH"/>
            </div>
            <div class="form-group">
                <label for="payway">Payway</label>
                <input  class="form-control required" type="text" id="payway" name="payway" value="anycash"/>
            </div>
            <div class="form-group">
                <label for="merchant_payfee">Payfee</label>
                <input  class="form-control required" type="text" id="merchant_payfee" name="merchant_payfee" value="0,50"/>
            </div>
            <div class="form-group">
                <label for="externalid">External Id</label>
                <input class="form-control required" type="text" id="externalid" name="externalid"/>
            </div>

            <input class="btn btn-success" type="submit" value="Pay">
        </form>
    </div>
</div>
</body>
</html>