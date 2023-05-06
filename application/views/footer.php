<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
      </main>
      
      <footer class="page-footer red darken-3">
        
        <div class="container">
          <div class="collumns">
            <div class="col s12">
            <a href="<?=site_url('#')?>" class="secondary-content"> 
              <img src="asset/img/GRG-RED.jpg" class="secondary-content" alt="Logo Kami" width="10%"  style="border-radius:8px; ">
              </a>
              <h5 class="white-text">Garaga 3DC</h5>
              <blockquote>
                <p class="grey-text text-lighten-4">We Create This to Overcome Some Business.</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <small>
              Copyright © <?= date("Y"); ?> Garaga 3DC. All rights reserved.
            </small>
          </div>
        </div>
      </footer>

      <script type="text/javascript">
        var element = document.querySelector('.sidenav');
        var instance = M.Sidenav.init(element);
      </script>

      <style media="screen">
        body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
        }

        main {
          flex: 1 0 auto;
        }
      </style>
    </body>
  </html>
