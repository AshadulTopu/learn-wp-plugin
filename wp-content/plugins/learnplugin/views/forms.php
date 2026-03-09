<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        // $(document).ready(function () {
        jQuery("#formPost").validate({
            // rules: {
            //     uname: "required",
            //     uemail: {
            //         required: true,
            //         email: true
            //     }
            // }, 
            // messages: {
            //     uname: "Please enter your username",
            //     uemail: "Please enter a valid email address"
            // },
            submitHandler: function (form) {
                // alert("Form submitted successfully!");
                console.log($("#formPost").serialize());

                // form.submit();
            }
        });
        // });
    </script>
</head>

<body>

    <div class="container mt-3">
        <form action="#" id="formPost">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            </div>
            <div class="mb-3">
                <label for="uemail" class="form-label">Email:</label>
                <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>