<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body>


    <main id="main">

        <!-- header -->
        <header class="w-100 position-fixed bg-dark text-light" id="header">

                <nav class="navbar navbar-expand-lg ">
                    <div class="container">

                        <a class="navbar-brand" href="#"> ReUse </a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <div class="col"></div>

                            <ul class="navbar-nav m-auto w-50 text-center">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#mission">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallary">Gallery</a>
                                </li>
                              
                            </ul>

                            <div class="nav-item">
                                <a class=" btn btn-success mx-3" id="c-btn" href="#contact">Contact</a>
                            </div>
                        </div>

                    </div>
                </nav>
        </header>

        <!-- home -->

        <div class="pt-5 bg-light" id="home">
            <div class="container">
                <div class="row border-bottom border-dark py-5">

                    <div class="col">

                        <div class="display-2 my-5 pt-5"> ReUse E-Waste </div>

                        <div class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis a quod assumenda voluptatem alias aspernatur libero. Perferendis quo natus voluptatem. </div>

                        <!-- <div class="muted"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium aliquam quasi animi necessitatibus quam qui maxime minus at, repellendus quisquam vitae dignissimos laborum ex? Voluptatum quas harum aut minus molestiae. </div> -->

                        <a href="#mission" class="btn btn-success px-3 my-5"> Explore More </a>

                    </div>

                    <div class="col">

                        <div class="w-75 mx-auto ">
                            <img src="img/bg.png" alt="" class="image-fluid w-100 ml-auto p-3" id="bg">
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- mission -->

        <div class="section" id="mission">
            <div class="container py-5">

                <div class="row my-5 py-5">

                    <div class="col-7 border bg-light">

                        <div class="h4 text-success p-3"> Your Global Mission </div>

                        <div class="py-5 px-5 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam unde porro, asperiores velit in facere doloremque nulla, minus alias laborum blanditiis, quo autem vel impedit quasi ipsam ratione pariatur explicabo architecto non odio mollitia? Architecto cum amet officia nam. </div>

                    </div>

                    <div class="col-5 bg-success">

                        <div class="text-light px-5 my-2 mt-5"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae eos quia eaque doloremque distinctio inventore accusamus corporis voluptates minus quidem? </div>

                        <a href="#about" class="btn btn-outline-light mx-5 my-3"> More About </a>

                    </div>

                    <div class="col-6">

                        <img src="img/m.png" alt="" class="w-100">

                    </div>

                    <div class="col-5 bg-light shadow">

                        <div class="display-2 p-3"> This is Revalution <Br> To Change The World </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- gallary -->

        <div class="section" id="gallary">

            <div class="container">

                <!-- <div class="row">

                    <div class="col-4 bg-primary text-light d-flex align-items-center " id="gal">

                        <div class="h2"> The Movement For Change </div>

                    </div>
                    
                    <div class="col-4 p-3">
                        <img src="img/11.jpg" alt="" class=" image-fluid  w-100 rounded">
                    </div>

                    <div class="col-4 p-3">
                        <img src="img/10.jpg" alt="" class=" image-fluid  w-100 rounded">
                    </div>

                    <div class="col-4 p-3">
                        <img src="img/m.png" alt="" class=" image-fluid  w-100 rounded">
                    </div>

                    <div class="col-4 p-3">
                        <img src="img/11.jpg" alt="" class=" image-fluid  w-100 rounded">
                    </div>

                    <div class="col-4 p-3">
                        <img src="img/11.jpg" alt="" class=" image-fluid  w-100 rounded">
                    </div>
                    
                    
                </div> -->
                <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/m.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Second slide label</h1>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/10.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Third slide label</h1>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

            </div>
        </div>

        <!-- about -->

        <div class="section pt-5 mt-5" id="about">


            <div class="bg-dark py-5" id="heading">
                <div class="container">

                    <div class="h1 text-light"> About ReUse Evalutaion </div>

                    <div class="text-secondary py-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dolores dolore minima obcaecati atque totam sint vitae voluptatum modi. </div>
                    
                </div>
            </div>

            <div class="container pb-5">
                <div class="row mb-5">

                    <div class="col-5 d-grid pt-5">

                        <div class="h2 text-success py-5"> We are in Whole World </div>

                        <div class="text-secondary py-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dolores dolore minima obcaecati atque totam sint vitae voluptatum modi. </div>
                        
                        <div class="text-secondary py-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dolores dolore minima obcaecati atque totam sint vitae voluptatum modi. </div>

                        <div class="text-secondary py-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio dolores dolore minima obcaecati atque totam sint vitae voluptatum modi. </div>

                        <a href="#contact" class="btn btn-success px-3 my-5"> Contact Us </a>

                    </div>

                    <div class="col-5" id="index">

                        <img src="img/1.jpg" alt="" class="image-fluid w-100 p-3" id="firstimg">

                        <img src="img/10.jpg" alt="" class="image-fluid w-100 p-3" id="lastimg">

                    </div>


                </div>
            </div>
        </div>


        <!-- contact -->

        <div class="section" id="contact">
            <div class="container pt-5">
                <div class="row pt-5">

                    <div class="col-7 my-5">

                        <form action="data.php" class=" border border-success rounded" id="myform">

                            <div class="lead text-dark mb-3"> Wait form Message </div>

                            <div class="row">

                                <div class="col">
                                    <input type="text" name="name" id="" class="form-control my-3" placeholder="Name">

                                </div>
                                <div class="col">
                                    <input type="text" name="email" id="" class="form-control my-3" placeholder="Email">

                                </div>
                                <div class="col">

                                    <input type="text" name="subject" id="" class="form-control my-3" placeholder="Subject">

                                </div>

                            </div>




                                <textarea name="message" id="" class="form-control" rows="10" placeholder="message"></textarea>
                                <input type="submit" value="submit" name="submit" class="btn btn-success px-5  my-3"> 

                                </form>

                    </div>

                    <div class="col-4" >


                        <div class="pt-5 mt-5" id="con">

                            <div class="h4 py-3"> Contact Number </div>

                            <a href="tel:+9211420420"> 9211420420</a>

                            <div class="h4 py-3"> Contact Email </div>

                            <a href="mailto:fake@gmail.com"> fake@gmail.com </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>


        <!-- footer -->


        <footer id="footer">
            <div class="container">
                <div class="row">

                    <div class="div pt-5 mt-5 border-bottom border-success"></div>

                    <div class="col-12 text-center p-3" id="join">

                        <div class="h3 py-3"> Join Use </div>

                        <p class="text-secondary"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Accusamus ducimus magni laboriosam. Vero iusto, sit obcaecati neque dicta eveniet et. </p>

                        <div class="btn-group" id="joinf">
                            <input type="email" class="form-control" placeholder="Enter EmailId and Join us ...">

                            <input type="button" class="btn btn-primary px-3" value="Join us" >
                        </div>

                    </div>

                    <div class="col-12" id="lined">
                        <div class="row">

                            <div class="col-4">

                                <div class="h4"> Service </div>

                                <a href="#" class="mya"> nature friendly  </a>

                                <a href="#" class="mya"> Tree grow tree and plant </a>

                                <a href="#" class="mya"> Google service </a>

                                <a href="#" class="mya"> eco garden in home </a>

                                <a href="#" class="mya"> Green partk in Changiarh </a>

                                <a href="#" class="mya"> Mastermayank </a>


                            </div>

                            <div class="col-4">

                                <div class="h4"> Simple Explore Links </div>

                                <a href="#" class="mya"> nature friendly  </a>

                                <a href="#" class="mya"> Tree grow tree and plant </a>

                                <a href="#" class="mya"> Google service </a>

                                <a href="#" class="mya"> Mastermayank </a>


                            </div>

                        </div>
                    </div>

                    <div class="col-6 py-5">

                        CopyRight &copy; Reserved by <span class="text-success"> REUSE </span> 

                    </div>

                    <div class="col-6 text-end py-5">

                        Designed | Developed by Mayank & Uday

                    </div>

                </div>
            </div>
        </footer>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>