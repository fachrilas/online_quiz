<style>
img
{
    width: 50px;
}
a:hover
{
    text-decoration: none;
}
.blackboard_container 
{
    min-height: 650px;
}
</style>
<div style="margin-top: 50px;"></div>
<div class="container outer-container" >
    <div class="row blackboard_container" >
        <div class="blackboard row" style="">
            <div class="col-md-9 right-side">
                <div class="row promotion-container" >
                    <div class="heading">
                        <h1>FAQ'S - MEOX</h1>
                    </div>
                    <div class="promotion-text">
                    Some questions that comes in your mind 
                    </div>
                </div>
                <div class="row about-us-container">
                    <div class="col-md-12 about-us-left">
                        <p class="share_us"><b>Q:<?=$faq['faq'][0]['q']?></b></p>
                        <p class="share_us">Ans:<?=$faq['faq'][0]['ans']?></p>
                        <br>
                        <p class="share_us"><b>Q:<?=$faq['faq'][1]['q']?></b></p>
                        <p class="share_us">Ans:<?=$faq['faq'][1]['ans']?></p>
                        <br>
                        <p class="share_us"><b>Q:<?=$faq['faq'][2]['q']?></b></p>
                        <p class="share_us">Ans:<?=$faq['faq'][2]['ans']?></p>
                        <br>
                        <p class="share_us"><b>Q:<?=$faq['faq'][3]['q']?></b></p>
                        <p class="share_us">Ans:<?=$faq['faq'][3]['ans']?></p>
                        <br>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 left-side">
               
            </div>
        </div>
    </div>
</div>
