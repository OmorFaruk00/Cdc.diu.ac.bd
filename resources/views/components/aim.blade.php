<style>
    :root{ --main-color: #FEA604; }
    .aim-bg{
        background-color: #F6F9FE;
        padding: 40px;

    }
.serviceBox{
    color: var(--main-color);
    background: linear-gradient(to right bottom,#fff,#eee);
    font-family: 'Roboto', sans-serif;
    text-align: center;
    padding: 25px 25px 25px;
    border-radius: 35px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.3);
    position: relative;
    z-index: 1;
    height: 300px;
}
.serviceBox:before{
    content: "";
    background: var(--main-color);
    width: 100%;
    height: 25px;
    position: absolute;
    top: 65px;
    left: 0;
    z-index: -1;
}
.serviceBox .service-icon{
    color: #fff;
    background: var(--main-color);
    font-size: 42px;
    line-height: 80px;
    width: 100px;
    height: 100px;
    margin: 0 auto 15px;
    border: 10px solid #fff;
    border-radius: 50%;
}
.serviceBox .title{
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 10px;
}
.serviceBox .description{
    color: #999;
    font-size: 15px;
    line-height: 25px;
    text-align: justify;
}
.serviceBox.green{ --main-color: #5DB05E; }
.serviceBox.blue{ --main-color: #0C8AF9; }
.serviceBox.purple{ --main-color: #a55eea; }
@media only screen and (max-width: 1199px){
    .serviceBox{ margin: 0 0 40px; }
}


</style>

<div class="aim-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><img src="img/icon/aim1.png" alt="" height="40px"></span>
                    </div>
                    <p class="description">To help undergraduate, graduate students well-informed about their future working lives and develops their skills to  translate these effectively into appropriate decisions and actions.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox green">
                    <div class="service-icon">
                        <span><img src="img/icon/aim2.png" alt="" height="40px"></span>
                    </div>
                    <p class="description">To maintain and develop links with the range of organizaiton providing appropriate opportunities for graduates, including further internship.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox blue">
                    <div class="service-icon">
                        <span><img src="img/icon/aim3.png" alt="" height="40px"></span>
                    </div>
                    <p class="description">To introduce students with different sectors and jobs fields all arouns the globe</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="serviceBox purple">
                    <div class="service-icon">
                        <span><img src="img/icon/aim4.png" alt="" height="40px"></span>
                    </div>
                    <p class="description">To guide students through their interests and make them ready for any job environment.</p>
                </div>
            </div>
        </div>
    </div>
</div>