<?php 
$taxonomy       = 'subindustryguidelines';
$term           = get_query_var( $wp_query->query_vars['taxonomy'] );
$menu_post_type = 'industryguidelines'; 

get_header(); ?>


<div class="container main-layout industry-guidelines-syariah-business">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>Member Banks</h2>
            </div>
            
            <?php echo perbanas_side_menu('industryguidelines-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php echo get_term_by('slug', $term, $taxonomy)->name; ?></span></h1>
                </div>
            </div>
          
          	<!-- Content Here -->
			<div class="row">
                <div class="col-xs-12 section">
                    <p>The development of the national banking industry has been through several stages with many obstacles. The obstacles that surface can be seen as part of the industry’s growing process, in order to achieve a healthy banking business.</p>
                    <p>One of the most critical stages for the national banking sector was the Asian monetary crisis in 1997-1998. The crisis was seen as a wake -up call for the monetary authority as well as practitioners about the need for a healthy and solid banking industry, keeping in mind the role of banks as an institution which have a major affect in the implementation of macro-economic policies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 section">
                    <h2>History of Banking In Indonesia</h2>
                    <h3>Colonialism Period and the Nationalization of Dutch Banks (1800s – 1960s)</h3>
                    <p>Banks in Indonesia have existed since the colonialism period, including Dutch banks, foreign banks from other countries, as well as banks established locally. Initially, banks were established by the Dutch with the goal to return colonized assets which were taken by the colonists. Therefore the banks which were established during the colonialism period were aimed to build the economy in rural areas and agricultural sector. After Indonesia achieved its independence, the government nationalized every Dutch bank and established state owned banks to support national development.</p>
                    <h3>Single Bank Period (1965)</h3>
                    <p>In the year 1965, President Soekarno formed a single bank system, integrating all state owned banks, Bank Tabungan Negara, and even Central Bank into one institution. The goal of forming this Single Bank was so each government policy in the monetary and banking sector can be implemented more effectively and efficiently. With this system, Indonesia had only 3 state owned banks, which were Bank Negara Indonesia (Single Bank), Bank Dagang Negara, and Bank Pembangunan Indonesia. BNI consisted of Bank Unit I as the Central Bank and 4 other units which operated according to each of its own functions.</p>
                    <h3>Development Cabinet Period (1968-1998)</h3>
                    <p>Entering the Development Cabinet Period, state owned banks which were previously incorporated into a Single Bank were separated to return operating according to each of its own functions. The liberalization of banks in 1988 facilitated the establishment of new banks, therefore increasing the number of banks significantly. The amendment of rules and political intervention then triggered the downfall of the banking system, causing Indonesia to enter a period of banking and economic crisis in 1998.</p>
                    <h3>Post Crisis Period (1999)</h3>
                    <p>The banking crisis which happened in 1997-1998 caused state owned banks to face major issues as a result of political intervention in the granting of credits and bad management. The government then ordered total restructuring and tightened the regulations, and also gave Bank Indonesia the authority to operate fully according to its function. The consolidation of several state owned banks then eliminated most specific bank functions which were previously adopted. However, BRI and BTN still adopted their specific functions. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>