<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Vote</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <script> var $url = <?php echo json_encode(url('/')); ?>; </script>

    <style>
        input[type="radio"]{
            display: none;
        }
        label {
            position: relative;
            color: #4189e0;
            font-family: "Poppins", sans-serif;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.8em;
            border: 3px solid #4189e0;
            padding: 1em 2em;
            border-radius: 0.5em;
        }
        label::before{
            content: "";
            height: 2em;
            width: 2em;
            border: 3px solid #4189e0;
            border-radius: 50%;
        }
        input[type="radio"]:checked + label::before{
            height: 2em;
            width: 2em;
            border: 0.45em solid white;
            background-color: #4189e0;
        }
        input[type="radio"]:checked + label{
            background-color: #4189e0;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container">

        <br><h1>Create Vote</h1>

        <form action="<?php echo e(url('/vote/' . $contents->id)); ?>" method="post">

            <?php echo csrf_field(); ?>

            <br><div>
                <input type="radio" name="vote" id="like" value="1">
                <label for="like">Like</label>

                <input type="radio" name="vote" id="dislike" value="0">
                <label for="dislike">Dislike</label>
            </div><br>

            <button type="submit" class="btn btn-sm btn-primary">Save</button>
            <a href="<?php echo e(url('/content')); ?>" role="button" class="btn btn-sm btn-danger">Back</a>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Blog018\resources\views/vote/form.blade.php ENDPATH**/ ?>