<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div style="width: 500px; margin: auto; ">
        <form action="pay.php" method="POST">
            <div class="mb-3 m-3">
                <label class="form-label">Name</label>
                <input type="text" style="width: 100%;" name="name" class="form-control">
            </div>
            <div class="mb-3 m-3">
                <label class="form-label">Email</label>
                <input type="email" style="width: 100%;" name="email" class="form-control">
            </div>
            <div class="mb-3 m-3">
                <label class="form-label">Phone</label>
                <input type="text" style="width: 100%;" name="phone" class="form-control">
            </div>
            <div class="mb-3 m-3">
                <label class="form-label">price</label>
                <input type="text" style="width: 100%;" name="price" class="form-control">
            </div>

            <button type="submit" style="width: 100%;" class="btn btn-primary m-3">Submit</button>
        </form>
    </div>

</body>

</html>