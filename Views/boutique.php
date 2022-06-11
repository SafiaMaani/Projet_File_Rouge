<?php include_once "Views/Includes/header.php" ?>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio mt-5">
    <div class="container">

        <div class="section-title">
            <h2>Boutique</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li onclick="filterSelection('all')" class="btn active">Tous les produits</li>
                    <li onclick="filterSelection('huile')" class="btn">Huiles</li>
                    <li onclick="filterSelection('creme')" class="btn">Crèmes</li>
                    <li onclick="filterSelection('baume')" class="btn">Baumes à lèvres</li>
                    <li onclick="filterSelection('parfum')" class="btn">Parfums</li>
                    <li onclick="filterSelection('pack')" class="btn">Packs</li>
                </ul>
            </div>
        </div>

    </section>
    <!-- End Portfolio Section -->

    
    <style>
    .row {
        margin: 10px -16px;
    }

    /* Add padding BETWEEN each column */
    .row,
    .row>.column {
        padding: 8px;
    }

    /* Create three equal columns that floats next to each other */
    .column {
        float: left;
        width: 33.33%;
        display: none;
        /* Hide all elements by default */
    }
    
    /* Clear floats after rows */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    
    /* Content */
    .content {
        background-color: white;
        padding: 10px;
    }
    
    /* The "show" class is added to the filtered elements */
    .show {
        display: block;
    }
    </style>


<div class="main">
    <div class="row">
        <div class="column huile">
            <div class="content">
                <img src="Views/assets/img/boutique/Huiles/huiles.jpg" alt="huile" style="width:100%">
                <h4>Mountains</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column baume">
            <div class="content">
                <img src="Views/assets/img/boutique/Baumes/IMG-20190529-WA0019.jpg" alt="baume" style="width:100%">
                <h4>Lights</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column creme">
            <div class="content">
                <img src="Views/assets/img/boutique/Cremes/creme.jpg" alt="creme" style="width:100%">
                <h4>Forest</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column parfum">
            <div class="content">
                <img src="Views/assets/img/boutique/Parfums/IMG-20190126-WA0039.jpg" alt="parfum" style="width:100%">
                <h4>Man</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <div class="column pack">
            <div class="content">
                <img src="Views/assets/img/boutique/Packs/IMG-20190125-WA0181.jpg" alt="pack" style="width:100%">
                <h4>Woman</h4>
                <p>Lorem ipsum dolor..</p>
            </div>
        </div>
        <!-- END GRID -->
    </div>

    <!-- END MAIN -->
</div>

<script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }
    
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }
    
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<!-- <div class="row portfolio-container">
    <div class="col-lg-4 col-md-6 portfolio-item filter-baume">
        <div class="portfolio-wrap">
            <img src="Views/assets/img/boutique/Baumes/IMG-20190529-WA0019.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                    <a href="DetailProduct" title="More Details"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?php include_once "Views/Includes/footer.php" ?>
