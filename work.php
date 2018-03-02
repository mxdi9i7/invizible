<?php include './partials/header.php' ?>

<input type="text" value="work" id="identifier" hidden>
<link rel="stylesheet" href="css/gridfolio.css">
<link rel="stylesheet" href="css/gridfolio-classic.css">
<div class="workBackground">
    
<nav>
    <div class="navContainer">
        <div class="navLogo">
             <a href="index.php"><img id="logo" src="img/logo-white-words.png" alt=""></a>
        </div>

        <div class="links">
            <ul>
                <li><a href="index.php">ABOUT</a></li>
                <li><a href="index.php#service">OUR SERVICES</a></li>
                <li><a href="work.php">WORK</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="workContainer">

    <!-- <div class="workVertialNav">
        <ul>
            <li><a href="***">BRAND COMMUNICATIONS</a></li>
            <li><a href="***">EVENTS</a></li>
            <li><a href="***">EXPERIENTIAL</a></li>
            <li><a href="work.php">CROSS-PROMOTIONAL CAMPAIGNS</a></li>
            <li><a href="***">INFLUENCER MARKETING</a></li>
            <li><a href="***">VISIBILITY OPPORTUNITIES</a></li>
            <li><a href="***">CONTENT CREATION</a></li>
            <li><a href="***">CELEBRITY WRANGLING</a></li>
        </ul>
    </div> -->
    
    
<!-- <section class="videoPage">
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/81ymFnvpfDc" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
</section> -->
    <!-- <div class="campaignsContainer">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="anmani.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/anmani_t.jpg" alt="">
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="hk.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/hk_t.jpg" alt="">
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="modernVice.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/modern_t.jpg" alt="">
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="/lanyu.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/lanyu_t.jpg" alt="">
                        </div>
                    </div>  
                </a>
            </div>
            
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="olaBaby.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/thumbnail-sq.png" alt="">
                        </div>
                    </div>  
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="nanjing.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/nanjing_t.jpg" alt="">
                        </div>
                    </div> 
                </a>
            </div>
            <div class="col-md-4 col-sm-6 col-lg-4">
                <a href="biggerCode.php">
                    <div class="imgContainerItem">
                        <div class="caseImgOverlay">
                        </div>
                        <div class="casePortImg">
                            <img src="../imgCase/biggercode_t.jpg" alt="">
                        </div>
                    </div> 
                </a>
            </div>
            
        </div>
    </div>
</div> -->

    <div id="gridfolio--container"></div>
</div>
<script src="js/gridfolio.js"></script>
<script>
    var gridfolio = new Gridfolio({

    // This is the selector string of the DOM element you want to dump
    // Gridfolio into. You can also just use 'body'.
    container: '#gridfolio--container',

    // Here are all your configurable options
    options: {

    // Fancy! Adds an 'is-animated' class to blocks as they come into view.
    // I've given you a basic fade/slide-in effect, but this is set up so
    // you can add whatever CSS craziness you want.
    animateIntoView: true,

    // Breakpoints are mobile first.
    breakpoints: [

        // That means the grid is 1 block wide when the broswer's width
        // ranges from 0px wide to 500px wide
        { minWidth: 0, gridWidth: 1 },
        // 3 blocks wide from 500px to 900px browser width
        { minWidth: 500, gridWidth: 2 },
        // and so on
        { minWidth: 900, gridWidth: 3 },
        // and so forth.
        { minWidth: 1300, gridWidth: 3 }
    ],

    // Want the font sizes to scale with the browser? Yeah, we fabulous.
    scaleFonts: true,

    // Pop in a theme! All this does is add [data-themee='warhol'] to
    // your .gridfolio element, so it WON'T HAVE AN EFFECT unless you also
    // include the corresponding CSS file. See the 'Special Features' section.
    theme: 'warhol'
    },

    // Okay, this is where your actual data lives. All fields are optional.
    blocks: [
    {
        url: 'anmani.php',
        classname: 'anmani'
    }, {
        url: 'hk.php',
        classname: 'hk'
    }, {
        url: 'modernVice.php',
        classname: 'modern'
    },{
        url: 'lanyu.php',
        classname: 'lanyu'
    }, {
        url: 'olaBaby.php',
        classname: 'ola'
    }, {
        url: 'nanjing.php',
        classname: 'nanjing'
    }, {
        url: 'biggerCode.php',
        classname: 'bigger'
    }
    ]
    })
</script>

<?php include './partials/footer.php' ?>