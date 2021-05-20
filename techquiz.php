<?php
    include_once'header.php';
?>
<div class="title">
    <h1 id="h11"> TECH QUIZ </h1>
</div>
<div style="float:left;">
<img src= "techquiz.png" class="tqimg" ></div>
            <div class="description" style="float: right;">
                <h4 class="gtn">
                    Summerfest 2021 is proud to present Tech Quiz, a quiz exclusively for all the tech nerds out there! Use your tech knowledge to win an exciting cash prize! <br><br> <li class="h44">Individual participation only</li><li class="h44"> The event is from 2pm-4pm</li><li class="h44"> Laptops not necessary</li>
                </h4>
            </div>
             <div class="button1">
                <button class="btn2" onclick="decrement()"> - </button>
                <input class="btn3" id=demoInput type=number min=0 max=5>
                <button class="btn2" onclick="increment()"> + </button>
                <script>
                    function increment() 
                    {
                        document.getElementById('demoInput').stepUp();
                    }
                    function decrement() 
                    {
                        document.getElementById('demoInput').stepDown();
                    }
                </script>
            </div> 

<?php
    include_once'footer.php';
?>