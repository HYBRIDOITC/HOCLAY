<!-- Begin of research page -->
<div class="section page-research page page-cent" id="s-research">
    
    <section class="content">
        <h2 class="heading">HYBRID<strong>OITC</strong></h2>
        <h3>Latest <strong>Research</strong> of HYBRIDs</h3>
        <!-- Content -->
        <div class="sectionhex ">
            
        @foreach ($researches as $researche)
            <div class="articlehex">                
                <img alt src='storage/{{ $researche->image }}' />
            </div>
        @endforeach
        </div>
        <p class="paragraph">Here’s a selection of some of the research we’ve lovingly crafted over the last few years. If you’d like your company and your self to be part of HYBRIDOITC family,</p>
    </section>
    <!-- Scroll down button -->
    <footer class="p-footer p-scrolldown">
        <a href="#hiring">
            <div class="arrow-d">
                <div class="before">Hire&nbsp;Us</div>
                <div class="after">How.?</div>
                <div class="circle"></div>
            </div>
        </a>                        
    </footer>
</div>
<!-- End of research page -->