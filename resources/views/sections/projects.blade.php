<!-- Begin of projects page -->
<div class="section page-projects page page-cent" id="s-projects">
    
    <section class="content">
        <h2 class="heading">HYBRID<strong>OITC</strong></h2>
        <h3>Latest <strong>Projects</strong>  of HYBRIDs</h3>
        <!-- Content -->
        <div class="sectionhex ">
            
        @foreach ($projects as $project)
            <div class="articlehex">
                <img alt src='storage/{{ $project->image }}' />
            </div>
        @endforeach
        </div>
        <p class="paragraph">Here’s a selection of some of the projects we’ve lovingly crafted over the last few years. If you’d like your company and your self to be part of HYBRIDOITC family,</p>
    </section>
    <!-- Scroll down button -->
    <footer class="p-footer p-scrolldown">
        <a href="#research">
            <div class="arrow-d">
                <div class="before">Research</div>
                <div class="after">Do&nbsp;We.?</div>
                <div class="circle"></div>
            </div>
        </a>                        
    </footer>
</div>
<!-- End of projects page -->