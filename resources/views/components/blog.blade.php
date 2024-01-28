<div>
    <style>
        .btn-blog {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 14px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 10px 28px;
            border-radius: 4px;
            transition: 0.5s;
            color: #C3E92E;
            background: #000;
            margin-bottom: 10px;
        }

        .btn-blog:hover {
            background: #C3E92E;
            color: #000;
        }

        .blog-title {
            font-family: "Roboto", sans-serif;
            color: #000;
            font-size: 18px;
            font-weight: 800;
        }

        .blog-title:hover {
            color: #C3E92E;
            cursor: pointer;
        }

        .read-more {
            color: #000;
            font-weight: 500;
        }

        .read-more:hover {
            color: #C3E92E;
        }

        .blog-date {
            color: gray;
            margin-top: 20px;
        }

        #blog {
    position: relative;
    width: 100%;
    height: 100%;
    background: url("../img/blog/blog11.jpg") top left;
    background-size: cover;
}

.dark-overlay::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity and color here */
    z-index: 1; /* Place the overlay above the content */
}
        .blog-container {
    display: flex;
    align-items: flex-end; /* Align items at the bottom */
}

.blog-content {
    margin-left: 10px; /* Add some spacing between the button and text */
}
.side-blog-title{
    color: #fff;
    font-weight: 900;
    font-size: 30px;
    margin: 20px 0px;
}
.side-blog-title:hover{
    color: #C3E92E;
    cursor: pointer; 

}
.side-blog-btn{
    color: #fff;
    font-weight: 900;
    font-size: 20px;
    margin-bottom: 30px;
}
.side-blog-btn:hover{
    color: #C3E92E;
    cursor: pointer;   

}
.blog-head{
    color: #000;
    font-weight: 700;
    font-size: 40px;
}
.blog-btn{
    color: #000;
    font-weight: 500;
    font-size: 20px;
}
.blog-btn:hover{
    color: #C3E92E;
    cursor: pointer;
}
#blog-bg{
    background: #ECEEEF;
}
    </style>
    <section id="blog-bg" class="mt-5">
        <div class="container py-5" >
            <div class="d-flex justify-content-between my-3">
                <h2 class="blog-head">OUR BLOGS</h2>
                <a href="#" class="blog-btn">VIEW ALL</a>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                    <div id="blog" class="blog-container">
                        <div class="blog-content p-4">
                            <a href="#" class="btn-blog">RUNNING</a>
                            <br>                       
                            <a href="#" class="side-blog-title">The Science Behind Running: How It Benefits Your Body And Mind</a>
                            <p class="text-white">by Rae Lil Oct 12, 2023</p>
                            <a href="#" class="side-blog-btn">READ MORE</a>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <img src="img/blog/blog11.jpg" alt="" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 ">
                            <div><a href="#" class="btn-blog">RUNNING</a></div>
                            <div>
                                <a href="#" class="blog-title">The Science Behind Running: How It Benefits Your Body And
                                    Mind</a>
                                <p class="blog-date">by Rae Lil Oct 12, 2023</p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <img src="img/blog/blog22.jpg" alt="" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 ">
                            <div><a href="#" class="btn-blog">RUNNING</a></div>
                            <div>
                                <a href="#" class="blog-title">The Science Behind Running: How It Benefits Your Body And
                                    Mind</a>
                                <p class="blog-date">by Rae Lil Oct 12, 2023</p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <img src="img/blog/blog33.jpg" alt="" width="100%">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                            <div><a href="#" class="btn-blog">RUNNING</a></div>
                            <div>
                                <a href="#" class="blog-title">The Science Behind Running: How It Benefits Your Body And
                                    Mind</a>
                                <p class="blog-date">by Rae Lil Oct 12, 2023</p>
                                <a href="#" class="read-more">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
    
    
    
            </div>
        </div>
    </section>
