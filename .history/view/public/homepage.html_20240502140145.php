                        <!DOCTYPE html>
                                <html lang="fr">
                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                                         integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
                                         crossorigin=""/>
                                         <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
                                        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
                                        <link rel="stylesheet" href="css/desert.css">
                                         <link rel="stylesheet" href="css/map.css">
                            <title>Accueil</title>
                                </head>
                                            <body>

                                                            <div class="Titre-desert">
                                                                                <ul>
                                                                                    <li>
                                                                                    <span>Liste des Bibliothèques de Bruxelles</span>
                                                                                </li>
                                                                                <li>
                                                                                <div  class="tm-black-bg display block tm-desert">
                                                                                
                                                                                    <a href="/?connect"><button>Connection à <br> L'administration</button></a>
                                                                                 </li>
                                                                                
                                                            </div>
                                                                </ul>
                                                            </nav>
                                                            <div id="container">
                                                                     <div id="map"></div>
                                                                        <div id="liste">
                                                                            <h1>Liste des  Bibliothèques de Bruxelles</h1>
                                                                                 <h2>Cliquez sur un élément ci-desous pour le situer sur la carte </h2>
                                                                        </div>
                                                            </div>
   
                                                         <div class="tm-row">
      <!-- Site Header -->
                                                                <footer class="tm-site-footer">
                                                                    <p class="tm-black-bg tm-footer-text">Copyright 2024 B.S.I
                                                                </footer>
                                                            </div>
                                                             <div class="tm-video-wrapper">
                                                                <i id="tm-video-control-button" class="fas fa-pause"></i>
                                                                        <video autoplay muted loop id="tm-video">
                                                                            <source src="video/desert.mp4" type="video/mp4">
                                                                                </video>
                                                                            </div>
                                                                 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                                                                    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
                                                                     crossorigin=""></script>
                                                                <script src="js/map.js"></script>

                                                                 <script src="js/jquery-3.4.1.min.js"></script>    
                                                                <script>

                                                                         function setVideoSize() {
                                                                           const vidWidth = 1920;
                                                                           const vidHeight = 1080;
                                                                           const windowWidth = window.innerWidth;
                                                                           const windowHeight = window.innerHeight;
                                                                           const tempVidWidth = windowHeight * vidWidth / vidHeight;
                                                                           const tempVidHeight = windowWidth * vidHeight / vidWidth;
                                                                           const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
                                                                           const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
                                                                           const tmVideo = $('#tm-video');

                                                                           tmVideo.css('width', newVidWidth);
                                                                           tmVideo.css('height', newVidHeight);
                                                                         }

                                                                         function openTab(evt, id) {
                                                                           $('.tm-tab-content').hide();
                                                                           $('#' + id).show();
                                                                           $('.tm-tab-link').removeClass('active');
                                                                           $(evt.currentTarget).addClass('active');
                                                                         }    

                                                                                 function initPage() {
                                                                                   let pageId = location.hash;

                                                                                   if(pageId) {
                                                                                     highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
                                                                                     showPage($(pageId));
                                                                                   }
                                                                                   else {
                                                                                     pageId = $('.tm-page-link.active').attr('href');
                                                                                     showPage($(pageId));
                                                                                   }
                                                                                 }

                                                                                    function highlightMenu(menuItem) {
                                                                                      $('.tm-page-link').removeClass('active');
                                                                                      menuItem.addClass('active');
                                                                                    }
                                                                                
                                                                                    function showPage(page) {
                                                                                      $('.tm-page-content').hide();
                                                                                      page.show();
                                                                                    }
                                                                                
                                                                                    $(document).ready(function(){
                                                                                    
      /***************** Pages *****************/

                                                                                         initPage();

                                                                                         $('.tm-page-link').click(function(event) {
                                                                                        
                                                                                           if(window.innerWidth > 991) {
                                                                                             event.preventDefault();
                                                                                           }
                                                                                       
                                                                                           highlightMenu($(event.currentTarget));
                                                                                           showPage($(event.currentTarget.hash));
                                                                                         });

      
      /***************** Tabs *******************/

                                                                                         $('.tm-tab-link').on('click', e => {
                                                                                           e.preventDefault(); 
                                                                                           openTab(e, $(e.target).data('id'));
                                                                                         });
                                                                                     
                                                                                         $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

                                                                                         setVideoSize();

      // Set video background size based on window size
                                                                                         let timeout;
                                                                                         window.onresize = function(){
                                                                                           clearTimeout(timeout);
                                                                                           timeout = setTimeout(setVideoSize, 100);
                                                                                         };

      // Play/Pause button for video background      
                                                                                             const btn = $("#tm-video-control-button");

                                                                                             btn.on("click", function(e) {
                                                                                               const video = document.getElementById("tm-video");
                                                                                               $(this).removeClass();
                                                                                            
                                                                                               if (video.paused) {
                                                                                                 video.play();
                                                                                                 $(this).addClass("fas fa-pause");
                                                                                               } else {
                                                                                                 video.pause();
                                                                                                 $(this).addClass("fas fa-play");
                                                                                               }
                                                                                             });
                                                                                             });
      
                                                                                    </script>
                                                                    </body>
                                                            </html>