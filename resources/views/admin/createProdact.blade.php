<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background:#27ae60;
        }
        .form {
            background:#fff;
            width: 60%;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: solid 1px;
            padding:50px;
            border-radius: 10px;
            color:#27ae60;
        }
        .submit{
            text-align: center;
        }
        .file-but{
            width:100%;
        }
        .btn{
            background:#27ae60 !important;
            border-color:#27ae60; 
        }
        #input_file{
            display: none;
        }
    </style>
</head>

<body>
    <div class="form">
        <form>
            <div class="form-group">
                <label>Name Prodact</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Details</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="button" onclick="$('#input_file').click()" class="file-but btn btn-primary">Select Image</button>
                <input type="file" id="input_file">
            </div>
            <div class="submit">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
