<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>


    <div class="container">
        <h1>Chi tiết sản phẩm</h1>
        <div class="card mb-5" style="max-width: 740px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="/images/{{ $food->image }}" class="img-fluid rounded-start" alt="..." style="max-width: 240px;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food['name'] }}</h5>
                        <p class="card-text">{{ $food['description'] }}</p>
                        <p class="card-text"><small class="text-muted">{{ $food['price'] }}.000VND</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <a href="{{ route('foods.index') }} ">Trở lại trang sản phẩm</a>
    </div>

    </div>
</body>


</html>
