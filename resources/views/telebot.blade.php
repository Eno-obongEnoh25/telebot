<!doctype html>
<html lang="en">
    <head>
    <title>Telegram Bot</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container jumbotron">
            <div class="row mx-5 p-3">

                <div class="col-md-6 text-centre">
                    <form action="/telebot" method="Post" enctype="multipart/form-data">
                        @csrf
                        <h4>Select a file</h4>

                            <div class="my-3 bg-grey">
                                <input type="file" name="image">
                            </div>

                            <div class="mb-3 bg-grey">
                                <input type="text" name="text" id="" class="form-control">
                            </div>

                                <button type="submit" class="btn btn-primary border-0 px-2 text-light w-full p-2 border-0 rounded-pill">Post Chat</button>
                        </form>
                </div>

                <div class="col-md-6 text-centre">
                    @foreach ($bot as $bot)
                    <div class="mt-3">
                        <img src="{{ asset('public/images/'.$bot->imageName) }}" alt="" style="height: 10%; width: 10%">
                        <h3>{{ $bot->text }}</h3>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>



