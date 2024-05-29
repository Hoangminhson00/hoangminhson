<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <?php
        
        ?>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-6 border border-2">
                    <form action="" method="get"></form>
                    <h1>PHP Form Validation Example</h1>
                    <span class="text-danger"> * required field</span>

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            placeholder=""
                        />
                       
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="emailHelpId"
                            placeholder="abc@mail.com"
                        />
                       
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Website</label>
                        <input
                            type="text"
                            class="form-control"
                            name="website"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Comment</label>
                        <textarea class="form-control" name="comment" id="" rows="3"></textarea>
                    </div>

                    <label for="">Gender</label>
                    
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
name="gender"
id=""
                            value="female"
                        />
                        <label class="form-check-label" for="">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id=""
                            value="male"
                        />
                        <label class="form-check-label" for="">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="gender"
                            id=""
                            value="orther"
                        />
                        <label class="form-check-label" for="">Orther</label>
                    </div>
                    
                    <br>
                    <button
                        type="submit"
                        class="btn btn-primary my-4"
                    >
                        Submit
                    </button>

                </div>
            </div>
        </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>