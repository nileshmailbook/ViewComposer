<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
     <form method="Post" action="">
         <div class="form-group">
            <div class="form-group">
                <label for="my-select">Channel</label>
                @include('methods.list',['field' => 'item_id'])
            </div>
         </div>
         
     </form>
</body>
</html>