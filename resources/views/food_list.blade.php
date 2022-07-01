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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Bánh mì</h1>
        <a href="http://127.0.0.1:8000/foods/create">Thêm mới xe</a>
        <div class="row">
            @foreach ($foods as $food)
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/images/{{ $food->image }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $food->name }}</h5>
                                    <p class="card-text">{{ $food->description }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $food->price }}.000VND</small>
                                    </p>
                                </div>
                                <a class="btn btn-warning" href="http://127.0.0.1:8000/foods/1">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    </div>
</body>

</html>
