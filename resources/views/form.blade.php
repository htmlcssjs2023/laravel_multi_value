<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

</head>
<body>
    <form action="" method="POST" style="width:50%; margin:0 auto; border:2px solid gray; padding:1rem; border-radius:10px;">
        @csrf
        <div class="mb-3">
        <label class="form-label">Subject Code</label>
        <input name="sub_code" type="text" class="form-control"  placeholder="Enter Subject Code">
        </div>

        <select class="form-select" name="sub_name[]" multiple="multiple">
                <option value="" selected disabled>Choose option</option>
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="Math">Math</option>
        </select>

        <button class="btn btn-primary mt-3" type="submit">Submit</button>
    </form>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>