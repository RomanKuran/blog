<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Messages</title>
</head>
<body>

    <div class="table_container">

        <?php
            if($edit === true){
                echo "<div class='ok'>Message changed</div>";
            }
            else if($edit === false){
                echo "<div class='no'>Something is wrong</div>";
            }
        ?>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>email</th>
                    <th>name message</th>
                    <th>message</th>
                    <th>date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr data="{{$message->id}}">
                        <td class="email">{{$message->email}}</td>
                        <td class="name_message">{{$message->name_message}}</td>
                        <td class="message">{{$message->message}}</td>
                        <td class="message">{{$message->created_at}}</td>
                        <td>
                            <button class="btn" id="edit" data-toggle="modal" data-target="#myModal">edit</button>
                            <button class="btn" id="delete">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    {{$messages->links()}}
    <button class="btn" data-toggle='modal' data-target='#insert'>add message</button>
</div>


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="edit">
                        <input type="hidden" name="id" id="id">
                        <h5>Name message:</h5>
                        <input type="text" name="name_message" id="name_message">
                        <h5>Message:</h5>
                        <textarea rows="4" cols="50" name="message" id="message"></textarea>
                        <br>
                        <button class="btn" type="submit">OK</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>

                <div class="modal-footer">
                    
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal" id="insert">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="insert">
                        <h5>Email:</h5>
                        <input type="text" name="email" id="email">
                        <h5>Name message:</h5>
                        <input type="text" name="name_message" id="name_message">
                        <h5>Message:</h5>
                        <textarea rows="4" cols="50" name="message" id="message"></textarea>
                        <br>
                        <button class="btn" type="submit">OK</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>

                <div class="modal-footer">
                    
                </div>
                
            </div>
        </div>
    </div>

    <script src="js/index_script.js"></script>

</body>
</html>