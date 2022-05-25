
        <!-- Sidebar--> <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>




        

<!-- ************************************* Clients & Forniseur **************************-->
                            
<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClients" aria-expanded="false" aria-controls="collapseClients">
                              <!-- ****ICON***  <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>-->  
                              customer 
 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseClients" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('Client')}}">Management Client</a>
                                    
                                </nav>
                            </div>


<!-- ************************************* Stock**************************-->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStock" aria-expanded="false" aria-controls="collapseStock">
                                 Stock
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseStock" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('product')}}">management stock</a>
                                  
                                </nav>
                            </div>



                          

<!-- ************************************* Vente Client **************************-->

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVenteClients" aria-expanded="false" aria-controls="collapseVenteClients">
                customer sale

                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVenteClients" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('order')}}">order</a>
                    
                        <a class="nav-link" href="{{route('ListInvoice')}}">invoice</a>

                    </nav>
                </div>



<!-- ************************************* Caisse **************************-->

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCaisse" aria-expanded="false" aria-controls="collapseCaisse">
    Caisse
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseCaisse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
         <a class="nav-link" href="{{route('sellings')}}">Registre Ventes</a>
        
     </nav>
</div>

<!-- ************************************* Caisse **************************-->

                            <a class="nav-link" href="charts.html">
                                   Configuration
                            </a>

  </div>
 </div>

                    
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        G-PRODUCT
                    </div>
                </nav>
            </div>


       