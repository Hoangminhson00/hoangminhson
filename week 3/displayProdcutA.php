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
        <header>
            <!-- place navbar here -->
        </header>
        <main>
          
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-7 ">
                <form class="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  
                    <div class="mb-3">
                        <label for="" class="form-label">ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            id=""
                            placeholder=""
                        />
                       
                    </div>

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
                        <label for="" class="form-label">Company</label>
                        <input
                            type="text"
                            class="form-control"
                            name="company"
                            id=""
                            placeholder=""
                        />
                        <div class="mb-3">
                        <label for="" class="form-label">Color</label>
                        <input
                            type="text"
                            class="form-control"
                            name="color"
                            id=""
                            placeholder=""
                        />

                        <div class="mb-3">
                        <label for="" class="form-label">Amount</label>
                        <input
                            type="text"
                            class="form-control"
                            name="amount"
                            id=""
                            placeholder=""
                        />
                        <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input
                            type="text"
                            class="form-control"
                            name="price"
                            id=""
                            placeholder=""
                        />

                    <button
                        type="submit"
                        class="btn btn-primary my-4"
                    >
                        Submit
                    </button>
                    
                </div>
            </div>
        </div>
</form>

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
        <br>

        <?php
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    ?>
    <?php
    require_once "coreproductA.php";
    $Id = $Name = $Company = $Color = $Amount = $Price = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Id = test_input($_POST["id"]);
        $Name = test_input($_POST["name"]);
        $Company = test_input($_POST["company"]);
        $Color = test_input($_POST["color"]);
        $Amount = test_input($_POST["amount"]);
        $Price = test_input($_POST["price"]);

        $pr = new Product($Id, $Name, $Company, $Color, $Amount, $Price);
        echo $pr->toString();
    }
     ?>
    </body>
</html>
